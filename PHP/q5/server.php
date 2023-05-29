<?php

$username="root";
$password="";
$server="localhost";
$db="bookinfo";


$conn= mysqli_connect($server,$username,$password,$db);

if($conn)
{
   echo "Connection Successfuly !";
}
else
{
    echo "NO COnnection !";
    die("Connectio  failed".mysqli_connect_error());
}


?>