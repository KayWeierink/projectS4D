<?php

  // EXPRESSIONS

  $y = 3 * (abs(2 * 3) + 4);
  echo $y;

  $zin = "Welkom op deze pagina! <br>";
  echo $zin;

  // boolean expressions

  echo "a: [" . (20 > 9) . "]<br>"; // Deze is true
  echo "b: [" . (5 < 6) . "]<br>"; // Deze is true
  echo "c: [" . (1 == 0) . "]<br>";
  echo "d: [" . (1 == 1) . "]<br>"; // Deze is true
  echo "<br>";

  $myname = "Kay";
  $myage = "22";

  echo "a: " . 73 . "<br>";
  echo "b: " . "Hello" . "<br>";
  echo "c: " . $myname . "<br>";
  echo "c: " . $myage . "<br>";
  echo "<br>";

  $day_number = 356;
  $days_to_new_year = 366 - $day_number; // Expression

  if ($days_to_new_year < 30) {
    echo "Not long now till new year<br>"; // Statement
  }
  echo "<br>";

  // OPERATORS

  /*
    Arithmetic             Basic mathematics               $a + $b
    Array                  Array union                     $a + $b
    Assignment             Assign values                   $a = $b + 23
    Bitwise                Manipulate bits within bytes    12 ^ 9
    Comparison             Compare two values              $a < $b
    Execution              Execute contents of back ticks  `ls -al`
    Increment/decrement    Add or subtract 1               $a++
    Logical                Boolean                         $a and $b
    String                 Concatenation                   $a . $b
  */

  echo ((1 + 2) * 3 - 4) * 5 . "<br>";
  echo (2 - 4) * 5 * 3 + 1 . "<br>";
  echo (5 + 2 - 4 + 1) * 3 . "<br>";
  echo "<br>";

  // Associativity

  $level = $score = $time = 120;
  echo "de variabele level is na het gelijkstellen " . $level . "<br>";
  echo "<br>";

  $jaar = 18;
  if($jaar == 18) {
    echo "Je bent oud genoeg! <br>";
  }
  echo "<br>";

  $a = "1000";
 $b = "+1000";
 if ($a == $b) echo "1 <br>";
 if ($a === $b) echo "2 <br>";
 echo "<br>";

 $bank_balance = 90;
 if ($bank_balance < 100)
 {
 $money = 1000;
 $bank_balance += $money;
 echo $bank_balance;
 }
 echo "<br>";
 echo "<br>";

 $fuel = 1;

echo $fuel <= 1 ? "Fill tank now" : "There's enough fuel";
echo "<br>";
echo "<br>";

$count = 1;
 while ($count <= 12)
 {
 echo "$count times 12 is " . $count * 12 . "<br>";
 ++$count;
 }



?>
