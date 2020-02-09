<?php

class homeController{

    public function getIndex(){
        return include "View/home.php";
    }

    public function getTabela(){
        include_once "Model/banco.php";
        $b=new banco;
        return $b->getContato();
 
    }

    public function addContato($t,$n){
        include_once "../Model/banco.php";
        $b=new banco;
        $b->insertContato($t,$n);

    }

    public function deleteContato($id){
        include_once "../Model/banco.php"; 
        $b=new banco;
        $b->deleteContato($id);
    }

    public function getU($i){
        include_once "../Model/banco.php"; 
        $b=new banco;
        return $b->getU($i);
    }

    public function updateContato($id,$numero,$nome){
        include_once "../Model/banco.php"; 
        $b=new banco;
        return $b->updateConntato($id,$numero,$nome);   
    }
}







?>