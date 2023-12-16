
<html>
<head>
 
</head>
<body>
<?php
 
// Check if the form has been submitted
if (isset($_POST['submit'])) {
  // Get the values from the form
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $operator = $_POST['operator'];
 
  // Check which operator was chosen and perform the corresponding calculation
  if ($operator == 'add') {
    $result = $num1 + $num2;
  } elseif ($operator == 'subtract') {
    $result = $num1 - $num2;
  } elseif ($operator == 'multiply') {
    $result = $num1 * $num2;
  } elseif ($operator == 'divide') {
    $result = $num1 / $num2;
  }
} ?>
 
<form action="Program.php" method="post">
<input type="text" name="num1" placeholder="Enter First Value">
<br>
<select name="operator">
<option value="add">+</option>
<option value="subtract">-</option>
<option value="multiply">*</option>
<option value="divide">/</option>
</select>
<br>
<input type="text" name="num2" placeholder="Enter Second Value">
<br>
<input type="submit" name="submit" value="Calculate">
</form>
 
<?php // If the form has been submitted, display the result
if (isset($result)) {
  echo "Result: $result";
}
?>
 
</body>
</html>