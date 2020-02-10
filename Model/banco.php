<?php
class banco{
     
    public function conexao()
    {
     return $con = new PDO("mysql:host=localhost;dbname=contatos", "root", ""); 
    }
    public function getContato()
    {
     return $result=$this->conexao()->query("SELECT *FROM  dados ORDER BY  id ASC")->fetchAll();
    }

    public function insertContato($telefone,$nome)
    {
     return $this->conexao()->query("INSERT INTO dados (numero,nome) values ('{$telefone}','{$nome}')");
    }

    public function deleteContato($id)
    {
    return$this->conexao()->query("DELETE FROM dados where id='{$id}'");
    }

    public function getU($id)
    {
        return $result=$this->conexao()->query("SELECT *FROM  dados where id='{$id}'")->fetchAll(); 
    }

    public function updateContato($id,$numero,$nome)
    {
        return$this->conexao()->query("UPDATE `dados` SET `numero`='{$numero}',nome='{$nome}' WHERE id='{$id}'");
       
    }
}
