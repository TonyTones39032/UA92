<!DOCTYPE html>
<html xmlns:mso="urn:schemas-microsoft-com:office:office" xmlns:msdt="uuid:C2F41010-65B3-11d1-A29F-00AA00C14882">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .navbar {
            overflow: hidden;
            background-color: #3498db;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 15px; /* Added border-radius for rounded corners */
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
    </style>
  
</head>

<body>
    <div class="navbar">
        <a href="index.php">Home</a>

        <div class="dropdown">
            <button class="dropbtn">View <i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
                <a href="viewstudent.php">Student</a>
                <a href="viewparent.php">Parent</a>
                <a href="viewteacher.php">Teacher</a>
                <a href="viewclass.php">Class</a>
            </div>
        </div>

        <div class="dropdown">
            <button class="dropbtn">Add <i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
                <a href="addstudent.php">Student</a>
                <a href="addparent.php">Parent</a>
                <a href="addteacher.php">Teacher</a>
                <a href="addclass.php">Class</a>
            </div>
        </div>

        <div class="dropdown">
            <button class="dropbtn">Delete <i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
                <a href="deletestud.php">Student</a>
                <a href="delparent.php">Parent</a>
                <a href="delteacher.php">Teacher</a>
                <a href="AddClass.html">Class</a>
            </div>
        </div>

        <div class="dropdown">
            <button class="dropbtn">Update <i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
                <a href="updatestudent.php">Student</a>
                <a href="updateparent.php">Parent</a>
                <a href="AddTeacher.html">Teacher</a>
                <a href="AddClass.html">Class</a>
            </div>
        </div>

        <a href="contactus.php">Contact Us</a>
        <a href="Registration.php">Register</a>
        <button class="logout-btn" onclick="logout()">Logout</button>
    </div>

    <h1>Welcome to St Alphonsus R.C. Primary School.</h1>
    <p>Welcome to St. Alphonsus R.C. Primary School. This is a school where our children enjoy their learning, the staff
        work hard to establish a caring Christian community and everyone is valued equally. We regard it as a privilege
        to work with parents in every aspect of their children’s learning and development.</p>

    <h2>History</h2>
    <p>We have high expectations for all our children and provide a rich and varied curriculum with an emphasis on
        enjoyment and enquiry. St. Alphonsus is a happy school and we believe we achieve this by providing a safe and
        secure environment in which our children grow and learn with confidence...</p>
</body>

</html>
