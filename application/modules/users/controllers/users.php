<?php
class Users extends Public_Controller{
    
    function __construct(){
        parent::__construct();
    }
    
    function register(){
    	$this->template->title('สมัครสมาชิก');
        $this->template->build('register');
    }
    
    function signup()
    {
        if($_POST)
        {
        	$captcha = $this->session->userdata('captcha');
			if(($_POST['captcha'] == $captcha) && !empty($captcha)){
			    $_POST['password'] = encrypt_pass($_POST['password']);
				$_POST['ip'] = $_SERVER['REMOTE_ADDR'];
	            $user = new User();
	            $user->from_array($_POST);
	            $user->save();
	            set_notify('success', 'สมัครสมาชิกเรียบร้อย');
			}else{
				set_notify('error','กรอกรหัสไม่ถูกต้อง');
				redirect($_SERVER['HTTP_REFERER']);
			}
            redirect('home');
        }
    }
    
    function check_username(){
        $user = new User();
        $user->get_by_username($_GET['username']);
        echo ($user->username)?"false":"true";
    }
    
    function check_email()
    {
        $user = new User();
        $user->get_by_email($_GET['email']);
		if($_GET['email'] == user_login()->email){ // ถ้า user ไม่เปลี่ยนอีเมล์
			echo "true";
		}else{
			echo ($user->email)?"false":"true";
		}
    }
    
    function check_captcha()
    {
        if($this->session->userdata('captcha')==$_GET['captcha'])
        {
            echo "true";
        }
        else
        {
            echo "false";
        }
    }
    
    function login_frm()
    {
        $this->template->build('login_frm');
    }
    
    function login()
    {
        if($_POST)
        {
            if(login($_POST['username'], $_POST['password']))
            {
                set_notify('success', 'ยินดีต้อนรับเข้าสู่ระบบค่ะ');
                redirect($_SERVER['HTTP_REFERER']);
            }
            else
            {
                set_notify('error', 'ชื่อผู้ใช้หรือรหัสผ่านผิดพลาดค่ะ');
                redirect($_SERVER['HTTP_REFERER']);
            }   
        }
        else
        {
            set_notify('error', 'กรุณาทำการล็อคอินค่ะ');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }
    
    function inc_login()
    {
        if(is_login())
        {
            $data['user'] = new User($this->session->userdata('id'));
            $this->load->view('inc_member',$data);
        }
        else
        {
            $this->load->view('inc_loginlink');
        }
    }
    
    function logout()
    {
        logout();
        set_notify('error', 'ออกจากระบบเรียบร้อยแล้วค่ะ');
        redirect('home');
        //redirect($_SERVER['HTTP_REFERER']);
    }
    
    function forget_pass_form(){
        
    }
    
    function forget_pass(){
    	$this->template->title('ลืมรหัสผ่าน');
        $this->template->build('forget_pass');
    }
    
    function forget_pass_save(){
        if($_POST){
            $captcha = $this->session->userdata('captcha');
            if(($_POST['captcha'] == $captcha) && !empty($captcha)){
                $auth_key = md5(rand());
                $user = new User();
                $user->where('email', $_POST['email'])->update(array('auth_key'=>$auth_key));
                $this->send_mail($auth_key,$_POST['email']);
                set_notify('success', 'ระบบได้ทำการส่งเมล์ยืนยันการเปลี่ยนรหัสเรียบร้อยแล้วค่ะ');
            }else{
                set_notify('error','กรอกรหัสไม่ถูกต้อง');
                redirect($_SERVER['HTTP_REFERER']);
            }
        }
        redirect('home');
    }
    
    function repass($auth_key){
        if($auth_key != ""){
            $user = new User();
            $data['user'] = $user->where("auth_key = '".$auth_key."'")->get();
            if($user->exists()){
                $this->template->build('repass',$data);
            }else{
                set_notify('error', 'คุณไม่อนุญาติให้เข้าใช้งาน');
                redirect('home');
            }
        }else{
            set_notify('error', 'คุณไม่อนุญาติให้เข้าใช้งาน');
            redirect('home');
        }
    }
    
    function repass_save(){
        if($_POST){
            $user = new User();
            $_POST['password'] = encrypt_pass($_POST['password']);
            $user->where('auth_key', $_POST['auth_key'])->update(array(
                'password'=>$_POST['password'],
                'auth_key'=>''
            ));
            set_notify('success', 'ทำการเปลี่ยนรหัสเรียบร้อย');
        }
        redirect('home');
    }
    
    function send_mail($auth_key,$email){
        
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'noreply.adfree@gmail.com',
            'smtp_pass' => 'Des@gn;9',
            'mailtype'  => 'html', 
            'charset'   => 'utf-8'
        );
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        
        // Set to, from, message, etc.
        $this->email->from('noreply.adfree@gmail.com', 'noreply.adfree');
        $this->email->to($email); //ส่งถึงใคร
        $this->email->subject('ยืนยันการเปลี่ยนรหัสผ่านใหม่ - adfree.in.th'); //หัวข้อของอีเมล
        $this->email->message('สวัสดีครับ<br><br>หากคุณต้องการเปลี่ยนรหัสผ่านใหม่กรุณาคลิกตามลิ้งค์ที่ปรากฏ<br><br>http://www.adfree.in.th/users/repass/'.$auth_key); //เนื้อหาของอีเมล
        
        $result = $this->email->send();
        //echo $this->email->print_debugger();
    }
    
    function account_setting(){
        if(is_login()){
            $data['user'] = new User($this->session->userdata('id'));
            $this->template->build('account_setting',$data);
        }else{
            redirect("home");
        }
    }
    
    function account_setting_save(){
        if($_POST){
            $user = new User();
            $_POST['id'] = $this->session->userdata('id');
            $_POST['signature'] = $_POST['detail'];
            $user->from_array($_POST);
            $user->save();
            set_notify('success', 'บันทึกข้อมูลเรียบร้อย');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }
	
	function edit_profile(){
		$data['user'] = new User($this->session->userdata('id'));
		$this->template->build('profile',$data);
	}
	
	function edit_profile_save(){
		if($_POST)
        {
        	$captcha = $this->session->userdata('captcha');
			if(($_POST['captcha'] == $captcha) && !empty($captcha)){
	            $user = new User($this->session->userdata('id'));
	            $user->from_array($_POST);
	            $user->save();
	            set_notify('success', 'อัพเดทข้อมูลส่วนตัวเรียบร้อย');
			}else{
				set_notify('error','กรอกรหัสไม่ถูกต้อง');
			}
            redirect($_SERVER['HTTP_REFERER']);
        }
	}
}
?>