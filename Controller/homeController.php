<?php
include_once "abstarctController.php";
class homeController {

    public function add(){
        $URL_ATUAL= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        if($URL_ATUAL=="http://localhost/Flex/" || $URL_ATUAL=="http://localhost/flex/index.php" || $URL_ATUAL=="http://localhost/flex/"){
            include_once "Model/banco.php";
            return $b=new banco;
        }
        else{
            include_once "../Model/banco.php";
            return $b=new banco;
        }
  
    }
    
    public function getIndex(){
         return include "View/home.php";
    }

    public function getTabela(){
      return  $this->add()->getContato();
     }

    public function addContato($t,$n){
        return  $this->add()->insertContato($t,$n);
    }

    public function deleteContato($id){
        return  $this->add()->deleteContato($id);
    }

    public function getU($i){
        return  $this->add()->getU($i);
    }

    public function updateContato($id,$numero,$nome){
       
        return  $this->add()->updateContato($id,$numero,$nome);
    }
    
}









?>