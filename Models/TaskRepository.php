<?php

namespace Mvc\Models;

use Mvc\Models\TaskResourceModel;

class TaskRepository{

    private $TaskResourceModel;

    public function __construct(){
        $this->TaskResourceModel = new TaskResourceModel();
    }

    public function add($model){
        $this->TaskResourceModel->save($model);

    }

    public function get($id){
        
    }

    public function delete($model){
        
    }


    public function getAll($model){
        
    }
}