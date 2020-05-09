<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

    function getBarangOrder($where,$order,$limit,$tabel)
    {
        $this->db->where($where);
        $this->db->limit($limit);
        $this->db->order_by($order);
        return $this->db->get($tabel);
    }

}