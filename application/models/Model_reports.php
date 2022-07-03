<?php 

class Model_reports extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
        
        public function create($data)
	{
		if($data) {
			$insert = $this->db->insert('it_reports', $data);
			return ($insert == true) ? true : false;
		}
	}
        
        public function create_faqs($data)
	{
		if($data) {
			$insert = $this->db->insert('it_faqs', $data);
			return ($insert == true) ? true : false;
		}
	}
        /* get the reports data */
	public function getReportsData($id = null)
	{
		if($id) {
			$sql = "SELECT * FROM it_reports where id = ?";
			$query = $this->db->query($sql, array($id));
			return $query->row_array();
		}

		$sql = "SELECT * FROM it_reports where is_del = 0 ORDER BY id DESC";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
                
        /* get the reports data */
	public function getReportsByCategory($id = null)
	{
		if($id) {
			$sql = "SELECT r.*, c.name as category_name FROM it_reports r, categories c where r.category = ? and r.category = c.id ORDER BY r.id DESC";
			$query = $this->db->query($sql, array($id));
			return $query->result_array();
		}

		$sql = "SELECT r.*, c.name as category_name FROM it_reports r, categories c where r.category = c.id and is_del = 0 ORDER BY r.id DESC";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
        
        /* get the reports data */
	public function getFaqsByReportId($report_id = '')
	{
			$sql = "SELECT * FROM it_faqs where report_id = ?";
			$query = $this->db->query($sql, array($report_id));
			return $query->result_array();
	}
        
        /* get the reports data */
	public function getReportsBySlug($slug = '')
	{
			$sql = "SELECT * FROM it_reports where slug = ?";
			$query = $this->db->query($sql, array($slug));
			return $query->row_array();
	}
        
        /* get the reports data */
	public function getReportsByKeyword($keyword)
	{
			$sql = "SELECT * FROM it_reports where title like '%$keyword%' ";
			$query = $this->db->query($sql, array($keyword));
			return $query->result_array();
	}
        
        /* get the reports data */
	public function getReportsByTitle($keyword)
	{
			$sql = "SELECT * FROM it_reports where title = ? ";
			$query = $this->db->query($sql, array($keyword));
			return $query->row_array();
	}
        
        public function update($data, $id)
	{
		if($data && $id) {
			$this->db->where('id', $id);
			$update = $this->db->update('it_reports', $data);
			return ($update == true) ? true : false;
		}
	}
        
        public function createFormRequest($data)
	{
		if($data) {
			$insert = $this->db->insert('it_form_request', $data);
			return ($insert == true) ? true : false;
		}
	}
        
        public function getFormRequestData($id = null)
	{
		if($id) {
			$sql = "SELECT * FROM it_form_request where id = ?";
			$query = $this->db->query($sql, array($id));
			return $query->row_array();
		}

		$sql = "SELECT * FROM it_form_request ORDER BY id DESC";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
        

	/*getting the total months*/
	private function months()
	{
		return array('01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12');
	}

	/* getting the year of the orders */
	public function getOrderYear()
	{
		$sql = "SELECT * FROM orders WHERE paid_status = ?";
		$query = $this->db->query($sql, array(1));
		$result = $query->result_array();
		
		$return_data = array();
		foreach ($result as $k => $v) {
			$date = date('Y', $v['date_time']);
			$return_data[] = $date;
		}

		$return_data = array_unique($return_data);

		return $return_data;
	}

	// getting the order reports based on the year and moths
	public function getOrderData($year)
	{	
		if($year) {
			$months = $this->months();
			
			$sql = "SELECT * FROM orders WHERE paid_status = ?";
			$query = $this->db->query($sql, array(1));
			$result = $query->result_array();

			$final_data = array();
			foreach ($months as $month_k => $month_y) {
				$get_mon_year = $year.'-'.$month_y;	

				$final_data[$get_mon_year][] = '';
				foreach ($result as $k => $v) {
					$month_year = date('Y-m', $v['date_time']);

					if($get_mon_year == $month_year) {
						$final_data[$get_mon_year][] = $v;
					}
				}
			}	


			return $final_data;
			
		}
	}
        
        public function removeFaqs($id)
	{
		if($id) {
			$this->db->where('id', $id);
			$delete = $this->db->delete('it_faqs');
			return ($delete == true) ? true : false;
		}
	}
        
        public function remove($id)
	{
		if($id) {
			$this->db->where('id', $id);
			$delete = $this->db->delete('it_reports');
			return ($delete == true) ? true : false;
		}
	}
        
}