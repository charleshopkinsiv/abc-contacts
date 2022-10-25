<?php

namespace Abc\controller;

use Abc\model\ContactModel;


class ContactController 
{

    private ContactModel $model;

    public function __construct()
    {

        $this->model = new ContactModel();
    }


    public function index()
    {

        if(!empty($_GET['search'])) {

            $data['contacts'] = $this->model->getAllSearch(addslashes($_GET['search']));
        }
        else {

            $data['contacts'] = $this->model->getAll();
        }

        require __DIR__ . "/../../resources/views/pages/home.php";
    }

    public function delete()
    {

        if(!empty($_POST['id'])) {

            $model = new ContactModel();
            if($model->delete($_POST['id'])) {

                header('Location: /?success=save');
                exit();
            }
            else {

                header('Location: /');
                exit();
            }
        }
    }

    public function edit()
    {
        
        $data = [];

        if(!empty($_GET['a'])
        && $_GET['a'] == 'save') {

            if($this->httpSave()) {

                header('Location: /?success=save');
                exit();
            }
            else {

                $data = $_GET;
            }
        }


        if(!empty($_GET['edit_id'])) {

            $model = new ContactModel();
            $data = $model->find($_GET['edit_id']);
        }


        require __DIR__ . "/../../resources/views/pages/edit.php";
    }

    public function get()
    {

        
    }

    public function httpSave()
    {

        $data = [];
        $inputs = [
            'id',
            'first_name',
            'last_name',
            'email',
            'prefix',
            'suffix',
            'title',
            'phone_number'
        ];
        foreach($inputs as $input) {

            if(!isset($_GET[$input])
            && !($input == 'phone_number' && !empty($_GET['id']))) // Special case for editing old contacts and not updating phone
            {

                throw new \Exception("Missing input " . $input);
            }

            if(!empty($_GET[$input])) {

                $data[$input] = $_GET[$input];
            }
        }

        if(empty($data['id'])) {

            $this->model->insert($data);
        }
        else {

            $this->model->update($data);
        }

        return true;
    }
}