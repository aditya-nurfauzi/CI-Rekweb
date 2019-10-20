<?php

class Mpahlawan extends CI_Model{

	public function tampil_pahlawan(){
		$query = $this->db->get("pahlawan");
		return $query->result();
	}

	public function tampil_pahlawan_satuan($no){
		$query = $this->db->get_where("pahlawan", array('no' => $no));
		return $query->result();
	}

	public function tambah_data($data){
		$this->db->insert("pahlawan",$data);
		return $this->db->count_all_results('pahlawan');
	}

	public function delete_data($no){
		$this->db->where("no", $no);
		$this->db->delete("pahlawan");
	}

	public function edit_data($data) {
		$this->db->where('no', $data['no']);
		$this->db->update('pahlawan', $data);
		// return $this->db->count('pahlawan');
	}
}
