<?php 

class Model_pressrelease extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
        
        public function create($data)
	{
		if($data) {
			$insert = $this->db->insert('it_pressrelease', $data);
			return ($insert == true) ? true : false;
		}
	}
        /* get the reports data */
	public function getPressReleaseData($id = null)
	{
		if($id) {
//			$sql = "SELECT * FROM it_pressrelease where id = ?";
                        $sql = "SELECT id,title,slug,image,description, DATE_FORMAT(created_at,'%d-%m-%Y')as created_at FROM it_pressrelease where id = ?";
			$query = $this->db->query($sql, array($id));
			return $query->row_array();
		}

		$sql = "SELECT id,title,slug,image,description, DATE_FORMAT(created_at,'%d-%m-%Y')as created_at FROM it_pressrelease where is_del = 0 ORDER BY id DESC";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
        
        /* get the reports data */
	public function getLatestPressReleaseData($limit)
	{
                $sql = "SELECT p.id,p.title,p.slug,p.image, DATE_FORMAT(p.created_at,'%d-%m-%Y')as created_at, concat(u.firstname,' ',u.lastname) as fullname  FROM it_pressrelease p,users u where p.created_by = u.id and p.is_del = 0 ORDER BY id DESC limit ?";
                $query = $this->db->query($sql, array($limit));
                return $query->result_array();
	}
        
         /* get the reports data */
	public function getPressReleaseData2($slug)
	{
		if($slug) {
			$sql = "SELECT * FROM it_pressrelease where slug = ?";
			$query = $this->db->query($sql, array($slug));
			return $query->row_array();
		}
	}
        
        /* get the Press Release data */
	public function getPressReleaseByKeyword($keyword)
	{
			$sql = "SELECT * FROM it_pressrelease where title like '%$keyword%' ";
			$query = $this->db->query($sql, array($keyword));
			return $query->result_array();
	}
        
        public function update($data, $id)
	{
		if($data && $id) {
			$this->db->where('id', $id);
			$update = $this->db->update('it_pressrelease', $data);
			return ($update == true) ? true : false;
		}
	}
        
}