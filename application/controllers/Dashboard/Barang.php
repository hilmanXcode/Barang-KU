<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {


    function __construct() {

        parent::__construct();

        if(!$this->session->logged_in){
            redirect('/');
            die();
        }

        $this->load->model('barang_model');
        
    }

    
    
    public function index(){

        $data = array(
            'page' => 'Barang',
            'data_barang' => $this->barang_model->get_all()
        );

        $this->load->view('templates/dashboard/header', $data);
        $this->load->view('dashboard/barang/index', $data);
        $this->load->view('templates/dashboard/footer');

    }

    public function tambah(){

        $data = array(
            "page" => "Barang"
        );

        $this->load->view('templates/dashboard/header', $data);
        $this->load->view('dashboard/barang/tambah');
        $this->load->view('templates/dashboard/footer');
        
    }

    public function insertbarang(){

        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('stock', 'Stock', 'required|numeric|is_natural_no_zero');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric|is_natural_no_zero');

        if($this->form_validation->run() === false){
            $data = array(
                "errors" => $this->form_validation->error_array(),
                "page" => "Barang"
            );

            $this->load->view('templates/dashboard/header', $data);
            $this->load->view('dashboard/barang/tambah');
            $this->load->view('templates/dashboard/footer', $data);
        } else {

            $this->barang_model->insert();

            $this->session->success_message = "🥳 Berhasil menambahkan barang baru";
            
            redirect('/dashboard/barang');
        }

    }


    public function edit($id){
        
        $data = array(
            "data_barang" => $this->barang_model->get_by_id($id),
            "target_id" => $id,
            "page" => "Barang"
        );

        $this->load->view('templates/dashboard/header', $data);
        $this->load->view('dashboard/barang/edit', $data);
        $this->load->view('templates/dashboard/footer');

    }

    public function update($id){

        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('stock', 'Stock', 'required|numeric|is_natural_no_zero');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric|is_natural_no_zero');


        if($this->form_validation->run() === false){
            $data = array(
                "errors" => $this->form_validation->error_array(),
                "page" => "Barang",
                "data_barang" => $this->barang_model->get_by_id($id)
            );

            $this->load->view('templates/dashboard/header', $data);
            $this->load->view('dashboard/barang/edit', $data);
            $this->load->view('templates/dashboard/footer', $data);
        } else {

            $this->barang_model->update($id);

            $this->session->success_message = "🥳 Berhasil meng-update data barang";
            
            redirect('/dashboard/barang');
        }


    }

    public function delete($id){
        
        if($this->barang_model->delete($id)){
            redirect('/dashboard/barang');
        } else {
            redirect('/dashboard/barang');
        }

    }

    public function fetchstock(){


        $output = "";
        $id = $this->input->post('id_barang');

        if($id){
            $data = $this->barang_model->get_by_id($id);
        }

        if(!empty($data)){
            $stock = $data[0]->stock;
            $output .= "
                <div class='form-group row'>
                    <label class='col-form-label col-md-2 mb-3'>Stock </label>
                    <div class='col-md-10 mb-3'>
                        <input class='form-control' type='number' value='$stock' name='stock' disabled>
                    </div>
                </div>
            ";
            } else {
                $output .= "
                    <div class='form-group row'>
                        <label class='col-form-label col-md-2 mb-3'>Stock </label>
                        <div class='col-md-10 mb-3'>
                            <input class='form-control' type='number' value='0' name='stock' disabled>
                        </div>
                    </div>
                ";
            }
            echo $output;
    }


    public function fetchnotification(){

        $this->load->model("notification_model");

        $data = $this->notification_model->fetchnotification();


        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($data, JSON_PRETTY_PRINT));

    }

    public function fetchoos(){

        $this->load->model("notification_model");

        $response = array();

        $data_barang = $this->barang_model->fetchoos();
        
        foreach($data_barang as $data){
            $query = $this->db->query("SELECT id FROM notification WHERE id_barang = $data->id");
            if(!$query->row()){

                $data_baru = array(
                    "id" => $data->id,
                    "nama_barang" => $data->nama_barang,
                    "stock" => $data->stock
                );

                array_push($response, $data_baru);

                $this->notification_model->insert($data->id, "Stock barang $data->nama_barang dengan id: $data->id mulai menipis, stock: $data->stock", "sended");

            }
        }

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response, JSON_PRETTY_PRINT));
    }

   

}


?>