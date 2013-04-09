<?php
class Public_Controller extends Master_Controller
{
	function __construct()
	{
		parent::__construct();
		
		// check lang
		$this->template->title('ฟรีโพสต์ ฟรีประกาศ ลงโฆษณาฟรี');
		$this->template->set_theme('adfree');
    	$this->template->set_layout('layout');
		
		// Set js
		$this->lang->load('admin');
	}
}
?>