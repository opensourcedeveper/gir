<?php 

class Model_customers extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getCustomersData($CustomerId = null)
	{
		if($CustomerId) {
			$sql = "SELECT * FROM it_customers WHERE id = ?";
			$query = $this->db->query($sql, array($CustomerId));
			return $query->row_array();
		}

		$sql = "SELECT * FROM it_customers ORDER BY id DESC";
		$query = $this->db->query($sql, array(1));
		return $query->result_array();
	}
        
        public function getCustomersDataByMobile($CustomerMobile = null)
	{
		if($CustomerMobile) {
			$sql = "SELECT * FROM it_customers WHERE phone = ?";
			$query = $this->db->query($sql, array($CustomerMobile));
			return $query->row_array();
		}
		return null;
	}
        
        public function getCustomersBydata($Customerdata = null)
	{
		if($Customerdata) {
			$sql = "SELECT * FROM it_customers WHERE name = '$Customerdata' or phone = '$Customerdata' ";
			$query = $this->db->query($sql, array($Customerdata));
			return $query->row_array();
		}
		return null;
	}
        
//	public function getUserGroup($userId = null) 
//	{
//		if($userId) {
//			$sql = "SELECT * FROM user_group WHERE user_id = ?";
//			$query = $this->db->query($sql, array($userId));
//			$result = $query->row_array();
//
//			$group_id = $result['group_id'];
//			$g_sql = "SELECT * FROM groups WHERE id = ?";
//			$g_query = $this->db->query($g_sql, array($group_id));
//			$q_result = $g_query->row_array();
//			return $q_result;
//		}
//	}

	public function create($data)
	{
                if($data) {
			$insert = $this->db->insert('it_customers', $data);
			return ($insert == true) ? true : false;
		}
	}

	public function update($id = null, $data = array())
	{
		$this->db->where('id', $id);
		$update = $this->db->update('it_customers', $data);
			
		return ($update == true) ? true : false;	
	}

	public function remove($id)
	{
		$this->db->where('id', $id);
		$delete = $this->db->delete('it_customers');
		return ($delete == true) ? true : false;
	}

//	public function countTotalUsers()
//	{
//		$sql = "SELECT * FROM users";
//		$query = $this->db->query($sql);
//		return $query->num_rows();
//	}
	
}