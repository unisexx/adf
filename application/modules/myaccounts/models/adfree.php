<?php
class Adfree extends ORM {

    var $table = 'adfrees';
	
	var $has_one = array('user','adf_category','adf_sub_category','adf_want');

    function __construct($id = NULL)
    {
        parent::__construct($id);
    }
}
?>