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
   * - Create a setUp constructor where you initiate the calculator object
   * - Test empty input throws an exception
   * - Test calculator throws an exception when dividing by 0
   * - Test that if wrong operator is passed to set() the default one is addition
   * - Make sure the result is displayed with a maximum of 5 decimals
   * - Create a data provider function that tests different operations and makes sure the result is correct
   * - Create a test for calculating 10^2 passing a mock AdvancedMathExtension object to the process() function
   */
}

?>