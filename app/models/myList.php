<?php
/**
 * Created by PhpStorm.
 * User: greg.crowell
 * Date: 4/4/2016
 * Time: 10:56 AM
 */

/* use Illuminate\Database\Eloquent\Model as Eloquent;

 class myList extends Eloquent{
    protected $table = 'list';
    protected $fillable = ['name'];
    public $timestamps = [];

} */

require "../app/models/model.php";

class myList extends Model
{
    public $full_list;
    protected $tablename = 'list';

    public $input_field_structure = [
        'name' => 'text',
        'description' => 'text'
    ];

    public function __construct(){
        parent::__construct();
    }
}
