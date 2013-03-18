<?php
class Adf_type extends ORM {

    var $table = 'adf_types';
    
    public $has_many = array('adfree');

    function __construct($id = NULL)
    {
        parent::__construct($id);
    }
}
?>