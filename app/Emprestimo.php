<?php
namespace app;

class Emprestimo {

    public function valida_emprestimo($renda, $moradores, $aplicante, $tipo) {

        $emprestimo = true;

        if($renda < 1000.00 && $renda > 8300.00)  {
            $emprestimo = false;
        }

        if($moradores < 1 || $moradores > 5) {
            $emprestimo = false;
        }

        if($aplicante != "pessoas") {
            $emprestimo = false;
        }

        if($tipo != "condominio" && $tipo != "sobrado" && $tipo != "casa" ) {
            $emprestimo = false;
        }

        if($emprestimo != true) {
            return false;
        }else {
            return true;
        }

    }
}