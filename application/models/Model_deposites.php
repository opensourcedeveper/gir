<?php 

class Model_deposites extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
        
        /* get the brand data */
	public function fetchDepositeData($id = null)
	{
		if($id) {
			$sql = "SELECT * FROM it_bank_deposites where id = ?";
			$query = $this->db->query($sql, array($id));
			return $query->row_array();
		}

		$sql = "SELECT * FROM it_bank_deposites ORDER BY id DESC ";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function create($data)
	{
		if($data) {
			$insert = $this->db->insert('it_bank_deposites', $data);
			return ($insert == true) ? true : false;
		}
	}

	public function update($data, $id)
	{
		if($data && $id) {
			$this->db->where('id', $id);
			$update = $this->db->update('it_bank_deposites', $data);
			return ($update == true) ? true : false;
		}
	}
//
	public function remove($id)
	{
		if($id) {
			$this->db->where('id', $id);
			$delete = $this->db->delete('it_bank_deposites');
			return ($delete == true) ? true : false;
		}
	}
//
//	public function countTotalProducts()
//	{
//		$sql = "SELECT * FROM products";
//		$query = $this->db->query($sql);
//		return $query->num_rows();
//	}
//
//
//	public function countTotalbrands()
//	{
//		$sql = "SELECT * FROM brands";
//		$query = $this->db->query($sql);
//		return $query->num_rows();
//	}
//
//	public function countTotalcategory()
//	{
//		$sql = "SELECT * FROM categories";
//		$query = $this->db->query($sql);
//		return $query->num_rows();
//	}
//
//
//	public function countTotalattribures()
//	{
//		$sql = "SELECT * FROM attributes";
//		$query = $this->db->query($sql);
//		return $query->num_rows();
//	}

}