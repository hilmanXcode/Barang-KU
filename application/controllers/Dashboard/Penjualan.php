<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        
        if(!$this->session->logged_in){
            redirect('/');
            die();
        }
    }
    
    public function index(){

        $this->load->model('penjualan_model');


        $data = array(
            "page" => "Dashboard",
            "hari" => $this->penjualan_model->getDay(),
            "totalinDay" => $this->penjualan_model->getTotalInDay(),
            "datapenjualan" => $this->penjualan_model->getAllData(),
            "bulan" => $this->penjualan_model->getTransactions('month'),
            "date" => $this->penjualan_model->getTransactions('date'),
            "year" => $this->penjualan_model->getTransactions('year'),
            "target_bulanan" => $this->penjualan_model->getTargetBulanan()
        );
        $this->load->view('templates/dashboard/header', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('templates/dashboard/footer');
    }

    public function tambah(){

        $this->load->model('barang_model');
        

        $data = array (
            "page" => "Tambah Penjualan",
            "data_barang" => $this->barang_model->get_all()
        );

        $this->load->view('templates/dashboard/header', $data);
        $this->load->view('templates/dashboard/penjualan/tambah', $data);
        $this->load->view('templates/dashboard/footer');
    }


    public function target(){

        $this->load->model("penjualan_model");

        $data = array(
            "page" => "Setting Target Bulanan",
            "data" => $this->penjualan_model->getTargetBulanan()
        );

        $this->load->view('templates/dashboard/header', $data);
        $this->load->view('dashboard/penjualan/settarget', $data);
        $this->load->view('templates/dashboard/footer');
    }

    public function settarget(){
        
        $this->load->model('penjualan_model');

        $data = array(
            "page" => "Setting Target Bulanan"
        );

        $this->form_validation->set_rules('target_bulanan', 'Target Bulanan', 'required|numeric|is_natural_no_zero');

        if($this->form_validation->run() === false){
            $data = array(
                "page" => "Setting Target Bulanan",
                "errors" => $this->form_validation->error_array(),
                "data" => $this->penjualan_model->getTargetBulanan()
            );

            $this->load->view('templates/dashboard/header', $data);
            $this->load->view('dashboard/penjualan/settarget', $data);
            $this->load->view('templates/dashboard/footer');

        } else {
            $this->penjualan_model->setTargetBulanan();

            $this->session->success_message = "🥳 Yeay berhasil mengupdate target bulanan";

            redirect('/dashboard/penjualan');
        }


    }

    public function insertPenjualan(){
       
        $this->load->model('penjualan_model');
        $this->load->model('barang_model');
        $this->form_validation->set_rules('id_barang', 'Barang', 'required|numeric|is_natural_no_zero');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|numeric|is_natural_no_zero');

        if($this->form_validation->run() === false){
            $data = array(
                "page" => "Tambah Penjualan",
                "errors" => $this->form_validation->error_array(),
                "data_barang" => $this->barang_model->get_all()
            );

            $this->load->view('templates/dashboard/header', $data);
            $this->load->view('templates/dashboard/penjualan/tambah', $data);
            $this->load->view('templates/dashboard/footer', $data);
        } else {

            $this->penjualan_model->insert();

            $this->session->success_message = "🥳 Berhasil menambahkan penjualan baru";

            redirect('/dashboard/penjualan');
        }

    }

}


?>