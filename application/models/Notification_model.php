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

    public function fetchnotification(){
        $data = $this->db->get_where("notification", array("status" => "sended"))->result();
    
        foreach($data as $row){
            $this->db->query("UPDATE notification SET status = 'notified' WHERE id = $row->id");
        }

        return $data;
    }

    public function fetchnotified(){
        return $this->db->get_where("notification", array("status" => "notified"))->result();
    }

}

?>