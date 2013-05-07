<?php
class Ajax extends Public_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function get_amphur($type = NULL)
	{
		$result = $this->db->query('select id,amphur_name as text from amphures where province_id = ?',$_GET['q'])->result_array();
		echo $result ? json_encode($result) : '[{"id":"","text":""}]';
	}
	
	function get_adf_sub_categories(){
		$result = $this->db->query('select id,title as text from adf_sub_categories where adf_category_id = ?',$_GET['q'])->result_array();
		echo $result ? json_encode($result) : '[{"id":"","text":""}]';
	}
	
}
?>