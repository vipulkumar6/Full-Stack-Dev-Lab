<html>

<body >
    
    <h2> Last visited time on the web page</h2>
    
    <br>
    <?php
    date_default_timezone_set('Asia/Kolkata');
 
    $inTwoMonths = 60 * 60 * 24 * 60 + time();
    setcookie('lastVisit', date("G:i:s - d/m/Y"), $inTwoMonths);
    if (isset($_COOKIE['lastVisit'])) {
        $visit = $_COOKIE['lastVisit'];
        echo "Your last visit was - " . $visit;
    } else
        echo "You've got some stale cookies!";
    ?>
</body>
</html>