<?php // formtest2.php
 if (isset($_POST['name'])) {
   $name = $_POST['name'];
 } else {
   $name = "(Not entered)";
 }
 echo <<<_END
 <html>
 <head>
 <title>Form Test</title>
 </head>
 <body>
 Your name is: $name<br>
 <form method="post" action="formtest.php">
 What is your name?
 <input type="text" name="name"><br><br>
 Loan Amount <input type="text" name="principle"><br><br>
Monthly Repayment <input type="text" name="monthly"><br><br>
 Number of Years <input type="text" name="years" value="25"><br><br>
 Interest Rate <input type="text" name="rate" value="6"><br><br>
 <textarea name="message" cols="20" rows="10" wrap="type">This is some default text.
</textarea><br><br>
I Agree <input type="checkbox" name="name" value="value" checked="checked"><br><br>

Vanilla <input type="checkbox" name="ice" value="Vanilla">
 Chocolate <input type="checkbox" name="ice" value="Chocolate">
Strawberry <input type="checkbox" name="ice" value="Strawberry"><br><br>

8am-Noon<input type="radio" name="time" value="1">
Noon-4pm<input type="radio" name="time" value="2" checked="checked">
 4pm-8pm<input type="radio" name="time" value="3"><br><br>

 Vegetables
<select name="veg" size="5" multiple="multiple">
 <option value="Peas">Peas</option>
 <option value="Beans">Beans</option>
 <option value="Carrots">Carrots</option>
 <option value="Cabbage">Cabbage</option>
 <option value="Broccoli">Broccoli</option>
</select><br><br>

 <input type="submit">
 </form>
 </body>
 </html>
_END;
?>
