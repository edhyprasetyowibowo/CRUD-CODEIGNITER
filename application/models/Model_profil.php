<?php 
 
class Model_profil extends CI_Model{
	function get_data(){
		return $this->db->get('profil');
	}

	function add_data($data){
		$this->db->insert('profil',$data);
	}

	function edit_data($where){		
		return $this->db->get_where('profil',$where);
	}

	function update_proses($where,$data){
		$this->db->where($where);
		$this->db->update('profil',$data);
	}	

	function hapus_data($where){
		$this->db->where($where);
		$this->db->delete('profil');
	}
}