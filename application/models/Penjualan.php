<?php

class Penjualan extends CI_Model {

    public function insert(){
        $data = array(
            "nama_barang" => $this->input->post('nama_barang'),
            "jumlah" => $this->input->post('jumlah'),
            "harga" => $this->input->post('harga'),
            "tanggal" => date('d'),
            "bulan" => date('m'),
            "tahun" => date('Y')
        );

        $this->db->insert('laporan_penjualan', $data);
    }

    public function getDay(){

        $this->db->select('tanggal');
        // $this->db->where('bulan')
        $this->db->distinct();

        return $this->db->get_where('laporan_penjualan', array('bulan' => date('m'), 'tahun' => date('Y')))->result();
    }

    public function getTotalInDay(){
        $month = date('m');
        $query = $this->db->query("SELECT tanggal, jumlah * harga AS total_harga FROM laporan_penjualan WHERE tahun = 2025 AND bulan = $month ORDER BY tanggal ASC;");

        return $query->result();
    }

    public function getAllData(){
        $query = $this->db->get_where('laporan_penjualan', array('bulan' => date('m'), 'tahun' => date('Y')));

        return $query->result();
    }



}

?>