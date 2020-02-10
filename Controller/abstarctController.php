<?php

class abstractController
{
    public function add()
    {
     if($this->UrlAtual()=="http://localhost/flex/index.php")
     {
     include_once "Model/banco.php";
     return $c=new banco;
    }

    else{
        include_once "../Model/banco.php";
        return $c=new banco;  
    }
    }

    function UrlAtual(){
        $dominio= $_SERVER['HTTP_HOST'];
        $url = "http://" . $dominio. $_SERVER['REQUEST_URI'];
        return $url;
        }
}


?>