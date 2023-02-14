<?php
namespace tests;

use PHPUnit\Framework\TestCase;
use app\Taxa;

class TaxaTest extends TestCase {
    
    public function testParaVerSeAVariavelEstaVazia() {

        $taxa = new Taxa();

        $salario = 1500;
        $this->assertEmpty($taxa->calculaTaxa($salario));

    }

    public function testParaVerSeAVariavelNaoEstaVazia() {

        $taxa = new Taxa();

        $salario = null;
        $this->assertNotEmpty($taxa->calculaTaxa($salario));

    }

    public function testVerificaSeOParametroFloat() {
        
        $taxa = new Taxa();

        $salario = 1537.45;
        $this->assertIsFloat($taxa->calculaTaxa($salario));

    }
}
