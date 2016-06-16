<?php
/**
 * Created by PhpStorm.
 * User: greg.crowell
 * Date: 4/19/2016
 * Time: 9:44 AM
 */

require "../app/models/model.php";

class wineList extends Model
{
    protected $tablename = 'wine';

    public $input_field_structure = [
        'name' => 'text',
        'type' => 'text',
        'rating' => 'text',
        'price' => 'text',
        'description' => 'textarea'
    ];

    public function __construct(){
        parent::__construct();
    }
}
