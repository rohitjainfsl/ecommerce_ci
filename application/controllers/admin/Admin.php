<?php
// Admin.php (Controller)
class Admin extends CI_Controller
{
    public function index(){
        $this->load->view('admin/templates/header');
        if(@$_SESSION["logged_in"]){
            $this->load->view('admin/admin');
        }
        else
            $this->load->view('admin/login');
            $this->load->view('admin/templates/footer');
    }
    public function login(){
        if($this->input->post('username') && $this->input->post('password')){
            
            $query = $this->db->query("SELECT * FROM admin WHERE username = '".$this->input->post('username')."' AND password = '".md5($this->input->post('password'))."' ");
            if($query->num_rows() > 0){
                $this->session->set_userdata("logged_in", true);
                $this->session->set_userdata("logged_name", $query->result()->username);
                redirect('admin/admin');
            }
        }
        return;
    }
    // Add product
    public function add_product()
    {
        // Your product addition code here
    }

    // Manage products
    public function manage_products()
    {
        // Your product listing code here
    }

    // Edit product
    public function edit_product($product_id)
    {
        // Your product editing code here
    }

    // Delete product
    public function delete_product($product_id)
    {
        // Your product deletion code here
    }
}
