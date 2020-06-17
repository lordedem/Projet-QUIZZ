<?php
class Jeu implements IManager{
    private $idJeu;
    private $nbreQuestionsPerGame;
    
    public function __construct($row = null)
    {
        if($row != null){
            $this->hydrate($row);
        }
    }

    public function hydrate($row)
    {
        $this->idJeu = $row['idJeu'];
        $this->nbreQuestionsPerGame = $row['nbreQuestionsPerGame'];
    }

    public function getIdJeu(){
        return $this->idJeu;
    }
    public function getNbreQuestionsPerGame(){
        return $this->nbreQuestionsPerGame;
    }

    public function setIdJeu($idJeu){
        $this->idJeu = $idJeu;
    }
    public function setNbreQuestionsPerGame($nbreQuestionsPerGame){
        $this->nbreQuestionsPerGame = $nbreQuestionsPerGame;
    }


}