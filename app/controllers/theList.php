<?php

/**
 * Created by PhpStorm.
 * User: greg.crowell
 * Date: 4/5/2016
 * Time: 8:37 AM
 */



class theList extends Controller
{

    /**
     * @var myList $listmodel
     */

    public $listmodel;
    public $params = [];
    public $requires_login = TRUE;
    public $load_list_model = TRUE;

    public function __construct()
    {
        parent::__construct();
        if( $this->load_list_model == TRUE ) $this->listmodel = $this->model('myList');
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
        //$this->view('list/remove-prompt');
        $this->listmodel->destroyAll($this->authenticated_user['id']);
        $this->goBackToList();
    }

    public function store()
    {
        $data = [
            "name" => $this->request['name_ns'],
            "description" => $this->request['description_ns'],
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
            "name" => $this->request['name_ns'],
            "description" => $this->request['description_ns'],
        ];
        $this->listmodel->change( $id , $data  );
        $this->goBackToList();
    }

    public function createFromAssocArray($parameter)
    {
        $this->listmodel->createFromArray($parameter);
    }

    protected function goBackToList(){
        header('Location: /'. get_class($this) . '/');
        exit;
    }
    public function getTheUsersList()
    {
        $search_param = [
            'user_id' => $this->authenticated_user['id']
        ];

        $user_list_items = $this->listmodel->search($search_param);
        return $user_list_items;
    }
}


