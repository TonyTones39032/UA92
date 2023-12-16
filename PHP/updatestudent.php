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

        body {
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





body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-align: center;
        }

        .navbar {
            overflow: hidden;
            background-color: #3498db;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
           
        }

        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            border-radius: 10px; /* Added border-radius for rounded corners */
        }

        .navbar a:hover {
            background-color: #2980b9;
        }

        .dropdown {
            float: left;
            overflow: hidden;
        }

        .dropbtn {
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
            border-radius: 10px; /* Added border-radius for rounded corners */
        }

        .navbar a, .dropdown:hover .dropbtn {
            background-color: #3498db;
        }
        .navbar {
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            background-color: #3498db;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #3498db;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 10px; /* Added border-radius for rounded corners */
        }

        .dropdown-content a {
            float: none;
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
            border-radius: 10px; /* Added border-radius for rounded corners */
        }

        .dropdown-content a:hover {
            background-color: #2980b9;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .logout-btn {
            float: right;
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 14px 16px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 10px; 
        }

        .logout-btn:hover {
            background-color: #c0392b;
        }

        h1,
        h2,
        p {
            margin: 20px;
            padding: 20px;
        }

    </style>
   <script>
       function validateForm() {
            let x = document.forms["myForm"]["sid"].value;
            let y = document.forms["myForm"]["sname"].value;
            let z = document.forms["myForm"]["email"].value;
            let a = document.forms["myForm"]["number"].value;

            if (x === "") {
                alert("ID must be filled out");
                return false;
            }

            if (!/^\d+$/.test(x)) {
                alert("ID must be an integer");
                return false;
            }

            if (y === "") {
                alert("Name must be filled out");
                return false;
            }

            if (!/^[a-zA-Z\s]+$/.test(y)) {
                alert("Name must contain only letters and spaces");
                return false;
            }

            if (z === "") {
                alert("Email must be entered");
                return false;
            }

            if (!/^\S+@\S+\.\S+$/.test(z)) {
                alert("Invalid email format");
                return false;
            }

            if (a === "" || isNaN(a)) {
                alert("Number must be entered as a valid number");
                return false;
            }

            return true;
        }
    </script>

</head>

<body>

<div class="navbar">
            <a href="index.php">Home</a>

            
            <div class="dropdown">
                <button class="dropbtn">View
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="viewstudent.php">Student</a>
                    <a href="viewparent.php">Parent</a>
                    <a href="viewteacher.php">Teacher</a>
                    <a href="viewclass.php">Class</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Add
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="addstudent.php">Student</a>
                    <a href="addparent.php">Parent</a>
                    <a href="addteacher.php">Teacher</a>
                    
                </div>
            </div>
            <div class="dropdown">
              <button class="dropbtn">Delete
                  <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
              
                  <a href="delparent.php">Parent</a>
                  <a href="delteacher.php">Teacher</a>
                  <a href="deleteclass.php">Class</a>
                
              </div>
          </div>
          <div class="dropdown">
            <button class="dropbtn">Update
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                
                <a href="updateparent.php">Parent</a>
                <a href="updateteacher.php">Teacher</a>
                <a href="updateclass.php">Class</a>
            </div>
        </div>
            <a href="contactus.php">Contact Us</a>
         
            <a href="Registration.php">Register</a>
            <button class="logout-btn" onclick="logout()">Logout</button>
          
        </div>

    <button class="go-back-btn">
        <a href="index.php"> Go Back </a>
    </button>

    <form name="myForm" action="updatestudent.php"s method="post" onsubmit="return validateForm()">

     
        <input type="text" name="sid" placeholder="StudentID"><br><br>

        <input type="text" name="sname" placeholder="StudentName"><br><br>


        <input type="text" name="email" placeholder="Email"><br><br>

        <input type="number" name="number" placeholder="Phone Number"><br><br>

        <input type="submit" name="submit" value="Update">
    </form>

    <br>

    <?php

    $link = mysqli_connect("localhost", "root", "root", "week 4");
    if ($link === false) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if (isset($_POST['submit'])) {

        $sID = $_POST['sid'];
        $sName = $_POST['sname'];
        $email = $_POST['email'];
        $number  = $_POST['number'];

        $sql = "UPDATE student SET sName='$sName', email='$email', number = '$number' WHERE sID='$sID'";
        if ($link->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record " . $link->error;
        }
        $link->close();
    }
    ?>
</body>
</html>
