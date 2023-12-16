<html>
<head>
 
    <style>

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

        .back {
            border-radius: 2px;
 
        }
 
        .back a {
            color: black;
        }
 
        a {
            text-decoration: none;
        }
        body{
    text-align: center;
}

input {


        border-color: black;
        border-radius: 20px;
        width: 20%;
        height: 30px;
     
}
::placeholder {

text-align: center;

}
 
select {
    border-radius: 20px;
}

 
    </style>
 
    </head>
 
<body>
 
<button class="go-back-btn">
        <a href="index.php"> Go Back </a>
    </button>

 
    <br>
    <br>
 
    <form method="post" action="deletestud.php">

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