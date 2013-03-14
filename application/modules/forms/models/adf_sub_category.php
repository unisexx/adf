<?php
class Adf_sub_category extends ORM {

    var $table = 'adf_sub_categories';
	
	public $has_one = array("adf_category");
    
    public $has_many = array('adfree');

    function __construct($id = NULL)
    {
        parent::__construct($id);
    }
}
?>