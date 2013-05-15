<?php
class Myaccounts extends Public_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    
    function profile(){
        $data['user'] = new User($this->session->userdata('id'));
        $this->template->build('profile',$data);
    }
    
    function profile_save(){
        if($_POST){
            $captcha = $this->session->userdata('captcha');
            if(($_POST['captcha'] == $captcha) && !empty($captcha)){
                $user = new User($this->session->userdata('id'));
                $user->from_array($_POST);
                $user->save();
                set_notify('success', 'บันทึกข้อมูลติดต่อเรียบร้อยแล้วค่ะ');
            }else{
                set_notify('error','ขออภัยค่ะ!! คุณกรอกรหัสไม่ถูกต้อง');
                redirect($_SERVER['HTTP_REFERER']);
            }
        }
        redirect('myaccounts/profile');
    }
    
    function adfree(){
        $data['adfrees'] = new Adfree();
        if(@$_GET['title'])$data['adfrees']->where("title like '%".$_GET['title']."%'");
        if(@$_GET['adf_category_id'])$data['adfrees']->where('adf_category_id',$_GET['adf_category_id']);
        if(@$_GET['adf_sub_category_id'])$data['adfrees']->where("adf_sub_category_id = ".$_GET['adf_sub_category_id']);
        if(@$_GET['province_id'])$data['adfrees']->where_related('users', 'province_id', $_GET['province_id']);
        $data['adfrees']->where('user_id = '.user_login()->id)->order_by('updated','desc')->get_page();
        $this->template->build('adfree',$data);
    }
    
    function adfree_form($id=false){
        $data['adfree'] = new Adfree($id);
        // ไฟล์แนบ
        if($id){
            $data['attachs'] = new Attach();
            $data['attachs']->where("module = 'adfrees' and content_id = ".$id)->order_by('id','asc')->get();
        }
        $this->template->build('adfree_form',$data);
    }
    
    function adfree_save($id=false){
        if($_POST){
        	$captcha = $this->session->userdata('captcha');
			if(($_POST['captcha'] == $captcha) && !empty($captcha)){
	        	$adfree = new Adfree($id);
				$_POST['status'] = 'approve';
                $_POST['active'] = date('Y-m-d H:i:s');
				$_POST['slug'] = clean_url($_POST['title']);
				$_POST['image'] = @$_POST['url'][0];
				if(!$id)$_POST['user_id'] = $this->session->userdata('id');
				$adfree->from_array($_POST);
				$adfree->save();
                
                //ไฟล์แนบ
                if(!empty($_POST['url'])){
                    foreach($_POST['url'] as $key=>$item){
                        if($item){
                            if(!$id){
                                $id = new Adfree($id);
                                $id = $id->order_by('id','desc')->get(1)->id;
                            }
                            $attach = new Attach();
                            $attach->from_array(array(
                                'id' => @$_POST['attach_id'][$key],
                                'content_id' => $id,
                                'url' => @$_POST['url'][$key],
                                'thumb' => @$_POST['thumb'][$key],
                                'module' => 'adfrees'
                            ));
                            $attach->save();
                        }
                    }
                }
            
			set_notify('success', 'บันทึกประกาศเรียบร้อยแล้วค่ะ');
			}else{
				set_notify('error','ขออภัยค่ะ!! คุณกรอกรหัสไม่ถูกต้อง');
				redirect($_SERVER['HTTP_REFERER']);
			}
			redirect('myaccounts/adfree');
        }
    }
    
    function adfree_delete($id){
        if($id){
            $adfree = new Adfree($id);
            $adfree->delete();
            set_notify('success','ลบข้อมูลเรียบร้อย');
        }
        redirect('myaccounts/adfree');
    }
    
    function delete_uppic(){
        if($_POST){
            $uppic = new Attach($_POST['id']);
            $uppic->delete();
        }
    }
}
?>