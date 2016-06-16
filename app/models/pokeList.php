<?php
/**
 * Created by PhpStorm.
 * User: greg.crowell
 * Date: 4/19/2016
 * Time: 3:29 PM
 */

require "../app/models/model.php";

class pokeList extends Model
{
    protected $tablename = 'pokemon';

    public $input_field_structure = [
        'name' => 'text',
        'type' => 'text',
        'height' => 'text',
        'weight' => 'text',
        'rarity' => 'text',
    ];

    public function __construct(){
        parent::__construct();
    }
}
