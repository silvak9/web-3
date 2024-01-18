<?php
require_once "Data.class.php";

class DataUS extends Data{

    public function __construct($mes,$dia,$ano){
        parent::__construct($dia,$mes,$ano);
    }

    public function dataExtenso(): String{
        $nome = array("january", "february", "march", "april", "may", "june", "juiy", "august", "september", "october", "november", "december");
        return ($this->nome[getNome()-1]." ". $this->getDia() . "th, ". $this->nome[getNome()-1]);
        }

        public  function getFullData(): String{
            return ($this->getMes()."-". $this->getDia() . "-". $this->getAno());
        }
    }



?>