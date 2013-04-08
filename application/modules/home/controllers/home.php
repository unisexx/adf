<?php
class Home extends Public_Controller {

	function __construct()
	{
		parent::__construct();
	}
	
	function first_page()
	{
		$coverpage = new Coverpage();
		$coverpage->where("status = 'approve' and active = 1")->get();
		if($coverpage->id != ""){
			redirect("coverpages/index/".$coverpage->id);
		}else{
			redirect("home");
		}
	}
	
	public function index(){
        $this->template->set_layout('home');
		$this->template->build('index');
	}
    
	function intro(){
		$this->load->view('intro');
	}
	
	public function lang($lang)
	{
		$this->load->library('user_agent');
		$this->session->set_userdata('lang',$lang);
		
		redirect($this->agent->referrer());
	}
	
	public function sitemap()
	{
		$data['categories'] = new Category();
		$data['childs'] = new Category();
		$data['categories']->where("parents = 0 and id not in (74)")->get();
		$data['num'] = ceil($data['categories']->where("parents = 0 and id not in (74)")->count()/2);
		$this->template->build('sitemap',$data);
	}
	
	function testmail(){
			$this->load->library('email');
			$this->email->from('ampzimeow@gmail.com', 'เคน ธีรเดช วงสืบพันธุ์');
			$this->email->to('unisexx@hotmail.com');
			$this->email->subject('นี่คือสแปม');
			$this->email->message('555+');
			$this->email->send();
			echo $this->email->print_debugger();
	}
	
	function under_construction(){
		$this->template->build('under_contruction');
	}
    
    function get_amphur(){
        if($_POST){
            echo form_dropdown('amphur_id',get_option('id','amphur_name','amphures','where province_id = '.$_POST['province_id'].' order by id asc'),'','class="span5"','--- เลือกอำเภอ ---');
        }
    }
    
    function get_district(){
        if($_POST){
            echo form_dropdown('district_id',get_option('id','district_name','districts','where amphur_id = '.$_POST['amphur_id'].' order by id asc'),'','','--- เลือกตำบล ---');
        }
    }
    
    function get_adf_sub_category(){
        if($_POST){
            echo form_dropdown('adf_sub_category_id',get_option('id','title','adf_sub_categories','where adf_category_id = '.$_POST['id'].' order by id asc'),'','','--- เลือกหมวดหมู่ย่อย ---');
        }
    }
}
?>