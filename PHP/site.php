<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
 
// Initialize variables to store user input
$sName = $email = $sID = '';
 
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Retrieve user input
    $sName = $_POST["name"];
    $email = $_POST["email"];
    $sID = $_POST["StudentID"];
 
    // Connect to the MySQL database
    $link = mysqli_connect("localhost", "root", "root", "week 4");
 
    if ($link === false) {
        die("Connection failed: " . mysqli_connect_error());
    }
 
    // Insert data into the 'student' table
    $sql = "INSERT INTO `week 4`.`student` (sID, sName, `email`) VALUES ('$sID', '$sName', '$email')";
 
    if (mysqli_query($link, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error adding record: " . mysqli_error($link);
    }
 



    
    // Close the database connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>

</head>
<script>
function validateForm(){

    let x = document.forms["myForm"]["StudentID"].value;
    let y = document.forms["myForm"]["name"].value;
    let z = document.forms["myForm"]["email"].value;
    if (x == " ") {
        alert("StudentID must be filled out");
        return false;
    }
    if (y == " ")
    {
        alert("Name must be filled out");
        return false;
    }
    if (z == " ")
    {
        alert("Email must be filled out");
        return false;
    }
}
</script> 




<body>
    <h2>Register a new student:</h2>
    <form name="myForm" action="addstudent .php" method="post"  onsubmit="return validateForm()">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($sName); ?>" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
        <br>
        <label for="StudentID">Student ID:</label>
        <input type="text" id="StudentID" name="StudentID" value="<?php echo htmlspecialchars($sID); ?>" required>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>