<!DOCTYPE html>
<html xmlns:mso="urn:schemas-microsoft-com:office:office" xmlns:msdt="uuid:C2F41010-65B3-11d1-A29F-00AA00C14882">
    <head>

    <title>Home</title> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
        body {
          font-family: Arial, Helvetica, sans-serif;
        }

        .navbar {
          overflow: hidden;
          background-color: #8AB5D5;
        }

        .navbar a {
          float: left;
          font-size: 16px;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
        }

        .dropdown {
          float: left;
          overflow: hidden;
        }

        .dropdown .dropbtn {
          font-size: 16px;
          border: none;
          outline: none;
          color: white;
          padding: 14px 16px;
          background-color: inherit;
          font-family: inherit;
          margin: 0;
        }

        .navbar a:hover, .dropdown:hover .dropbtn {
          background-color: lightgrey;
        }

        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #8AB5D5;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }

        .dropdown-content a {
          float: none;
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
          text-align: left;
        }

        .dropdown-content a:hover {
          background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
          display: block;
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

        .login-image {
            margin-bottom: 30px; 
        }

        .extra-features {
            display: flex;
            justify-content: space-around;
            margin-top: 30px;
        }

        .feature {
            background-color: #3498db;
            color: white;
            padding: 10px;
            border-radius: 10px;
            cursor: pointer;
            width: 150px;
        }

        .feature:hover {
            background-color: #2980b9;
        }
        .login-image {
            margin-bottom: 30px;
            text-align: center;
        }

        .school-logo {
            width: 200px; 
        }

        .school-name {
            font-size: 24px;
            font-weight: bold;
            color: #3498db;
            margin-top: 10px;
        }
        .login-image {
            margin-bottom: 30px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .school-logo {
            width: 200px; 
            margin-right: 20px; 
        }

        .school-info {
            text-align: left;
        }

        .school-name {
            font-size: 24px;
            font-weight: bold;
            color: #3498db;
            margin-bottom: 5px;
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
    
</head>
    <body>

    



<script>
    
    function logout() {
       

        
        window.location.href = 'login.php'; 
    }
</script>




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
                    <a href="viewattendance.php">ViewAttendance</A>
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
       
        <div class="login-image"> 
        
        <img class="school-logo" src="logo.jpg" alt="login image">
    <div class="school-name">St Alphonsus Primary School</div>
    </div>

        


       
       
    </body>
</html>
