<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
 
// Initialize variables to store user input
$pName = $email = $pID = '';
 
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Retrieve user input
    $pName = $_POST["name"];
    $email = $_POST["email"];
    $pID = $_POST["ParentID"];
 
    // Connect to the MySQL database
    $link = mysqli_connect("localhost", "root", "root", "week 4");
 
    if ($link === false) {
        die("Connection failed: " . mysqli_connect_error());
    }
 
    // Insert data into the 'student' table
    $sql = "INSERT INTO `week 4`.'parent` (pID, pName, `email`) VALUES ('$pID', '$pName', '$email')";
 
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
    <h2>Register a new Parent:</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($pName); ?>" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
        <br>
        <label for="ParentID">Parent ID:</label>
        <input type="text" id="ParentID" name="ParentID" value="<?php echo htmlspecialchars($pID); ?>" required>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>