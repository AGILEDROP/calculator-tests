<?php

namespace AdPHPUnit;

use PHPUnit\Framework\TestCase;
use AdTests\Calculator\Calculator;

/**
 * Class CalculatorTest
 * @package AdPHPUnit
 */
class CalculatorTest extends TestCase {

  /**
   * First example test
   */
  public function testBasicAddition() {
    $calc = new Calculator();
    $calc->set(2, 2, 'plus');
    $this->assertEquals($calc->process(), 4);
  }

  /**
   * TODO
   * Tako a look at README.md for some example tasks
   */
}

?>