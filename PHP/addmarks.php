
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Marks</title>

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


        .form-container {
            width: 50%;
            margin: 60px auto;
            padding: 20px;
            background-color: #ecf0f1;
            border-radius: 10px;
        }

        .form-container label {
            display: block;
            margin-bottom: 8px;
        }

        .form-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border-radius: 5px;
            border: 1px solid #bdc3c7;
            box-sizing: border-box;
        }

        .form-container button {
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: #2980b9;
        }

        .result {
            margin-top: 20px;
            color: #27ae60;
            font-weight: bold;
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

        </style>


<script>
    
    function calculateAverage() {
           
            var studentNamesInput = document.getElementById("studentNames").value;
            var marksInput = document.getElementById("marks").value;


            var studentNames = studentNamesInput.split(',').map(function (name) {
                return name.trim();
            });
            var marks = marksInput.split(',').map(function (mark) {
                return parseInt(mark.trim());
            });

            
            if (!validateInput(studentNames, marks)) {
                alert("Please enter valid data.");
                return;
            }

           
            var averageMark = calculateAverageMark(marks);

            document.getElementById("averageResult").innerHTML =
                "Average Mark for " + studentNames.join(', ') + ": " + averageMark.toFixed(2);
        }

        function validateInput(names, marks) {
           
           
            return names.length > 0 && marks.length > 0 && names.length === marks.length;
        }

        function calculateAverageMark(marks) {
            var sum = marks.reduce(function (total, mark) {
                return total + mark;
            }, 0);

            return sum / marks.length;
        }
  


function validateForm() {
    let x = document.forms["myForm"]["ParentID"].value;
    let y = document.forms["myForm"]["name"].value;
    let z = document.forms["myForm"]["email"].value;

   
    if (x == "") {
        alert("ParentID must be filled out");
        return false;
    }

   
    if (!/^\d+$/.test(x)) {
        alert("ParentID must be an integer");
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

        <div class="form-container">
        <h2>Enter Student Marks</h2>
        <form name="marksForm" action="#" method="post" onsubmit="return validateForm()">

            <label for="studentNames">Student Names (comma-separated): </label>
            <input type="text" id="studentNames" name="studentNames" placeholder="e.g., John, Jane, Bob" required>
            <br><br>

            <label for="marks">Enter Marks (comma-separated): </label>
            <input type="text" id="marks" name="marks" placeholder="e.g., 85, 90, 75" required>
            <br><br>

            <button type="button" onclick="calculateAverage()">Calculate Average</button>
        </form>

        <div class="result" id="averageResult"></div>
    </div>

<button class="go-back-btn">
        <a href="index.php"> Go Back </a>
    </button>

    <h2>Add Marks</h2>
    <form name="myForm" action="addmarks.php" method="post" onsubmit="return validateForm()">

        <label for="studentName">Student Name: </label>
        <input type="text" id="studentName" name="studentName" placeholder="Name">
        <br><br>

        <label for="mark">Enter Mark: </label>
        <input type="text" id="mark" name="mark" placeholder="Mark">
        <br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        // Retrieve user input
        $sName = $_POST["studentName"];
        $sMark = $_POST["mark"];

        // Connect to the MySQL database
        $link = mysqli_connect("localhost", "root", "root", "week 4");

        if ($link === false) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Insert data into the 'studentmarks' table
        $sql = "INSERT INTO `week 4`.`studentmarks` (sName, sMark) VALUES ('$sName', '$sMark')";

        if (mysqli_query($link, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error adding record: " . mysqli_error($link);
        }

        // Close the database connection
        mysqli_close($link);
    }
    ?>

    <h2>Calculate Average Mark</h2>
    <form name="averageForm" action="calculate_average.php" method="post" onsubmit="return validateForm()">

        <label for="marks">Enter Marks (comma-separated): </label>
        <input type="text" id="marks" name="marks" placeholder="e.g., 85, 90, 75">
        <br><br>

        <input type="submit" name="submit" value="Calculate Average">
    </form>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        // Retrieve and validate user input
        $marksInput = $_POST["marks"];
        $marks = explode(',', $marksInput);

        // Filter out any non-numeric values
        $marks = array_filter($marks, function($value) {
            return is_numeric(trim($value));
        });

        if (empty($marks)) {
            echo "Please enter valid numeric marks.";
        } else {
            // Calculate average mark
            $averageMark = array_sum($marks) / count($marks);

            // Display the result
            echo "<div class='result'>Average Mark: " . round($averageMark, 2) . "</div>";
        }
    }
    ?>

</body>
</html>

    
