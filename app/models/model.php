<?php
/**
 * Created by PhpStorm.
 * User: greg.crowell
 * Date: 4/8/2016
 * Time: 3:15 PM
 */

class Model{

    public $db;
    protected $tablename;
    protected $primarykey = 'id';
    protected $input_field_structure = [];

    public function __construct(){
        //This gives us the PDO object
        $this->db = Database::getDB();
    }
    
    public function getAll(){
        //Prepare to take our PDO object and return a PDO statement
        $temp = $this->db->prepare("SELECT * FROM $this->tablename WHERE active = TRUE");
        $temp->execute();
        return $temp->fetchAll();
    }

    public function findById($id){
        $temp = $this->db->prepare("SELECT * FROM $this->tablename WHERE id= :id ");
        $temp->bindParam(":id", $id);
        $temp->execute();
        return $temp->fetch();
    }

    public function createFromArray($params)
    {
        $keys = array_keys($params);
        $values = array_values($params);
        $valueInsertString = '';
        $counter = 0;
        $valueBindArray = Array();
        $keys = implode(',' , $keys);
        $keys = rtrim($keys , ',');

        foreach($values as $value)
        {
            $valueInsertString = $valueInsertString . ':value' . $counter . ',' ;
            $valueBindArray[$counter] = $value;
            $counter++;
        }
        $valueInsertString = rtrim($valueInsertString , ',');
        $counter = 0;

        $questions = implode(',', str_split(str_repeat('?', count($params))) );

        $temp = $this->db->prepare("INSERT INTO $this->tablename ($keys, active) VALUES ($questions, TRUE)");

        foreach($valueBindArray as $value)
        {
            echo ":value" . $counter . "\n";
            $temp->bindValue($counter+1, $value);
            $counter++;
        }
        $temp->execute();
    }

    public function change( $id, $data)
    {
        $setstring='';

        foreach($data as $column => $value)
        {
            $setstring = $setstring . $column . " = :" . $column . ", ";
        }
        $setstring = rtrim($setstring , ', ');


        $temp = $this->db->prepare("UPDATE $this->tablename SET $setstring WHERE $this->primarykey= :id");

        foreach($data as $column => $value)
        {
            $temp->bindValue(':' . $column, $value);
        }

        $temp->bindValue(':id', $id);
        $temp->execute();
    }

    public function search($data)
    {
        $setstring='';

        //Prepare our data into a string readable by SQL
        foreach($data as $column => $value)
        {
            $setstring = $setstring . $column . " = '" . $value . "' AND ";
        }
        $setstring = rtrim($setstring, " AND ");

        //Execute our SQL search
        $temp = $this->db->prepare("SELECT * FROM $this->tablename WHERE $setstring AND active = TRUE");

//        foreach($data as $column => $value)
//        {
//            $temp->bindValue(':' . $value, $value);
//        }
//        var_dump($temp);
//        die;
//        $temp->bindValue();
        $temp->execute();

        return $temp->fetchAll();

    }
    
    public function destroyById($id)
    {
        $temp = $this->db->prepare("UPDATE $this->tablename SET active = FALSE WHERE id= :id");
        $temp->bindParam(":id", $id);
        $temp->execute();
    }

    public function destroyAll($user_id)
    {
        $temp = $this->db->prepare("UPDATE $this->tablename SET active = FALSE WHERE user_id= :user_id");
        $temp->bindParam(":user_id", $user_id);
        $temp->execute();
    }
}