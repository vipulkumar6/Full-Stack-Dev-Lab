<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php With Mysql</title>
    <style>
        form{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 60vh;
        }
        form input{
padding: 10px;
border: 1px solid;
        }
         .button{
            background-color: #654ea3;
            padding: 14px 16px;
            border: none;
            outline: none;
            border-radius: 7px;
            color: #fff;
            cursor: pointer;
          
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <div>
            <input type="text" name="search" id="" placeholder="Enter Acc Number *">
             <input class="button" type="submit" name="searchBTN" value="Search" />
               
        </div>

    </form>
    <a  href="./book.php"><button class="button">Back</button></a>
</body>
</html>

<?php


include 'server.php';

if(isset($_POST['searchBTN']))
{
    $title=$_POST['search'];
    $select= "SELECT * from book1 WHERE acc_num='$title'";
    $res=mysqli_query($conn,$select);
   echo $title;
    if($res)
    {
        if(mysqli_num_rows($res)>0)
        {
              echo "<table>";
              echo "<tr>";
             while ($row = mysqli_fetch_array($res)) {
            echo "<tr>";
            echo "<td>".$row['acc_num']."</td>";
            echo "<td>".$row['title']."</td>";
            echo "<td>".$row['author']."</td>";
            echo "<td>".$row['edition']."</td>";
            echo "<td>".$row['publisher']."</td>";
            echo "</tr>";
        }
        echo "<tr>";
        echo "</table>";

        }
        else 
        echo "No row  found";
    }
    else
    echo "NOT set".mysqli_error($conn);

}


?>