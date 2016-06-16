<?php
/**
 * Created by PhpStorm.
 * User: greg.crowell
 * Date: 4/14/2016
 * Time: 11:22 AM
 */

require_once "../app/models/model.php";

class Users extends Model
{
    protected $tablename = 'users';

    public function __construct()
    {
        parent::__construct();
    }
}