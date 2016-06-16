<?php

/**Greg Crowell
  April 8th 2016
  MVC framework*/

/*
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection([
    'driver' => 'mysql',
    'host' => '127.0.0.1',
    'username' => 'root',
    'password' => '',
    'database' => 'website',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);

$capsule->bootEloquent(); */

class Database
{
  private static $db;
  
  public function __construct()
    {
      self::$db = new PDO("mysql:host=localhost;dbname=website", "root", "aeshoeCS1!");
      self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      self::$db->exec("SET NAMES 'utf8'");
    }
  public static function getDB() {
    return self::$db;
  }
  
}



