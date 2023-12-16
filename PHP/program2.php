<!DOCTYPE html>
<html>
<head>

<style>

input[type=submit]{
background-color: #BCB4B4;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>
<body>
<form method="post" action="program2.php">
<label for="student">Student name:</label>
<input type="text" name="student">
<br>
<label for="sid">Student ID:</label>
<input type="text" name="sid"><br>
<br>
<label for="slvl">Student level:</label>
<input type="text" name="slvl">
<br>
<label for="marks1">Module 1:</label>
<input type="text" name="marks1">
<br>
<label for="marks2">Module 2:</label>
<input type="text" name="marks2">
<br>
<label for="marks3">Module 3:</label>
<input type="text" name="marks3">
<br>
<label for="marks4">Module 4:</label>
<input type="text" name="marks4">
 
            <br><br>
 
        <input type="submit" value="Calculate">
            <br>
        </form><br>
 
 <?php
     $student = $_POST["student"];
     $student_id = $_POST["sid"];
     $student_level = $_POST["slvl"];
     $mark1 = $_POST["marks1"];
     $mark2 = $_POST["marks2"];
     $mark3 = $_POST["marks3"];
     $mark4 = $_POST["marks4"];

     $mark5 = ($mark1 + $mark2 + $mark3 + $mark4) / 4;

     echo "Student name: $student <br> Student ID: $student_id <br> Student Level: $student_level <br> Mark 1: $mark1 <br> Mark 2: $mark2 <br> Mark 3: $mark3 <br> Mark 4: $mark4 <br> Total avg of marks: $mark5 <br>"; 
     if ($mark5 >= 90) {
        echo "Class: A";
    } else if ($mark5 >= 75) {
        echo "Class: B";
    } else if ($mark5 >= 50) {
        echo "Class: C";
    } else {
        echo "Failed";
    }

    ?>  
</body>
</html>

