<?php 

//  function myfun($name)
//  {
//     echo "my name is $name";
//  }

//  myfun("Vipul");
// echo "<br>";
//  // array ();

// $name =array("Vipul","Snoia","Sumit","Ajay","Rahul");
// echo "<pre>";
// print_r($name);
// for( $i=0;$i<count($name);$i++)
// {
//    echo "$name[$i]"," ";
// }

// foreach($name as $currname)
// {
//    echo "$currname ";
// }

// // sorting /
// echo "<br>";

// $number=array(1,35,5,2,6,46,23,64);
// array_pop(($number)); // we can use array_shift() only diff is work from starting
// array_push($number,1000); // we can use array_shift() only diff is work from starting
// // sort($number);
// foreach($number as $num)
// {
//    echo "$num ";
// }



// impload and explode


// $arr= array("red","blude","green");

// $res=implode(" ",$arr); // array to string
// echo "$res";

// $mydata="HEllo vipul hwo are yu";

// $ans=explode(" ",$mydata); // string to array 
// print_r($ans);
// foreach($ans as $data)
// {
//    echo "$data ";
// }

// function mergeArray($arr1,$arr2)
// {
//    $merge=array_merge($arr1,$arr2);
//    $union=array_unique($merge);
// return $union;
// }
// // function unionArray($arr1,$arr2)
// // {
// //    $ans=array_unique(($arr1,$arr2));
// //    return $ans;
// // }

// $arr1=array(1,2,3,5,67,10);
// $arr2=array(1,5,3,10,4);

//  $ans1=mergeArray($arr1,$arr2);
// //  $ans2=unionArray($arr1,$arr2);
// foreach($ans1 as $arr)
// {
//    echo "$arr ";
// }
// echo "<br>";
// foreach($ans2 as $arr)
// {
//    echo "$arr ";
// }




// ====== date and time function 


echo date("l jS \of F Y h:i:s A");

echo "<br>";
date_default_timezone_set('Asia/Kolkata');

echo date("l jS \of F Y h:i:s A");

?>