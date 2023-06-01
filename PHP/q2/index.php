<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERS Department</title>
    <style>
        .wrapper{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50vh;
            flex-direction: column;
           
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <h1>Find the department inforamtion!</h1>
        <form action="" method="POST">
            <input type="text" name="dno" placeholder="Search by department Num">
            <input type="submit" value="Submit" name="submit" id="">
        </form>

    </div>
</body>

</html>

<?php

include "server.php";
if(isset($_POST['submit']))
{
    $dno=$_POST['dno'];

    $query = "SELECT * from pers WHERE dno='$dno'";

    $res=mysqli_query($conn,$query);

    if($res)
    {
        if(mysqli_num_rows($res)>0)
        {
            echo "<table>";
            echo "<tr>";
            while ($row = mysqli_fetch_array($res)) {
                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['dno'] . "</td>";
                echo "<td>" . $row['field'] . "</td>";
             
                echo "</tr>";
            }
            echo "<tr>";
            echo "</table>";
        } else
        echo "Sorry, Not ROW Found";
    }
    
}

?>