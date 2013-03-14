<?php
class Adf_want extends ORM {

    var $table = 'adf_wants';
    
    public $has_many = array('adfree');

    function __construct($id = NULL)
    {
        parent::__construct($id);
    }
}
?>