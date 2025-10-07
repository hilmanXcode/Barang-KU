<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan_model extends CI_Model {

    public function insert(){

        $id_barang = $this->input->post('id_barang');

        $query = $this->db->query("SELECT nama_barang, harga, stock FROM barang WHERE id = $id_barang");

        if($query->row()){

            $barang = $query->row();

            if($this->input->post('jumlah') > $barang->stock){
                $this->session->error_message = "😔 Yahh stock barang nya kurang nih.";
                redirect('/dashboard/penjualan/tambah');
            } else {

                $updatedstock = $barang->stock - $this->input->post('jumlah');

                $this->db->query("UPDATE barang SET stock = $updatedstock WHERE id = $id_barang");

                $data = array(
                    "nama_barang" => $barang->nama_barang,
                    "jumlah" => $this->input->post('jumlah'),
                    "harga_satuan" => $barang->harga,
                    "tanggal" => date('d'),
                    "bulan" => date('m'),
                    "tahun" => date('Y')
                );

                $this->db->insert('laporan_penjualan', $data);

            }            

        } else {
            $this->session->error_message = "😨 Data barang tidak dapat ditemukan";
            redirect('/dashboard/penjualan/tambah');
            
        }
        
    }

    public function getTransactions($inMonthOrDate){

        $bulan = date('m');
        $date = date('d');
        $year = date('Y');

        switch($inMonthOrDate){
            case 'month':
                $query = $this->db->query("SELECT COUNT(id) AS total_transaksi FROM laporan_penjualan WHERE bulan = $bulan");
                return $query->row();
            break;
            
            case 'date':
                $query = $this->db->query("SELECT COUNT(id) AS total_transaksi FROM laporan_penjualan WHERE tanggal = $date");
                return $query->row();
            break;
            
            case 'year':
                $query = $this->db->query("SELECT COUNT(id) AS total_transaksi FROM laporan_penjualan WHERE tahun = $year");
                return $query->row();
            break;
        
            default:
                return "month/date/year only in parameter";
            break;
        }

    }

    public function getDay(){

        $this->db->select('tanggal');

        $this->db->distinct();

        $this->db->order_by("tanggal", "ASC");

        return $this->db->get_where('laporan_penjualan', array('bulan' => date('m'), 'tahun' => date('Y')))->result();
    }

    public function getTotalInDay(){
        $year = date('Y');
        $month = date('m');
        $query = $this->db->query("SELECT laporan_penjualan.tanggal, laporan_penjualan.jumlah * laporan_penjualan.harga_satuan AS total_harga FROM laporan_penjualan WHERE tahun = $year AND bulan = $month ORDER BY laporan_penjualan.tanggal ASC;");

        return $query->result();
    }

    public function getAllData(){
        
        $year = date('Y');
        $month = date('m');

        $query = $this->db->query("SELECT laporan_penjualan.id, laporan_penjualan.nama_barang, laporan_penjualan.jumlah, laporan_penjualan.harga_satuan, laporan_penjualan.tanggal, laporan_penjualan.bulan, laporan_penjualan.tahun FROM laporan_penjualan WHERE laporan_penjualan.bulan = $month AND laporan_penjualan.tahun = $year;");

        return $query->result();
    }



}

?>