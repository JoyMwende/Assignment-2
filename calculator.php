<?php

class Calc {

    public $num1;
    public $num2;
    public $operator;

    public function __construct($num1Inserted, $num2Inserted, $calInserted) {
        $this->num1 = $num1Inserted;
        $this->num2 = $num2Inserted;
        $this->operator = $calInserted;
    }

    public function Calculator() {
      switch ($this->operator) {
        case 'add':
            $result = $this->num1 + $this->num2;
            break;
        case 'subtract':
            $result = $this->num1 - $this->num2;
            break;
        case 'multiply':
            $result = $this->num1 * $this->num2;
            break;
        case 'divide':
            $result = $this->num1 / $this->num2;
            break;

        default:
            $result = "Error";
            break;
      }
      return $result;
    }

}

 ?>