<?php
    class Data{
        private int $dia;
        private int $mes;
        private int $ano;

        public function __construct(int $dia, int $mes, int $ano){
            $this->setAno($ano);
            $this->setMes($mes);
            $this->setDia($dia);
        }

        public function setDia($dia): void{
            if($dia < 0 || $dia > 31){
                throw new Exception ("Dia invalido.");
            }
            if((($this->mes==1 || $this->mes==3 || $this->mes==5 || $this->mes==7 || $this->mes==8 || $this->mes==10 || $this->mes==12))&&($dia<=31)) 
                $this->dia = $dia;
            else if((($this->mes==4 || $this->mes==6 || $this->mes==9 || $this->mes==11)) && ($dia<=30))
                    $this->dia = $dia;
                else if($this->mes==2)
                        if(($this->ano%4==0) && ($dia<=29))
                            $this->dia = $dia;
                        else if(($this->mes==2) && ($dia<=28))
                                $this->dia = $dia;
                            else
                                throw new Exception("Data Inválida.");
        }

        public function getDia():int{
            return $this->dia;
        }

        public function setMes($mes): void{
            if($mes<0 || $mes>12)
                throw new Exception("Mês invalido");
            else
                $this->mes = $mes;
        }

        public function getMes():int{
            return $this->mes;
        }

        public function setAno($ano): void{
            $this->ano = $ano;
        }

        public function getAno():int{
            return $this->ano;
        }

        public  function dataExtenso(): String{
            $nome = array("janeiro", "fevereiro", "março", "abril", "maio", "junho", "julho", "agosto", "setembro", "outubro", "novembro", "dezembro");
            return ($this->getDia()." de ". $this->getMes() . " de ". $this->nome[getNome()-1]);
        }

        public  function getFullData(): String{
            return ($this->getDia()."/". $this->getMes() . "/". $this->getAno());
        }
    }

    try{
        $data = new Data(15,9,2023);
        echo $data.dataExtenso();

    }catch(Exception $e){
        echo "Erro: " . $e.getMessage();
    }
    
?>