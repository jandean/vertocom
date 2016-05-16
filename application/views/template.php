<?php 
$data = array();

$this->load->view('templates/header');

$this->load->view($page, $data);

$this->load->view('templates/footer');

?>