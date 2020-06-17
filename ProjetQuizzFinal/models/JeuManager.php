<?php
class JeuManager extends Manager{
    function __construct(){
        $this->className="Jeu";
    }
    public function create($objet){
        $sql="insert into `jeu`(`idJeu`, `nbreQuestionsPerGame`) values (null, ".$objet->getNbreQuestionsPerGame().");";
        return $this->ExecuteUpdate($sql)!=0;
    }
    public function update($objectAttribute){
        $sql = "update jeu set nbreQuestionsPerGame=".$objectAttribute." where idJeu=1;";
        $this->ExecuteUpdate($sql);
    }
    public  function delete($id){
        
    }
    public function findAll(){
        $sql = "select * from jeu;";
        $rows = $this->ExecuteSelect($sql);
        return $rows;
    }
    public function findById($id){
       
    }  
}