<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
	{
		parent::__construct();

		if (!$this->ion_auth->logged_in()) :
			redirect('auth/login', 'refresh');
		endif;

        $this->load->model('article_model');
	}

	public function index()
	{
		$this->data['page'] = "admin/index";
		$this->load->view('admin/template', $this->data);
	}

	public function main($content_type = CONTENT_CLASS_STR)
    {
        $type   = $this->getContentTypeId($content_type);
        $limit  = $this->config->item('per_page');
        $offset = $this->uri->segment(4);

        $config['base_url']     = base_url("admin/main/" . $content_type . "/");
        $config['total_rows']   = $this->article_model->get_count($type, 0);
        $config['per_page']     = $this->config->item('per_page');
        $config['uri_segment']  = 4;
        $this->pagination->initialize($config);

        $this->data['content_type'] = $content_type;
        $this->data['title']        = ucfirst($content_type) . " Management";
        $this->data['links']        = $this->pagination->create_links();
        $this->data['recordset']    = $this->article_model->get_entries($type, null, $limit, $offset, null, null)->result();
        $this->data['sidemenu']     = $this->load->view('admin/sidemenu', array('page' => $content_type, 'active' => 'main'), true);
        $this->data['page']         = "admin/gen-main";
        $this->load->view('admin/template', $this->data);
    }

    private function getContentTypeId($content_type)
    {
        switch ($content_type) {
            case 'service':
                return CONTENT_SERVICE;
                break;

            default:
                return CONTENT_PRODUCT;
                break;
        }
    }

    public function form($content_type = CONTENT_CLASS_STR, $id = null)
    {
        $type = $this->getContentTypeId($content_type);

        if (is_null($id)) : // add
            $this->data['title'] = "Add " . ucfirst($content_type);
            $this->form_validation->set_rules('title', 'Title', 'trim|required|is_unique[article.title]');
        else : // edit
            $this->data['title'] = "Edit " . ucfirst($content_type);
            $this->data['result'] = $this->article_model->get_entries($type, $id)->row();
            $this->article_model->date_created = $this->data['result']->date_created;
            $this->form_validation->set_rules('title', 'Title', 'trim|required');
        endif;

        $this->form_validation->set_rules('article_id', 'ID', 'trim');
        $this->form_validation->set_rules('slug', 'Slug', 'trim|required');
        $this->form_validation->set_rules('content', 'Content', 'trim|required');
        $this->form_validation->set_rules('is_active', 'Active', 'trim');
        $this->form_validation->set_rules('is_featured', 'Featured', 'trim');

        $this->data['content_type'] = $content_type;
        $this->data['sidemenu'] 	= $this->load->view('admin/sidemenu', array('page' => $content_type, 'active' => 'add'), true);
        $this->data['page']     	= "admin/gen-form";

        if ($this->form_validation->run() == true) :

            if (is_null($id) || !empty($_FILES['image']['name'])) :
                $image_ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                $config['upload_path']      = FCPATH . $this->config->item('image_upload_path');
                $config['allowed_types']    = 'gif|jpg|jpeg|png';
                $config['overwrite']        = TRUE;
                $config['file_name']        = $content_type . '-' . $this->input->post('slug') . '.' . $image_ext;
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('image')) :
                    $this->data['message'] = $this->upload->display_errors();
                    $this->load->view('admin/template', $this->data);
                    return false;
                endif;

                $this->article_model->image = $config['file_name'];
            else:
                $this->article_model->image = $this->data['result']->image;
            endif;

            if (!$this->input->post('article_id'))
                $this->article_model->insert_entry($type);
            else
                $this->article_model->update_entry($type);

            redirect('admin/main/' . $content_type, 'refresh');
        else :
            //set the flash data error message if there is one
            $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
            $this->load->view('admin/template', $this->data);
        endif;
    }

    public function delete()
    {
        $this->article_model->remove_entry();
        $msg = 'Successfully removed data.';
        echo json_encode(array('st' => 1, 'msg' => $msg));
    }

    public function status_update($action, $id, $page)
    {
        $id = (int) $id;
        switch ($action) {
            case 'deactivate':
                $field = 'is_active';
                $value = 0;
                break;

            case 'feature':
                $field = 'is_featured';
                $value = 1;
                break;

            case 'unfeature':
                $field = 'is_featured';
                $value = 0;
                break;
            
            default:
                $field = 'is_active';
                $value = 1;
                break;
        }

        $this->article_model->status_update($field, $value, $id);
        redirect("admin/main/".$page, 'refresh');
    }
}