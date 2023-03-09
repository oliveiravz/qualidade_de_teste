<?php
namespace tests;

use PHPUnit\Framework\TestCase;
use app\Taxa;

class TaxaTest extends TestCase {
    
    public function testParaVerSeAVariavelEstaVazia() {

        $taxa = new Taxa();

        $salario = '';
        $this->assertEmpty($taxa->calculaTaxa($salario));

    }

    public function testParaVerSeAVariavelNaoEstaVazia() {

        //Tem que dar erro
        $taxa = new Taxa();

        $salario = 2500.00;
        $this->assertNotEmpty($taxa->calculaTaxa($salario));

    }

    public function testVerificaSeOParametroFloat() {
        
        $taxa = new Taxa();

        $salario = 1537.45;
        $this->assertIsFloat($taxa->calculaTaxa($salario));

    }

    public function testVerificaValorSetePontoNove() {

        $taxa = new Taxa();

        $salario = 1500.00;
        $this->assertEquals(7.9, $taxa->calculaTaxa($salario));
    }

    public function testVerificaValorDezoito() {

        $taxa = new Taxa();

        $salario = 4000.00;
        $this->assertEquals(18, $taxa->calculaTaxa($salario));
    }

    public function testVerificaValorVinteECinco() {

        $taxa = new Taxa();

        $salario = 9000.00;
        $this->assertEquals(25, $taxa->calculaTaxa($salario));
    }
}
