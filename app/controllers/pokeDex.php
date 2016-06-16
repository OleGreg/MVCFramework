<?php
/**
 * Created by PhpStorm.
 * User: greg.crowell
 * Date: 4/19/2016
 * Time: 3:26 PM
 */

require_once('theList.php');

class pokeDex extends theList
{

    /**
     * @var myList $listmodel
     */

    public $listmodel;
    public $params = [];
    public $requires_login = TRUE;

    public function __construct()
    {
        //to save on resources, we set this boolean so that the parent class 'theList' doesn't model any data
        $this->load_list_model = FALSE;

        parent::__construct();
        $this->listmodel = $this->model('pokeList');
    }

    public function index()
    {
        $params = $this->getTheUsersList();
        $this->view('list/index', $params);
    }

    public function add()
    {
        $params['list_items'] = $this->getTheUsersList();
        $params['input_fields'] = $this->listmodel->input_field_structure;
        $this->view('list/add', $params);
    }

    public function remove($id)
    {
        $this->listmodel->destroyById($id);
        $this->goBackToList();
    }

    public function removeAll()
    {
        $this->listmodel->destroyAll($this->authenticated_user['id']);
        $this->goBackToList();
    }

    public function store()
    {
        $data = [
            'name' => $this->request['name_ns'],
            'type' => $this->request['type_ns'],
            'height' => $this->request['height_ns'],
            'weight' => $this->request['weight_ns'],
            'rarity' => $this->request['rarity_ns'],
            "user_id" => $this->authenticated_user['id']
        ];
        $this->createFromAssocArray($data);
        $this->goBackToList();
    }

    public function edit($id)
    {
        $list_model_by_id = $this->listmodel->findById($id);
        $data = [
            'id' => $id,
            'input_fields' => $this->listmodel->input_field_structure,
            'row_values' => $list_model_by_id
        ];

        $this->view('list/edit' , $data);
    }

    public function update($id)
    {
        $data = [
            'name' => $this->request['name_ns'],
            'type' => $this->request['type_ns'],
            'height' => $this->request['height_ns'],
            'weight' => $this->request['weight_ns'],
            'rarity' => $this->request['rarity_ns'],
        ];
        $this->listmodel->change( $id , $data  );
        $this->goBackToList();
    }

}