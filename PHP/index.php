<?php
#printing 

echo "Hello World!";

#Variables

$name="Vipul Chauhan";
$college="GEHU";

// echo "<h1>$name</h1>";
// echo "<h4>$college</h4>";

// echo '<span>my name is : </span>' .$name;


// echo "<br>";
// echo "Operators <br>";

echo "<br>";
echo "$name", "$college";

$a=10;
$b=3;

echo "<br>", $a,"+",$b,"=",$a+$b;
$c=$a-$b;



echo "<br>";

// echo $name.$a; # dot(.) is used to concatinate two string
// echo $a-$b ;echo"<br>"; 
// echo "$a-$b";
// echo "<br>";
// $d=$a**$b ;# 10*10*10;
// echo $d;


// $ans=var_dump($a);
// echo $ans;

// $i=0;
// while($i<=10)
// {
//     echo "hello my name is $name ";
//     echo $i;
//     echo "<br>";
//     $i++;
// }

# some function in php
echo "<br>";
$site  = '  GeeksforGeeks';
echo strlen($site) , "<br>";
echo strrev($site), "<br>";

echo strpos("geeksforgeeks","for"), "<br>";
echo strlen(trim($site));
echo "<br>";
#array


$arr=array(1,2,3,4);
$i=0;
for($i=0;$i<4;$i++)
{
   echo $arr[$i]." ";
}

$site  = 'GeeksforGeeks';
 
echo "Welcome to $name";
?>