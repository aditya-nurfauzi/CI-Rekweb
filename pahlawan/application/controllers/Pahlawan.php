<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pahlawan extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		$this->load->model('Mpahlawan');
	}
	
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function tampil(){
		
		$data['dat'] = $this->Mpahlawan->tampil_pahlawan();
		$this->load->view('vpahlawan',$data);
	}

	public function tambah_data(){
		$this->load->view('vtambah_data');
	}

	public function tambah_data_action(){
		$insert = array(
			'no' => $this->input->post("no"),
			'nama' => $this->input->post("nama"),
			'asal' => $this->input->post("asal"),
		);
		$this->Mpahlawan->tambah_data($insert);
		redirect('Pahlawan/tampil');
	 
	}

	public function delete_data($no){
		$this->Mpahlawan->delete_data($no);
		redirect('Pahlawan/tampil');
	}

	public function edit_data($no) {
		$data['dat'] = $this->Mpahlawan->tampil_pahlawan_satuan($no);
		$this->load->view('vedit_data', $data);
	}

	public function edit_data_action(){
		$update = array(
			'no' => $this->input->post("no"),
			'nama' => $this->input->post("nama"),
			'asal' => $this->input->post("asal"),
		);
		$this->Mpahlawan->edit_data($update);
		redirect('Pahlawan/tampil');
	}
}
