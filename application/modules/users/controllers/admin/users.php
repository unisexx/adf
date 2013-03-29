<?php

class Users extends Admin_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$data['users'] = new User;
		$data['users']->where('level_id',2);
		$this->template->build('admin/users/index',$data);
	}
	
	public function form($id = NULL)
	{	
		$data['user'] = new User($id);
		$this->template->build('admin/users/form',$data);
	}
	
	public function save($id = NULL)
	{
		if($_POST){
            $captcha = $this->session->userdata('captcha');
            if(($_POST['captcha'] == $captcha) && !empty($captcha)){
                $_POST['password'] = encrypt_pass($_POST['password']);
                $user = new User($id);
                $user->from_array($_POST);
                $user->save();
                set_notify('success', lang('save_data_complete'));
            }else{
                set_notify('error','ขออภัยค่ะ!! คุณกรอกรหัสไม่ถูกต้อง');
                redirect($_SERVER['HTTP_REFERER']);
            }
        }
		redirect('users/admin/users');
	}
	
	public function delete($id)
	{
		if($id)
		{
			$user = new User($id);
			$user->delete();	
			set_notify('success', lang('delete_data_complete'));	
		}
		redirect('users/admin/users');
	}
	
}

?>