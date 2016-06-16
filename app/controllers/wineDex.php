<?php

/**
 * Created by PhpStorm.
 * User: greg.crowell
 * Date: 4/19/2016
 * Time: 9:28 AM
 */

require_once('theList.php');

class wineDex extends theList
{

    public $listmodel;  //
    public $params;
    public $requires_login = TRUE;


    public function __construct()  //
    {
        //to save on resources, we set this boolean so that the parent class 'theList' doesn't model any data
        $this->load_list_model = FALSE;

        parent::__construct();
        $this->listmodel = $this->model('wineList');
    }

    public function store()
    {
        $data = [
            "name" => $this->request['name_ns'],
            "type" => $this->request['type_ns'],
            "rating" => $this->request['rating_ns'],
            "price" => $this->request['price_ns'],
            "description" => $this->request['description_ns'],
            "user_id" => $this->authenticated_user['id']
        ];
        $this->createFromAssocArray($data);
        $this->goBackToList();
    }

    public function update($id)
    {
        $data = [
            "name" => $this->request['name_ns'],
            "type" => $this->request['type_ns'],
            "rating" => $this->request['rating_ns'],
            "price" => $this->request['price_ns'],
            "description" => $this->request['description_ns'],
        ];
        $this->listmodel->change($id, $data);
        $this->goBackToList();
    }
    
}