<?php
class Adfrees extends Admin_Controller {

    function __construct()
    {
        parent::__construct();  
    }
    
    function index(){
        $data['adfrees'] = new Adfree();
        if(@$_GET['title'])$data['adfrees']->where("title like '%".$_GET['title']."%'");
        if(@$_GET['adf_category_id'])$data['adfrees']->where('adf_category_id',$_GET['adf_category_id']);
        if(@$_GET['adf_sub_category_id'])$data['adfrees']->where("adf_sub_category_id = ".$_GET['adf_sub_category_id']);
        if(@$_GET['province_id'])$data['adfrees']->where_related('users', 'province_id', $_GET['province_id']);
        $data['adfrees']->order_by('id','desc')->get_page();
        $this->template->build('admin/index',$data);
    }
    
    function form($id=false){
        
    }
}
?>