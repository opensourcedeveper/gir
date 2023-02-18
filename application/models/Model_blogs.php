<?php 

class Model_blogs extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
        
        public function create($data)
	{
		if($data) {
			$insert = $this->db->insert('it_blogs', $data);
			return ($insert == true) ? true : false;
		}
	}
        /* get the reports data */
	public function getBlogsData($id = null)
	{
		if($id) {
//			$sql = "SELECT * FROM it_blogs where id = ?";
                        $sql = "SELECT id,title,slug,description,image, DATE_FORMAT(created_at,'%d-%m-%Y')as created_at FROM it_blogs where id = ?";
			$query = $this->db->query($sql, array($id));
			return $query->row_array();
		}

		$sql = "SELECT id,title,slug,description,image, DATE_FORMAT(created_at,'%d-%m-%Y')as created_at FROM it_blogs where is_del = 0 ORDER BY id DESC ";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
        
        /* get the reports data */
	public function getLatestBlogsData($limit)
	{
                $sql = "SELECT b.id,b.title,b.slug,b.description,b.image, DATE_FORMAT(b.created_at,'%d-%m-%Y')as created_at, concat(u.firstname,' ',u.lastname) as fullname  FROM it_blogs b,users u where b.created_by = u.id and b.is_del = 0 ORDER BY id DESC limit ?";
                $query = $this->db->query($sql, array($limit));
                return $query->result_array();
	}
        
        /* get the reports data */
	public function getBlogsData2($slug)
	{
		if($slug) {
			$sql = "SELECT * FROM it_blogs where slug = ?";
			$query = $this->db->query($sql, array($slug));
			return $query->row_array();
		}
	}
        
        /* get the blogs data */
	public function getBlogsByKeyword($keyword)
	{
			$sql = "SELECT * FROM it_blogs where title like '%$keyword%' ";
			$query = $this->db->query($sql, array($keyword));
			return $query->result_array();
	}
        
        public function update($data, $id)
	{
		if($data && $id) {
			$this->db->where('id', $id);
			$update = $this->db->update('it_blogs', $data);
			return ($update == true) ? true : false;
		}
	}
        
}