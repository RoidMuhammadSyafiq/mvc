<?php

include_once("model.php");

class control {

    
    public $model;

    public function __construct(){
        $this->model = new model();
    }

    public function invoke(){
        $jadwal = $this->model->getJadwal();
        include 'view.php';
    }
  
}