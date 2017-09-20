<?php
require_once "funciones.php";
use PHPUnit\Framework\TestCase;

class TodosNegativosTest extends TestCase{
  public function testTodosNegativos(){
    $a = [-3,-55,-12,-78,-567];
    $res = TodosNegativos($a);
    $this->assertTrue($res);
  }

  public function testNoTodosNegativos(){
    $a = [-3,55,-12,78,-567];
    $res = TodosNegativos($a);
    $this->assertFalse($res);
  }

  public function testNegativoInicio(){
    $a = [-3,55];
    $res = TodosNegativos($a);
    $this->assertFalse($res);
  }

  public function testNegativoFinal(){
    $a = [78,-567];
    $res = TodosNegativos($a);
    $this->assertFalse($res);
  }

  public function testArrayVacio(){
    $a = [];
    $res = TodosNegativos($a);
    $this->assertFalse($res);
  }
}
?>
