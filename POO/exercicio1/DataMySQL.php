<?php
 require_once "Data.class.php";

 class DataMySQL extends Data{

    public function __construct($ano,$mes,$dia){
        parent::__construct($dia,$mes,$ano);
    }

    public  function getFullData(): String{
        return ($this->getAno()."-". $this->getMes() . "-". $this->getDia());
    }
 }


?>