<?php
class Forms extends Admin_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    
    function categories($id=false){
    	$data['category'] = new Adf_category($id);
    	$data['categories'] = new Adf_category();
		$data['categories']->order_by('orderlist','asc')->get();
        
        $data['icons'] = new Icon();
        $data['icons']->order_by('id','asc')->get();
        $this->template->build('admin/categories',$data);
    }
	
	function categories_save($id=false){
		if($_POST){
			$category = new Adf_category($id);
			$_POST['status'] = 'approve';
            $_POST['slug'] = clean_url($_POST['title']);
			$category->from_array($_POST);
			$category->save();
			set_notify('success', 'บันทึกข้อมูลเรียบร้อย');
		}
		redirect('forms/admin/forms/categories');
	}
	
	function categories_delete($id=false){
		if($id){
            $category = new Adf_category($id);
            $subs = new Adf_sub_category();
            
            $subs->where("adf_category_id = ".$id)->get();
            foreach($subs as $item) $item->delete();
            $category->delete();
            set_notify('success', lang('delete_data_complete'));
        }
        redirect($_SERVER['HTTP_REFERER']);
	}
	
	function sub_categories($id,$subcat_id=false){
		$data['category'] = new Adf_category($id);
        $data['subcat_id'] = new Adf_sub_category($subcat_id);
		$this->template->build('admin/sub_categories',$data);
	}
    
    function sub_categories_save($id=false){
        if($_POST){
            $category = new Adf_sub_category($id);
            $_POST['status'] = 'approve';
            $_POST['slug'] = clean_url($_POST['title']);
            $category->from_array($_POST);
            $category->save();
            set_notify('success', 'บันทึกข้อมูลเรียบร้อย');
        }
        redirect('forms/admin/forms/sub_categories/'.$_POST['adf_category_id']);
    }
    
    function sub_categories_delete($id){
        if($id){
            $category = new Adf_sub_category($id);
            $category->delete();
            set_notify('success', lang('delete_data_complete'));
        }
        redirect($_SERVER['HTTP_REFERER']);
    }
    
    function wants($id=false){
        $data['category'] = new Adf_want($id);
        $data['categories'] = new Adf_want();
        $data['categories']->order_by('id','desc')->get();
        $this->template->build('admin/wants',$data);
    }
    
    function wants_save($id=false){
        if($_POST){
            $category = new Adf_want($id);
            $_POST['status'] = 'approve';
            $category->from_array($_POST);
            $category->save();
            set_notify('success', 'บันทึกข้อมูลเรียบร้อย');
        }
        redirect('forms/admin/forms/wants');
    }
    
    function wants_delete($id=false){
        if($id){
            $category = new Adf_want($id);
            $category->delete();
            set_notify('success', lang('delete_data_complete'));
        }
        redirect($_SERVER['HTTP_REFERER']);
    }
    
    function types($id=false){
        $data['category'] = new Adf_type($id);
        $data['categories'] = new Adf_type();
        $data['categories']->order_by('id','desc')->get();
        $this->template->build('admin/types',$data);
    }
    
    function types_save($id=false){
        if($_POST){
            $category = new Adf_type($id);
            $_POST['status'] = 'approve';
            $category->from_array($_POST);
            $category->save();
            set_notify('success', 'บันทึกข้อมูลเรียบร้อย');
        }
        redirect('forms/admin/forms/types');
    }
    
    function types_delete($id=false){
        if($id){
            $category = new Adf_type($id);
            $category->delete();
            set_notify('success', lang('delete_data_complete'));
        }
        redirect($_SERVER['HTTP_REFERER']);
    }
    
    function categories_approve($id)
    {
        if($_POST)
        {
            $new = new Adf_category($id);
            $new->from_array($_POST);
            $new->save();
        }
    }
    
    function types_approve($id)
    {
        if($_POST)
        {
            $new = new Adf_type($id);
            $new->from_array($_POST);
            $new->save();
        }
    }
    
    function sub_categories_approve($id)
    {
        if($_POST)
        {
            $new = new Adf_sub_category($id);
            $new->from_array($_POST);
            $new->save();
        }
    }
    
    function wants_approve($id)
    {
        if($_POST)
        {
            $new = new Adf_want($id);
            $new->from_array($_POST);
            $new->save();
        }
    }
    
    function save_orderlist($id=FALSE){
        if($_POST)
        {
            foreach($_POST['orderlist'] as $key => $item)
            {
                if($item)
                {
                    $category = new Adf_category(@$_POST['orderid'][$key]);
                    $category->from_array(array('orderlist' => $item));
                    $category->save();
                }
            }
            set_notify('success', lang('save_data_complete'));
        }
        redirect($_SERVER['HTTP_REFERER']);
    }
}
?>