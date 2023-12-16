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

        input {


        border-color: black;
        border-radius: 20px;
        width: 20%;
        height: 30px;
}

 
    </style>
 
    </head>
 
<body>
 
    <button class="back">
<a href="index.html">Go Back</a>
</button>
 
    <br>
<br>
 
    <form method="post" action="delete.php">

<input type="text" name="sid" placeholder="StudentID">
 
        <br>
<br>
 
        <input type="submit" name="Submit">
</form>
 
 
<?php
 
    $link = mysqli_connect("localhost", "root", "root", "week 4");
    if ( $link === false ) {
        die("Connection failed: ");
    }
 
    if (isset($_POST['Submit'])) {
 
        $sid = $_POST['sid'];
 
        $sql = "DELETE FROM student WHERE sID='$sid'";
 
            if (mysqli_query($link, $sql)) {
                echo "Record deleted successfully";
                } else {
                    echo "Error!";
            }
 
    }
 
?>
 
</body>
</html>
 

</body>
</html>