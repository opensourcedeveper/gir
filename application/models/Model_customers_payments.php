<?php 

class Model_customers_payments extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getCustomersPaymentsData($CustomerPaymentsId = null)
	{
		if($CustomerPaymentsId) {
			$sql = "SELECT * FROM it_payments_dairy WHERE id = ?";
			$query = $this->db->query($sql, array($CustomerPaymentsId));
			return $query->row_array();
		}

		$sql = "SELECT * FROM it_payments_dairy ORDER BY id DESC";
		$query = $this->db->query($sql, array(1));
		return $query->result_array();
	}
        
        public function getCustomersPayments_ByCustID($CustomerID = null)
	{
		if($CustomerID) {
			$sql = "SELECT * FROM it_payments_dairy WHERE customer_id = ? ORDER BY id DESC";
			$query = $this->db->query($sql, array($CustomerID));
			return $query->result_array();
		}

		$sql = "SELECT * FROM it_payments_dairy ORDER BY id DESC";
		$query = $this->db->query($sql, array(1));
		return $query->result_array();
	}
        
        public function getPaymentsData_ByOrderId($order_id = null)
	{
		if($order_id) {
			$sql = "SELECT * FROM it_payments_dairy WHERE order_id = ?";
			$query = $this->db->query($sql, array($order_id));
			return $query->result_array();
		}
	}
        
	public function create($data)
	{
                if($data) {
			$insert = $this->db->insert('it_payments_dairy', $data);
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