<?php
class Icon extends ORM {

    var $table = 'icons';

    function __construct($id = NULL)
    {
        parent::__construct($id);
    }
}
?>