<?php
class Contents extends Public_Controller
{
	public $array = array('articles'=>'บทความ','weblinks'=>'ลิ้งค์เพื่อนบ้าน');
	
    function __construct()
    {
        parent::__construct();
    }
    
    function download($id)
    {
        if($id){
            $attach = new Attach($id);
            $attach->counter();
            $this->load->helper('download');
            $data = file_get_contents(urldecode($attach->file));
            $name = basename($attach->file);
            force_download($name, $data); 
        }
    }
	
	function inc_header_category(){
		$data['categories'] = new Category();
		$data['categories']->where("module = 'articles' and parents != 0")->order_by('id','asc')->get();
		$this->load->view('inc_header_category',$data);
	}
	
	function inc_footer_articles(){
		$data['contents'] = new Content();
		$data['contents']->where("module = 'articles'")->order_by('id','desc')->get();
		$this->load->view('inc_footer_articles',$data);
	}
    
    function inc_footer_weblinks(){
        $data['contents'] = new Content();
        $data['contents']->where("module = 'weblinks'")->order_by('id','desc')->get();
        $this->load->view('inc_footer_weblinks',$data);
    }
	
	function inc_home_vdos(){
		$data['contents'] = new Content();
		$data['contents']->where("module = 'vdos'")->order_by('id','desc')->get(7);
		$this->load->view('inc_home_vdos',$data);
	}
	
	function more($type){
		$data['header_img'] = $this->header_img[$type]; 
		$data['type_name'] = $this->array[$type];
		$data['contents'] = new Content();
		$data['contents']->where("module = '".$type."'")->order_by('id','desc')->get_page();
		if($type=="downloads"){
			$this->template->build('index_download',$data);
		}elseif($type == 'vdos'){
			$this->template->build('index_vdo',$data);
		}else{
			$this->template->build('index',$data);
		}
	}
	
	function view($type,$id){
	    $data['categories'] = new Category();
        $data['categories']->where('module = "articles" and parents <> 0')->order_by('orderlist','asc')->get();
	    
		$data['content'] = new Content($id);
		$data['type'] = $data['content']->module;
		$data['type_name'] = $this->array[$data['content']->module];
		
		$this->template->title($data['content']->title.' - adfree.in.th');
		
		if($type == 'histories'){
			$this->template->build('view_onepage',$data);
		}elseif($type == 'vdos'){
			$this->template->build('view_vdo',$data);
		}else{
			$this->template->build('view',$data);
		}
	}
}
?>