<?php
session_start();
if(isset($_SESSION['count']))
{
     $_SESSION['count']++;
     echo "sesscion count is : ".$_SESSION['count'];
}
else
{
    $_SESSION['count']=1;
echo "session end";
}
