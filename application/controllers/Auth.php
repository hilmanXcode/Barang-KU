<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    
    public function index(){
        $data = array(
            "page" => "Login"
        );
        $this->load->view('templates/auth/header', $data);
        $this->load->view('auth/login');
        $this->load->view('templates/auth/footer');
    }

    public function logout(){
        unset(
            $_SESSION['logged_in']
        );
        redirect('/');
    }

    public function login(){
        $this->load->model('user');

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        if($this->form_validation->run() === false){
               $data = array(
                    "page" => "Login",
                    "errors" => $this->form_validation->error_array()
                );
                $this->load->view('templates/auth/header', $data);
                $this->load->view('auth/login');
                $this->load->view('templates/auth/footer', $data);
        }
        else {
            
            if($this->user->verify_login() === true){
                $this->session->logged_in = true;
                redirect('/dashboard');
            } else {
                redirect('/');
            }
        }

    }

}


?>