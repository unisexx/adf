<?php
class Adf_category extends ORM {

    var $table = 'adf_categories';
	
	public $has_many = array("adf_sub_category",'adfree');

    function __construct($id = NULL)
    {
        parent::__construct($id);
    }
}
?>