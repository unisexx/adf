<?php
class Public_Controller extends Master_Controller
{
	function __construct()
	{
		parent::__construct();
		
		// check lang
		$this->template->title('ฟรีโพสต์ ฟรีประกาศ ลงโฆษณาฟรี - adfree.in.th');
		$this->template->set_theme('adfree');
    	$this->template->set_layout('layout');
		
		// Set js
		$this->lang->load('admin');
        
        // Set Keywords , Description
        $this->template->append_metadata( meta('description','ฟรีโพสต์ ฟรีประกาศ ลงโฆษณาฟรีง่ายๆกับ แอดฟรี ซื้อง่าย ขายคล่อง'));
        $this->template->append_metadata( meta('keywords','ฟรีโพสต์,ฟรีประกาศ,ลงโฆษณาฟรี,โปรโมตสินค้า,ซื้อ-ขายสินค้า,ตลาดออนไลน์,ซื้อง่าย,ขายคล่อง'));
	}
}
?>