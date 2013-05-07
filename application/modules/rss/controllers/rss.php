<?php
class Rss extends Public_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('xml');  
        $this->load->helper('text');  
    }
    
    function adfree()
    {
        $data['feed_name'] = 'แอดฟรี ฟรีโพสต์ ฟรีประกาศ โฆษณาฟรี ซื้อง่าย ขายคล่อง - adfree';  
        $data['encoding'] = 'utf-8';  
        $data['feed_url'] = '';  
        $data['page_description'] = 'ฟรีโพสต์ ฟรีประกาศ โฆษณาฟรี';  
        $data['page_language'] = 'en-en';  
        $data['creator_email'] = '';  
        $data['posts'] = new Adfree();
        $data['posts']->where("status = 'approve'")->order_by('id','desc')->get_page();
        header("Content-Type: application/rss+xml"); 
        $this->load->view('adfree', $data);
    }
}