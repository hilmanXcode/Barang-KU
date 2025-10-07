<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notification_model extends CI_Model {

    public function insert($id_barang, $message, $status){
        $data = array(
            "id_barang" => htmlspecialchars($id_barang),
            "message" => htmlspecialchars($message),
            "status" => htmlspecialchars($status)
        );

        $this->db->insert("notification", $data);
    }

}

?>