<?php 
class About extends CI_Controller {
    public function index(){   
        $this->load->view('templates/header');
        $this->load->view('user/about');
        $this->load->view('templates/footer');
    }
}
?>