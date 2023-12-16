
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Class</title>

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



body{
  text-align: center;
}



a {
  text-decoration: none;
}
.submit {
  width: 80px;
  height: 30px;
}

input {
  border-radius: 20px;
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
          border-radius: 10px; 
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
          border-radius: 10px; 
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
          border-radius: 10px; 
      }

      .dropdown-content a {
          float: none;
          color: white;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
          text-align: left;
          border-radius: 10px; 
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
            border-radius: 10px; 
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
            border-radius: 10px; 
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
            border-radius: 10px; 
        }

        .dropdown-content a {
            float: none;
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
            border-radius: 10px;
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

        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        

        </style>

<script>
function validateForm() {
    let x = document.forms["myForm"]["StudentID"].value;
    let y = document.forms["myForm"]["name"].value;
   

   
    if (x == "") {
        alert("Student ID must be filled out");
        return false;
    }

   
    if (!/^\d+$/.test(x)) {
        alert("Student must be an integer");
        return false;
    }

  
    if (y == "") {
        alert("Name must be filled out");
        return false;
    } 

  
    if (!/^[a-zA-Z\s]+$/.test(y)) {
        alert("Name must contain only letters and spaces");
        return false;
    }


}

</script> 

</head>


<body>

        
<div class="navbar">
            <a href="index.php">Home</a>
            <a href="attendance.php"?>Attendance</a>
            
            <div class="dropdown">
                <button class="dropbtn">View
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="viewstudent.php">Student</a>
                    <a href="viewparent.php">Parent</a>
                    <a href="viewteacher.php">Teacher</a>
                    <a href="viewclass.php">Class</a>
                    <a href="viewattendance.php">Attendance</a>
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
                    <a href="addclass.php">Class</a>
                </div>
            </div>
            <div class="dropdown">
              <button class="dropbtn">Delete
                  <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                  <a href="deletestud.php">Student</a>
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

    <h2>Submit attendance</h2>
    <form name="myForm" action="attendance.php" method="post"  onsubmit="return validateForm()">
      
        <input type="text" id="StudentID" name="StudentID" placeholder="StudentID">
        <br><br>
       
        <input type="text" id="Date" name="Date" placeholder="YYYY-MM-DD">
        <br><br>
        <input type="submit" name="submit" value="Submit" >
    </form>


    <?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$date_class = $sID = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $date_class = $_POST["Date"];
    $sID = $_POST["StudentID"];

    $link = mysqli_connect("localhost", "root", "root", "week 4");

    if ($link === false) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO `week 4`.`attendance` (sID, date_class) VALUES ('$sID', '$date_class')";

    if (mysqli_query($link, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error adding record: " . mysqli_error($link);
    }

    echo "<h3>Entered Records</h3>";
    echo "<table>";
    echo "<tr><th>Student ID</th><th>Date</th></tr>";
    echo "<tr><td>{$sID}</td><td>{$date_class}</td></tr>";
    echo "</table>";

    mysqli_close($link);
}
?>

</body>
</html>