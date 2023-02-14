<?php
namespace app;

class Taxa {

    private $salario = 0;

    function __construct() {

        $this->calculaTaxa($this->salario);

    }

    public function calculaTaxa($salario) {

        if($salario >= 1000.00 && $salario <= 3999.99) {

            $salario = 7.9;

        }
    
        if($salario >= 4000.00 && $salario <= 8999.99) {

            $salario = 18;

        }
    
        if($salario >= 9000.00) {

            $salario = 25;

        }
    
        return $salario;
    }
}


$taxa = new Taxa();
echo $taxa->calculaTaxa(4500);