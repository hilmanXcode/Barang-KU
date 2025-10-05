<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

    public function verify_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $this->db->where('username', $username);

        $query = $this->db->get('users');

        $data = $query->row();

        if($data){
            if(password_verify($password, $data->password) && $data->role == 'admin'){
                return true;
            }
            else if(password_verify($password, $data->password) && $data->role != 'admin') {
                $this->session->error_login = "Hanya admin yang dapat mengakses ini!";
                return false;
            }
            else {
                $this->session->error_login = "Username atau Password anda salah";
                return false;
            }
        } else {
            $this->session->error_login = "Username atau Password anda salah";
            return false;
        }

    }

}

?>