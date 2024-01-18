<?php

class Rapido1{
    public int $num1;
    public int $num2;

    public function soma():int{
        return $this->num1+$this->num2;
    }
    public function multiplicar():int{
        return $this->num1*$this->num2;
    }
    public function subtrair():int{
        return $this->num1-$this->num2;
    }
    public function dividir():int{
        if($this->num2>0)
            return $this->num1+$num2;
        else{
            $this->num2 =1;
            return $this->num1+$num2;
        }
    }
}

$rapido = new Rapido1();
$rapido->num1 = rand(0,100);
$rapido->num2 = rand(0,100);
echo "soma é: " . $rapido->soma()."<br>";
echo "Multiplicação é: " . $rapido->multiplicar()."<br>";
echo "Divisão é: " . $rapido->dividir()."<br>";
echo "Subtração é : " . $rapido->subtrair()."<br>";



?>