<?php
class Adfrees extends Public_Controller {

    function __construct()
    {
        parent::__construct();
    }
    
    function inc_home(){
        $data['adfrees'] = new Adfree();
        if(@$_GET['title'])$data['adfrees']->where("title like '%".$_GET['title']."%'");
        if(@$_GET['adf_category_id'])$data['adfrees']->where('adf_category_id',$_GET['adf_category_id']);
        if(@$_GET['adf_sub_category_id'])$data['adfrees']->where("adf_sub_category_id = ".$_GET['adf_sub_category_id']);
        if(@$_GET['province_id'])$data['adfrees']->where_related('users', 'province_id', $_GET['province_id']);
        $data['adfrees']->order_by('active','desc')->get(4);
        $this->load->view('inc_home',$data);
    }
    
    function inc_jumbotron_category(){
        $data['categories'] = new Adf_category();
        $data['categories']->where('status','approve')->order_by('orderlist','asc')->get();
        $this->load->view('inc_jumbotron_category',$data);
    }
    
    function inc_home_category(){
        $data['adf_categories'] = new Adf_category();
        $data['adf_categories']->where('status','approve')->order_by('orderlist','asc')->get();
        $this->load->view('inc_home_category',$data);
    }
    
    function inc_header_category(){
        $data['categories'] = new Adf_category();
        $data['categories']->order_by('orderlist','asc')->get();
        $this->load->view('inc_header_category',$data);
    }
    
    function index(){
        // query
        $data['adfrees'] = new Adfree();
        if(@$_GET['adf_category_slug'])$data['category_slug'] = $_GET['adf_category_slug'];
        if(@$_GET['adf_sub_category_slug'])$data['sub_category_slug'] = $_GET['adf_sub_category_slug'];
        
        if(@$_GET['title'])$data['adfrees']->where("title like '%".$_GET['title']."%'");
        if(@$_GET['category'] != "ทุกหมวด" and @$_GET['category'])$data['adfrees']->where_related_adf_category('slug',$_GET['category']);
        if(@$_GET['category'] != "ทุกหมวด" and @$_GET['category'])$data['adfrees']->or_where_related_adf_sub_category('slug',$_GET['category']);
        if(@$_GET['province_id'])$data['adfrees']->where_related('users', 'province_id', $_GET['province_id']);
        $data['adfrees']->order_by('active','desc')->get_page();
		
		$this->template->title('ฟรีโพสต์ ฟรีประกาศ ลงโฆษณาฟรี ซื้อง่าย ขายคล่อง - adfree.in.th');
        $this->template->build('index',$data);
    }
    
    function c($category_slug=false){
        $_GET['category'] = $category_slug; // fill value in search form
        
        $data['adfrees'] = new Adfree();
        $data['adfrees']->where_related_adf_category('slug', $category_slug);
        $data['adfrees']->order_by('active','desc')->get_page();
		$this->template->title($category_slug.' ฟรีประกาศ ซื้อง่าย ขายคล่อง - adfree.in.th');
        $this->template->build('index',$data);
    }
    
    function s($sub_category_slug=false){
        $_GET['category'] = $sub_category_slug; // fill value in search form
        
        $data['adfrees'] = new Adfree();
        $data['adfrees']->where_related_adf_sub_category('slug', $sub_category_slug);
        $data['adfrees']->order_by('active','desc')->get_page();
		$this->template->title($sub_category_slug.' ฟรีประกาศ ซื้อง่าย ขายคล่อง - adfree.in.th');
        $this->template->build('index',$data);
    }
    
    function view($id){
        $data['adfree'] = new Adfree($id);
        $data['adfree']->counter();
        $data['attach'] = new Attach();
        $data['attach']->where("module = 'adfrees' and content_id = ".$id)->order_by('id','asc')->get(1);
        
        $data['attachs'] = new Attach();
        $data['attachs']->where("module = 'adfrees' and content_id = ".$id)->order_by('id','asc')->get();
        
		$data['adfrees'] = new Adfree();
		$data['adfrees']->where('user_id = '.$data['adfree']->user_id)->order_by('active desc')->get(8);
		
		$this->template->title($data['adfree']->title.' - adfree.in.th');
        $this->template->build('view',$data);
    }
    
    function getImg(){
        if($_POST){
            $attach = new Attach($_POST['id']);
            $this->output->set_output("<img src='".$attach->url."'>");
        }
    }

    function member($id,$adf_sub_category_id=false){
        $data['allcount'] = new Adfree();
        $data['allcount']->where('user_id = '.$id)->get();
        
        $data['adfrees'] = new Adfree();
        $data['adfrees']->where('user_id = '.$id);
        if(@$adf_sub_category_id)$data['adfrees']->where('adf_sub_category_id',$adf_sub_category_id);
        $data['adfrees']->order_by('active desc')->get_page();
        
        $data['sub_categories'] = new Adfree();
        $data['sub_categories']->where('user_id = '.$id)->group_by('adf_sub_category_id')->order_by('active desc')->get();
        $this->template->build('member',$data);
    }
	
	function search_form(){
		// form search
        $data['categories'] = new Adf_category();
        $data['categories']->order_by('orderlist','asc')->get();
		$this->load->view('search_form',$data);
	}
}
?>