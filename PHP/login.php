<!DOCTYPE html>
<html>

<head>

    <title>Login</title>

    <style>

::placeholder {

text-align: center;

}

.submit {

width: 80px;

height: 30px;

}

input {
border-color: black;
border-radius: 20px;
width: 20%;
height: 30px;
}

select {

border-radius: 20px;

}

body {

text-align: center;
font-size: larger;



}

button {

margin-right: 96%;

margin-top: 1%;

border-radius: 20px;

border-style: outset;

border-width: 3px;

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
.login-image {
            margin-bottom: 20px; 
        }


    </style>

    <script>
        function validateForm() {
            
        }
    </script>

</head>

<body>

    <div class="login-image"> 
        <img src="logo.jpg" alt="login image" width="200">
    </div>

    <form name="myForm" method="post" action="login.php" onsubmit="return validateForm()">

        <h3>Login</h3>

        <br>

        <input type="text" name="username" placeholder="Username">

        <br>

        <br>

        <input type="password" name="password" placeholder="Password">

        <br>

        <br>

        <input class="submit" type="submit" name="submit" value="Login">


    </form>

    <?php

    $con = mysqli_connect("localhost", "root", "root", "week 4");

    if ($con === false) {
        die("Connection failed: " . mysqli_connect_error());
    }

    session_start();
    if (isset($_POST['username'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM `users` WHERE username='$username' AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
                
                header("Location: index.php");
                exit();

        } else {

            echo  "<div class='form'>
            <h3> Incorrect Username/Password.</h3><br/>
            <p class ='link'>Click here to  <a href='login.php'>Login</a> again</p></div>";
        }
    }

    ?>


</body>
<br>
<div class='form'>
   <a href='Registration.php'>Register</a></div>
   

</html>
