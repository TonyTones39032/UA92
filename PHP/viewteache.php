
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parent Registration</title>
</head>
<body>
    <h2>View parent records:</h2>
    

    <?php
    $link = mysqli_connect("localhost", "root", "root", "week 4");
    //check the connection
    if ($link === false) {
        die("Connection failed: " . mysqli_connect_error());
    }
    ?>

    <h3> See all Parents </h3>

    <table>

        <tr>
            <th width="150px"> Parent ID <br><br></th>
            <th width="250px"> PName <br><hr></th>
                    <th width="250">email <br><hr></th>
        </tr>

            <?php

            $sql = mysqli_query($link, "SELECT pID, pName, email FROM parent");
            while ($row = $sql->fetch_assoc()){
                echo "
                <tr>
                <th>{$row['pID']}</th>
                <th>{$row['pName']}</th>
                    <th>{$row['email']}</th>
                </tr>";
                
                
                
                
            }



            ?>


    </table>

    



</body>
</html>