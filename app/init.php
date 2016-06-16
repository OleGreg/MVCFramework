<?php
/**
 * Created by PhpStorm.
 * User: greg.crowell
 * Date: 3/31/2016
 * Time: 9:54 AM
 */

//Composer autoloader
//require_once '../vendor/autoload.php';

require_once 'database.php';
new Database();

require_once 'core/App.php';

require_once 'core/Controller.php';
