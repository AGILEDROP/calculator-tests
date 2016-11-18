<?php

namespace AdTests\Calculator;

/**
 * Class Calculator
 * @package AdTests\Calculator
 */
class Calculator {

  private $a;
  private $b;
  private $op;

  /**
   * @param $a
   * @param $b
   * @param $op
   */
  public function set($a, $b, $op) {
    $this->validateInput($a, $b);
    $this->a = $a;
    $this->b = $b;
    $this->op = $op;
  }

  /**
   * @param bool $advMath
   * @return float|int|number
   */
  public function process($advMath = FALSE) {
    switch ($this->op) {
      case 'plus':
        $val = $this->add();
        break;
      case 'minus':
        $val = $this->substract();
        break;
      case 'multi':
        $val = $this->multiply();
        break;
      case 'divide':
        $val = $this->divide();
        break;
      case 'pow':
        if (!is_object($advMath)) {
          $advMath = new AdvancedMathExtension();
        }
        $val = $advMath->power($this->a, $this->b);
        break;
      default:
        // If the operator is not in the expected format set addition as default operation.
        $val = $this->add();
        break;
    }
    return $this->display($val);
  }

  /**
   * @param $a
   * @param $b
   */
  private function validateInput($a, $b) {
    foreach (array($a, $b) as $item) {
      if (!is_numeric($item)) {
        throw new \InvalidArgumentException('Arguments must be numeric.');
      }
    }
  }

  /**
   * @return mixed
   */
  private function add() {
    return $this->a + $this->b;
  }

  /**
   * @return mixed
   */
  private function substract() {
    return $this->a - $this->b;
  }

  /**
   * @return mixed
   */
  private function multiply() {
    return $this->a * $this->b;
  }

  /**
   * @return float|int
   */
  private function divide() {
    if ($this->b == 0) {
      throw new \InvalidArgumentException('Can not divide by 0.');
    }
    return $this->a / $this->b;
  }

  /**
   * @param $val
   * @return string
   *
   * Shorten the displayed result to 5 decimals
   */
  private function display($val) {
    return round($val, 5);
  }
}

?>