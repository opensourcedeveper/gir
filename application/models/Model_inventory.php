<?php 

class Model_inventory extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	/* get the brand data */
	public function getInventoryData($id = null)
	{
		if($id) {
			$sql = "SELECT * FROM it_inventory where id = ?";
			$query = $this->db->query($sql, array($id));
			return $query->row_array();
		}

		$sql = "SELECT * FROM it_inventory ORDER BY id DESC";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
        
	public function create($data)
	{
		if($data) {
			$insert = $this->db->insert('it_inventory', $data);
			return ($insert == true) ? true : false;
		}
	}

	public function update($data, $id)
	{
		if($data && $id) {
			$this->db->where('id', $id);
			$update = $this->db->update('it_inventory', $data);
			return ($update == true) ? true : false;
		}
	}

	public function remove($id)
	{
		if($id) {
			$this->db->where('id', $id);
			$delete = $this->db->delete('it_inventory');
			return ($delete == true) ? true : false;
		}
	}

}