<?php
class Myaccounts extends Public_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    
    function adfree_approve($id)
    {
        if($_POST)
        {
            $_POST['status'] = ($_POST['status'] == 'approve')?'draft':'approve';
            $new = new Adfree($id);
            $new->from_array($_POST);
            $new->save();
        }
    }
}
?>