<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('article_model','pages_model','carousel_model'));
        $this->order_by = 'date_created DESC';
    }

    public function index()
    {
        //$this->data['classes']      = $this->article_model->get_entries(CONTENT_CLASS, null, null, null, 'date_updated')->result();
        //$this->data['home_side']    = $this->load->view('homepage_side', $this->data, true);

        //$this->data['banner']       = $this->pages_model->get_entries(PAGE_BANNER)->row()->content;
        //$this->data['side']         = $this->load->view('side', $this->data, true);
        //$this->data['recordset']    = $this->article_model->get_entries(CONTENT_ARTICLE, null, 7, null, $this->order_by)->result();
        //$this->data['carousel']     = $this->carousel_model->get_entries(null, 5)->result();
        $this->data['intro']            = $this->pages_model->get_entries(PAGE_HOME)->row();
        $this->data['featured_product'] = $this->article_model->get_featured(CONTENT_PRODUCT);
        $this->data['featured_service'] = $this->article_model->get_featured(CONTENT_SERVICE);
        $this->data['page']         = "home";
        $this->load->view('template', $this->data);
    }

    public function products()
    {
        $limit  = $this->config->item('per_page');
        $offset = $this->uri->segment(3);

        $config['base_url']     = base_url("main/products/");
        $config['total_rows']   = $this->article_model->get_count(CONTENT_PRODUCT);
        $config['per_page']     = $this->config->item('per_page');
        $this->pagination->initialize($config);

        $this->data['links']        = $this->pagination->create_links();
        $this->data['intro']        = $this->pages_model->get_entries(PAGE_PRODUCT)->row();
        // $this->data['side']         = $this->common_side;
        $this->data['recordset']    = $this->article_model->get_entries(CONTENT_PRODUCT, null, $limit, $offset, $this->order_by)->result();
        $this->data['subheader']    = $this->pages_model->get_header_footer(PAGE_SUBHEADER_PRODUCT);
        $this->data['subfooter']    = $this->pages_model->get_header_footer(PAGE_SUBFOOTER_PRODUCT);
        $this->data['page']         = "products";
        $this->load->view('template', $this->data);
    }

    public function services()
    {
        $limit  = $this->config->item('per_page');
        $offset = $this->uri->segment(3);

        $config['base_url']     = base_url("main/services/");
        $config['total_rows']   = $this->article_model->get_count(CONTENT_SERVICE);
        $config['per_page']     = $this->config->item('per_page');
        $this->pagination->initialize($config);

        $this->data['links']        = $this->pagination->create_links();
        $this->data['intro']        = $this->pages_model->get_entries(PAGE_SERVICE)->row();
        // $this->data['side']         = $this->common_side;
        $this->data['recordset']    = $this->article_model->get_entries(CONTENT_SERVICE, null, $limit, $offset, $this->order_by)->result();
        $this->data['subheader']    = $this->pages_model->get_header_footer(PAGE_SUBHEADER_SERVICE);
        $this->data['subfooter']    = $this->pages_model->get_header_footer(PAGE_SUBFOOTER_SERVICE);
        $this->data['page']         = "services";
        $this->load->view('template', $this->data);
    }
}