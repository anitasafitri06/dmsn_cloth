<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
        $where_arrival = ['status'=>'New Arrival'];
        $where_apparel = ['kategori' => 'Kaos', 'status' => 'Default'];
        $where_accesories = ['kategori' => 'Topi', 'status' => 'Hat'];
        $order = 'br_id DESC';
        $data['new_arrival'] = $this->Barang_model->getBarangOrder($where_arrival,$order,9,'barang')->result_array();
        $data['apparel'] = $this->Barang_model->getBarangOrder($where_apparel,$order,9,'barang')->result_array();
        $data['accesories'] = $this->Barang_model->getBarangOrder($where_accesories,$order,9,'barang')->result_array();
		$this->load->view('templates/header',$data);
		$this->load->view('home/index');
		$this->load->view('templates/footer');
	}
}
