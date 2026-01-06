<?php
require_once(realpath(MODEL_PATH . '/Model.php'));

class User  extends Model{
    protected static $tableName = 'users';
    protected static $columns = [];
    protected $values = [];


    function __construct($arr){


    }

    


}