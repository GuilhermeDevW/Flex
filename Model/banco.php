<?php
class banco{
    public function getContato()
    {
     $con = new PDO("mysql:host=localhost;dbname=contatos", "root", ""); 
     return $result=$con->query("SELECT *FROM  dados ORDER BY  id ASC")->fetchAll();
    
    }

    public function insertContato($telefone,$nome)
    {
     $con = new PDO("mysql:host=localhost;dbname=contatos", "root", ""); 
     return$con->query("INSERT INTO dados (numero,nome) values ('{$telefone}','{$nome}')");

    }


    public function deleteContato($id)
    {
     $con = new PDO("mysql:host=localhost;dbname=contatos", "root", ""); 
    return$con->query("DELETE FROM dados where id='{$id}'");

    }


    public function getU($id){
        $con = new PDO("mysql:host=localhost;dbname=contatos", "root", ""); 
        return $result=$con->query("SELECT *FROM  dados where id='{$id}'")->fetchAll(); 
    }

    public function updateConntato($id,$numero,$nome){
        $con = new PDO("mysql:host=localhost;dbname=contatos", "root", ""); 
        return$con->query("UPDATE `dados` SET `numero`='{$numero}',nome='{$nome}' WHERE id='{$id}'");
       

    }
}

$a =new banco;
$a->deleteContato(5);

?>