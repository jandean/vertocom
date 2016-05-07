<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if (!$this->ion_auth->logged_in()) :
            //redirect them to the login page
            redirect('auth/login', 'refresh');
        endif;

        $this->load->model(array('pages_model', 'carousel_model'));
    }

    public function contact()
    {
        $this->form_validation->set_rules('page_type', 'Page Type', 'trim');
        $this->form_validation->set_rules('content', 'Content', 'trim|required');

        $this->data['title']        = "Contact Us";
        $this->data['type']         = "contact";
        $this->data['result']       = $this->pages_model->get_entries()->row();
        $this->data['sidemenu']     = $this->load->view('admin/sidemenu', array('page' => 'pages', 'active' => 'contact'), true);
        $this->data['page']         = "admin/pages-form";

        if ($this->form_validation->run() == true) :
            $this->pages_model->update_entry();
            redirect('pages/contact', 'refresh');
        else :
            //set the flash data error message if there is one
            $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
            $this->load->view('admin/template', $this->data);
        endif;
    }

    public function terms()
    {
        $this->form_validation->set_rules('page_type', 'Page Type', 'trim');
        $this->form_validation->set_rules('content', 'Content', 'trim|required');

        $this->data['title']        = "Terms of Use";
        $this->data['type']         = "terms";
        $this->data['result']       = $this->pages_model->get_entries(PAGE_TERMS)->row();
        $this->data['sidemenu']     = $this->load->view('admin/sidemenu', array('page' => 'pages', 'active' => 'terms'), true);
        $this->data['page']         = "admin/pages-form";

        if ($this->form_validation->run() == true) :
            $this->pages_model->update_entry(PAGE_TERMS);
            redirect('pages/terms', 'refresh');
        else :
            //set the flash data error message if there is one
            $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
            $this->load->view('admin/template', $this->data);
        endif;
    }

    public function policy()
    {
        $this->form_validation->set_rules('page_type', 'Page Type', 'trim');
        $this->form_validation->set_rules('content', 'Content', 'trim|required');

        $this->data['title']        = "Privacy Policy";
        $this->data['type']         = "policy";
        $this->data['result']       = $this->pages_model->get_entries(PAGE_POLICY)->row();
        $this->data['sidemenu']     = $this->load->view('admin/sidemenu', array('page' => 'pages', 'active' => 'policy'), true);
        $this->data['page']         = "admin/pages-form";

        if ($this->form_validation->run() == true) :
            $this->pages_model->update_entry(PAGE_POLICY);
            redirect('pages/policy', 'refresh');
        else :
            //set the flash data error message if there is one
            $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
            $this->load->view('admin/template', $this->data);
        endif;
    }

    public function carousel()
    {
        $limit  = $this->config->item('per_page');
        $offset = $this->uri->segment(4);

        $config['base_url']     = base_url("pages/carousel/");
        $config['total_rows']   = $this->carousel_model->get_count();
        $config['per_page']     = $this->config->item('per_page');
        $config['uri_segment']  = 4;
        $this->pagination->initialize($config);

        $this->data['links']        = $this->pagination->create_links();
        $this->data['recordset']    = $this->carousel_model->get_entries()->result();
        $this->data['sidemenu']     = $this->load->view('admin/sidemenu', array('page' => 'features', 'active' => 'carousel'), true);
        $this->data['page']         = "admin/carousel-main";
        $this->load->view('admin/template', $this->data);
    }

    public function carousel_form($id = null)
    {
        if (is_null($id)) : // add
            $this->data['title'] = "Add Image Carousel";
        else : // edit
            $this->data['title'] = "Edit  Image Carousel";
            $this->data['result'] = $this->carousel_model->get_entries($id)->row();
            $this->carousel_model->id = $this->data['result']->id;
            $this->carousel_model->date_created = $this->data['result']->date_created;
        endif;

        $this->form_validation->set_rules('url', 'URL', 'trim');
        $this->form_validation->set_rules('is_active', 'Active', 'trim');

        $this->data['sidemenu'] = $this->load->view('admin/sidemenu', array('page' => 'features', 'active' => 'add'), true);
        $this->data['page']     = "admin/carousel-form";

        if ($this->form_validation->run() == true) :

            if (is_null($id) || !empty($_FILES['image']['name'])) :
                //$image_ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                $config['upload_path']      = FCPATH . '/assets/images/uploads/';
                $config['allowed_types']    = 'gif|jpg|jpeg|png';
                $config['overwrite']        = TRUE;
                $config['file_name']        = 'carousel-' . str_replace(' ', '-', $_FILES['image']['name']);
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('image')) :
                    $this->data['message'] = $this->upload->display_errors();
                    $this->load->view('admin/template', $this->data);
                    return false;
                endif;

                $this->carousel_model->img = $config['file_name'];
            else:
                $this->carousel_model->img = $this->data['result']->img;
            endif;

            $this->carousel_model->save_carousel();

            redirect('pages/carousel', 'refresh');
        else :
            //set the flash data error message if there is one
            $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
            $this->load->view('admin/template', $this->data);
        endif;
    }

    public function delete()
    {
        $this->carousel_model->remove_entry();
        $msg = 'Successfully removed data.';
        echo json_encode(array('st' => 1, 'msg' => $msg));
    }
}