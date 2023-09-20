<?php 
class User extends CI_Controller {
    public function index(){        
        $this->load->view('templates/header');
        $this->load->view('user/index');
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