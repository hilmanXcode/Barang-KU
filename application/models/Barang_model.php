<?php

class Barang_model extends CI_Model {

    public function insert(){

        $data = array(
            "nama_barang" => htmlspecialchars($this->input->post('nama_barang')),
            "stock" => htmlspecialchars($this->input->post('stock')),
            "harga" => htmlspecialchars($this->input->post('harga'))
        );

        return $this->db->insert('barang', $data);

    }


    public function get_allmonth(){
        $query = $this->db->query("SELECT DISTINCT tanggal FROM penjualan ORDER BY tanggal ASC");

        return $query->result();
    }

    public function get_now(){
        $bulan = date('m');
        
        $query = $this->db->query("SELECT penjualan.nama_pembeli, barang.nama_barang, penjualan.jumlah, barang.harga AS harga_barang, penjualan.jumlah * barang.harga AS total_harga
FROM penjualan, barang WHERE barang.id = penjualan.id_barang AND bulan = $bulan ORDER BY penjualan.tanggal ASC;");

        return $query->result();

    }


    public function update($id){
        $data = array(
            "nama_barang" => htmlspecialchars($this->input->post('nama_barang')),
            "stock" => htmlspecialchars($this->input->post('stock')),
            "harga" => htmlspecialchars($this->input->post('harga'))
        );

        $this->db->where('id', $id);


        return $this->db->update('barang', $data);
    }

    public function get_all(){

        $query = $this->db->get('barang');

        return $query->result();

    }

    public function get_by_id($id){
        $query = $this->db->get_where('barang', array('id' => $id));

        return $query->result();
    }

    public function delete($id){
        
        $query = $this->db->query("SELECT COUNT(id) AS total_barang FROM barang WHERE id = $id");
        $data = $query->row();

        if($data->total_barang < 0){
            $this->session->error_message = "🤔 Data barang tidak ada";
            return false;
        } else {
            $this->session->success_message = "🥳 Yeay, kamu berhasil menghapus barang";
            $this->db->where('id', $id);
            $this->db->delete('barang');

            return true;
        }
    }

}

?>