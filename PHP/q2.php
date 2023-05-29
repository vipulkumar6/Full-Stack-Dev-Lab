<?php
session_start();

if (isset($_SESSION['views']))
    $_SESSION['views']++;
else
    $_SESSION['view'] = 1;

echo "Session view is : " . $_SESSION['views'];




?>