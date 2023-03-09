<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use app\Emprestimo;

class EmprestimoTest extends TestCase {
    
    public function test_retorno_true() {
        $renda = 2000.00;
        $moradores = 3;
        $aplicante = 'pessoas';
        $tipo = 'casa';
        
        $emprestimo = new Emprestimo();

        $this->assertEquals(true, $emprestimo->valida_emprestimo($renda, $moradores, $aplicante, $tipo));
    }

    public function test_limite_pessoas() {
        $renda = 2000.00;
        $moradores = 6;
        $aplicante = 'pessoas';
        $tipo = 'casa';
        
        $emprestimo = new Emprestimo();

        $this->assertEquals(false, $emprestimo->valida_emprestimo($renda, $moradores, $aplicante, $tipo));
    }

    public function test_limite_renda_minima() {
        $renda = 900.00;
        $moradores = 3;
        $aplicante = 'pessoas';
        $tipo = 'condomino';
        
        $emprestimo = new Emprestimo();

        $this->assertEquals(false, $emprestimo->valida_emprestimo($renda, $moradores, $aplicante, $tipo));
    }

    public function test_limite_renda_maxima() {
        $renda = 8900.00;
        $moradores = 3;
        $aplicante = 'pessoas';
        $tipo = 'condomino';
        
        $emprestimo = new Emprestimo();

        $this->assertEquals(false, $emprestimo->valida_emprestimo($renda, $moradores, $aplicante, $tipo));
    }

    public function test_aplicante() {
        $renda = 5000.00;
        $moradores = 3;
        $aplicante = 'empresas';
        $tipo = 'casa';
        
        $emprestimo = new Emprestimo();

        $this->assertEquals(false, $emprestimo->valida_emprestimo($renda, $moradores, $aplicante, $tipo));
    }

    public function test_tipo() {
        $renda = 5000.00;
        $moradores = 3;
        $aplicante = 'pessoas';
        $tipo = 'predio';
        
        $emprestimo = new Emprestimo();

        $this->assertEquals(false, $emprestimo->valida_emprestimo($renda, $moradores, $aplicante, $tipo));
    }
    
}