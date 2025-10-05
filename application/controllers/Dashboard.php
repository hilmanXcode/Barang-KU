<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    public function index(){

        if(!$this->session->logged_in){
            redirect('/');
            die();
        }

        $this->load->model('penjualan');


        $data = array(
            "page" => "Dashboard",
            "hari" => $this->penjualan->getDay(),
            "totalinDay" => $this->penjualan->getTotalInDay(),
            "datapenjualan" => $this->penjualan->getAllData()
        );
        $this->load->view('templates/dashboard/header', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('templates/dashboard/footer');
    }

    public function penjualan(){

        if(!$this->session->logged_in){
            redirect('/');
            die();
        }

        $data = array (
            "page" => "Tambah Penjualan"
        );
        $this->load->view('templates/dashboard/header', $data);
        $this->load->view('templates/dashboard/penjualan/tambah');
        $this->load->view('templates/dashboard/footer');
    }

    public function insertPenjualan(){
        if(!$this->session->logged_in){
            redirect('/');
            die();
        }
        $this->load->model('penjualan');
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');

        if($this->form_validation->run() === false){
            $data = array(
                "page" => "Tambah Penjualan",
                "errors" => $this->form_validation->error_array()
            );

            $this->load->view('templates/dashboard/header', $data);
            $this->load->view('templates/dashboard/penjualan/tambah');
            $this->load->view('templates/dashboard/footer', $data);
        } else {
            $this->penjualan->insert();

            redirect('/dashboard');
        }

    }

}


?>