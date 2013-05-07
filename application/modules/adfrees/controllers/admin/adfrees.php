<?php
class Adfrees extends Admin_Controller {

    function __construct()
    {
        parent::__construct();  
    }
    
    function index(){
    	// form search
        $data['categories'] = new Adf_category();
        $data['categories']->order_by('orderlist','asc')->get();
		
        $data['adfrees'] = new Adfree();
        if(@$_GET['adf_category_slug'])$data['category_slug'] = $_GET['adf_category_slug'];
        if(@$_GET['adf_sub_category_slug'])$data['sub_category_slug'] = $_GET['adf_sub_category_slug'];
        
        if(@$_GET['title'])$data['adfrees']->where("title like '%".$_GET['title']."%'");
        if(@$_GET['category'] != "ทุกหมวด" and @$_GET['category'])$data['adfrees']->where_related_adf_category('slug',$_GET['category']);
        if(@$_GET['category'] != "ทุกหมวด" and @$_GET['category'])$data['adfrees']->or_where_related_adf_sub_category('slug',$_GET['category']);
        if(@$_GET['province_id'])$data['adfrees']->where_related('users', 'province_id', $_GET['province_id']);
        $data['adfrees']->order_by('updated','desc')->get_page();
        $this->template->build('admin/index',$data);
    }
}
?>