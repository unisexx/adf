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
        $data['adfrees']->order_by('updated','desc')->get(10);
        $this->load->view('inc_home',$data);
    }
    
    function inc_home_category(){
        $data['adf_categories'] = new Adf_category();
        $data['adf_categories']->get();
        $this->load->view('inc_home_category',$data);
    }
    
    function index(){
        $data['adfrees'] = new Adfree();
        if(@$_GET['title'])$data['adfrees']->where("title like '%".$_GET['title']."%'");
        if(@$_GET['adf_category_id'])$data['adfrees']->where('adf_category_id',$_GET['adf_category_id']);
        if(@$_GET['adf_sub_category_id'])$data['adfrees']->where("adf_sub_category_id = ".$_GET['adf_sub_category_id']);
        if(@$_GET['province_id'])$data['adfrees']->where_related('users', 'province_id', $_GET['province_id']);
        $data['adfrees']->order_by('updated','desc')->get_page();
        $this->template->build('index',$data);
    }
    
    function view($id){
        $data['adfree'] = new Adfree($id);
        
        $data['attach'] = new Attach();
        $data['attach']->where("module = 'adfrees' and content_id = ".$id)->order_by('id','asc')->get(1);
        
        $data['attachs'] = new Attach();
        $data['attachs']->where("module = 'adfrees' and content_id = ".$id)->order_by('id','asc')->get();
        
		$data['adfrees'] = new Adfree();
		$data['adfrees']->where('user_id = '.$data['adfree']->user_id)->order_by('updated desc')->get(4);
		
        $this->template->build('view',$data);
    }
    
    function getImg(){
        if($_POST){
            $attach = new Attach($_POST['id']);
            $this->output->set_output("<img src='".$attach->url."'>");
        }
    }

    function member($id){
        $data['adfrees'] = new Adfree();
        $data['adfrees']->where('user_id = '.$id)->order_by('updated desc')->get_page();
        $this->template->build('member',$data);
    }
}
?>