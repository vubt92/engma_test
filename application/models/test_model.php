<?php 
class Test_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	///
	public function count_up($ip, $user_agent){
		$this->db->insert('count_up', array('ip' => $ip, 'user_agent'=>$user_agent));
		return $this->db->insert_id();
	}
	public function show_all_count_up(){
		$this->db->order_by('id', 'desc');
		$query = $this->db->get('count_up');
		return $query->result_array();
	}
	public function erase(){
		$this->db->empty_table('count_up');
	}
}
?>