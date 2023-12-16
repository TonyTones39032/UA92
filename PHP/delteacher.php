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
        .navbar {
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            background-color: #3498db;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
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
            border-radius: 10px; /* Added border-radius for rounded corners */
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
            let x = document.forms["myForm"]["tid"].value; // Change "TeacherID" to "tid"

            if (x === "") {
                alert("TeacherID must be filled out"); // Modify the alert message
                return false;
            }

            if (!/^\d+$/.test(x)) {
                alert("TeacherID must be an integer");
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
                 
                  <a href="deletestud.php">Student</a>
                  <a href="delparent.php">Parent</a>
                  <a href="deleteclass.php">Class</a>
              </div>
          </div>
          <div class="dropdown">
            <button class="dropbtn">Update
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="updatestudent.php">Student</a>
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

 
    <br>
    <br>
 
    <form name="myForm" method="post" action="delteacher.php" onsubmit="return validateForm()">

<input type="text" name="tid" placeholder="TeacherID">
 
        <br>
        <br>
 
        <input type="submit" name="Submit" value="Delete">
</form>
 
 
<?php
 
    $link = mysqli_connect("localhost", "root", "root", "week 4");
    if ( $link === false ) {
        die("Connection failed: ");
    }
 
    if (isset($_POST['Submit'])) {
 
        $tid = $_POST['tid'];
 
        $sql = "DELETE FROM teacher WHERE tID='$tid'";
 
            if (mysqli_query($link, $sql)) {
                echo "Record deleted successfully";
                } else {
                    echo "Error!";
            }
 
    }
 
?>
 


</body>
</html>