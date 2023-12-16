
<html>

<head>

    <title>Registration</title>
 
    <style>
 
        ::placeholder {

            text-align: center;

        }
 
        .submit {

            width: 80px;

            height: 30px;

        }
 
        select {

            border-radius: 20px;

        }
 
        body {

            text-align: center;
         

        }
        input {
            border-color: black;
            border-radius: 20px;
            width: 20%;
            height: 30px;
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
    let x = document.forms["myForm"]["username"].value;
    let y = document.forms["myForm"]["password"].value;
    let z = document.forms["myForm"]["email"].value;

   
    if (x == "") {
        alert("Username must be filled out");
        return false;
    }

  
    if (y == "") {
        alert("Password must be filled out");
        return false;
    }


    if (z == "") {
        alert("Email must be entered");
        return false;
    }

    if (!/^\S+@\S+\.\S+$/.test(z)) {
        alert("Invalid email format");
        return false;
    }

    return true;
}

</script> 



</head>

<body>




<button class="go-back-btn">
        <a href="login.php"> Go Back </a>
    </button>
  <div class="login-image"> 
        <img src="logo.jpg" alt="login image" width="200">
    </div>

<form name= "myForm" method="post" action="Registration.php"  onsubmit="return validateForm()">
 
    <h3>

        REGISTRATION 

    </h3>

    <br>
 
    <input type="text" name="username" placeholder="Username">
 
    <br>

    <br>
 
    <input type="email" name="email" placeholder="Email">
 
    <br>

    <br>
 
    <input type="password" name="password" placeholder="Password">
 
    <br>

    <br>
 
    <input class="submit" type="submit" name="submit" value="Register">
 
</form>
 
<?php
 
        $link = mysqli_connect("localhost", "root", "root", "week 4");

        if ( $link === false ) {

            die("Connection failed: ");

        }
 
    if (isset($_POST['submit'])) {

        $username = $_POST['username'];

        $email = $_POST['email'];

        $password= $_POST['password'];

        $create_datetime = date("Y-m-d H:i:s");
 
        $sql = "INSERT INTO users (username, email, password, create_datetime) VALUES ('$username', '$email','" . md5($password) . "', '$create_datetime')";
 
        $result = mysqli_query($link, $sql);
 
            if ($result) {

                echo "<div class='form'>

                <h3>You have registered successfully!</h3><br/>

                <p class='link'Go to</p><a href='login.php'>Login</a>

                </div>";

                } else {

                    echo "Registration Failed";

            }
 
}
 
?>
 
 <div class='form'>
   <a href='login.php'>Back to Login</a></div>


</body>
</html>

