<?php 
class Signin extends CI_Controller {
    public function index(){   
        $this->load->view('templates/header');
        $this->load->view('user/signin');
        $this->load->view('templates/footer');
    }
    public function register() {
        // Your registration code here
    }

    
    public function login() {
        // Your login code here
    }
}
?>