<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
 
// Initialize variables to store user input
$tName = $email = $tID = '';
 
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Retrieve user input
    $tName = $_POST["name"];
    $email = $_POST["email"];
    $tID = $_POST["TeacherID"];
 
    // Connect to the MySQL database
    $link = mysqli_connect("localhost", "root", "root", "week 4");
 
    if ($link === false) {
        die("Connection failed: " . mysqli_connect_error());
    }
 
    // Insert data into the 'student' table
    $sql = "INSERT INTO `week 4`.`teacher` (tID, tName, `email`) VALUES ('$tID', '$tName', '$email')";
 
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



<body>
    <h2>Register a new teacher:</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($tName); ?>" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
        <br>
        <label for="TeacherID">Teacher ID:</label>
        <input type="text" id="TeacherID" name="TeacherID" value="<?php echo htmlspecialchars($tID); ?>" required>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>