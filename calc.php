<?php

  include 'calculator.php';

  $num1 = $_POST['num1Inserted'];
  $num2 = $_POST['num2Inserted'];
  $operator = $_POST['operatorAdded'];

  $calculator = new Calc($num1, $num2, $operator);
  echo $calculator->Calculator();
 ?> 