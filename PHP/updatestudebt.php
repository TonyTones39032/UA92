<html>
<head>
 
    <style>
        .back {
            border-radius: 2px;
 
        }
 
        .back a {
            color: black;
        }
 
        a {
            text-decoration: none;
        }
        .go-back-btn {
  
  font-size: 16px;
        border: none;
        outline: none;
        color: white;
        padding: 14px 16px;
        background-color: inherit;
        font-family: inherit;
        margin: 0;

}
body{
    text-align: center;
}
    </style>
 
    </head>
 
<body>
 
<button class="go-back-btn">
        <a href="index.php"> Go Back </a>
    </button>

 
    <form method="post" action="updatestudebt.php">

<label for="studentID">Student ID:</label>
<input type="text" name="sid"><br><br>

<label for="studentFname "> EnterStudent ID: </label>
<input type="text" name="sname"><br><br>

<label for="studentID">EnterStudent email: </label>
<input type="text" name="email"><br><br>

<input type="submit" name ="submit" value="submit">
    </form>
 
        <br>

 
<?php
 
    $link = mysqli_connect("localhost", "root", "root", "week 4");
    if ( $link === false ) {
        die("Connection failed: ");
    }
 
    if (isset($_POST['Submit'])) {
 
        $sid = $_POST['sid'];
        $sname=$_POST['sname'];
        $email=$_POST['email'];

 
        $sql = "UPDATE student SET sName='$sname', email='$email' WHERE sID='$sid'";
        if ($link->query($sql) === TRUE)
        {
            echo "Record updated successfully";
 
         }else {

            echo "Error updating record " . $link->error;
         }
$link->close();
    }
     ?>  
 
</body>
</html>

 