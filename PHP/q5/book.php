<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
.form-style-5{
	max-width: 500px;
	padding: 10px 20px;
	background: #f4f7f8;
	margin: 10px auto;
	padding: 20px;
	background: #f4f7f8;
	border-radius: 8px;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.form-style-5 fieldset{
	border: none;
}
.form-style-5 legend {
	font-size: 1.4em;
	margin-bottom: 10px;
}
.form-style-5 label {
	display: block;
	margin-bottom: 8px;
}
.form-style-5 input[type="text"],
.form-style-5 input[type="date"],
.form-style-5 input[type="datetime"],
.form-style-5 input[type="email"],
.form-style-5 input[type="number"],
.form-style-5 input[type="search"],
.form-style-5 input[type="time"],
.form-style-5 input[type="url"],
.form-style-5 textarea,
.form-style-5 select {
	font-family: Georgia, "Times New Roman", Times, serif;
	background: rgba(255,255,255,.1);
	border: none;
	border-radius: 4px;
	font-size: 15px;
	margin: 0;
	outline: 0;
	padding: 10px;
	width: 100%;
	box-sizing: border-box; 
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box; 
	background-color: #e8eeef;
	color:#8a97a0;
	-webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
	box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
	margin-bottom: 30px;
}
.form-style-5 input[type="text"]:focus,
.form-style-5 input[type="date"]:focus,
.form-style-5 input[type="datetime"]:focus,
.form-style-5 input[type="email"]:focus,
.form-style-5 input[type="number"]:focus,
.form-style-5 input[type="search"]:focus,
.form-style-5 input[type="time"]:focus,
.form-style-5 input[type="url"]:focus,
.form-style-5 textarea:focus,
.form-style-5 select:focus{
	background: #d2d9dd;
}
.form-style-5 select{
	-webkit-appearance: menulist-button;
	height:35px;
}
.form-style-5 .number {
	background: #1abc9c;
	color: #fff;
	height: 30px;
	width: 30px;
	display: inline-block;
	font-size: 0.8em;
	margin-right: 4px;
	line-height: 30px;
	text-align: center;
	text-shadow: 0 1px 0 rgba(255,255,255,0.2);
	border-radius: 15px 15px 15px 0px;
}

.form-style-5 input[type="submit"],
.form-style-5 input[type="button"]
{
	position: relative;
	display: block;
	padding: 19px 39px 18px 39px;
	color: #FFF;
	margin: 0 auto;
	background: #1abc9c;
	font-size: 18px;
	text-align: center;
	font-style: normal;
	width: 100%;
	border: 1px solid #16a085;
	border-width: 1px 1px 3px;
	margin-bottom: 10px;
}
.form-style-5 input[type="submit"]:hover,
.form-style-5 input[type="button"]:hover
{
	background: #109177;
}
.home .second{
            padding: 50px;
            /* border: 1px solid; */
              box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
              border-radius: 5px;
        }
        button{
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
    <div class="book">
        <div class="form-style-5">
            <form method="POST">
                <fieldset>
                    <legend><span class="number">1</span> Book Info</legend>
                    <input type="text" name="field1" placeholder="Accession number *">
                    <input type="text" name="field2" placeholder="Title *">
                    <input type="text" name="field3" placeholder="Edition *">
                    <input type="text" name="field4" placeholder="Authors *">
                    <input type="text" name="field5" placeholder="Publisher *">
                    
                </fieldset>
               
                <input type="submit" name="submit" value="Apply" />
            </form>
        </div>
    </div>
    <div>
        <div class="second">
              <a href="./index.php"><button>Home</button></a>
         <a href="./book.php"><button>Store Book</button></a>
       <a href="./search.php"> <button>Search Book</button></a>
       </div>
    </div>
</body>

</html>

<?php 
include 'server.php';

if(isset($_POST['submit'])){
     $acc_num=$_POST['field1'];
     $title=$_POST['field2'];
     $author=$_POST['field3'];
     $edition=$_POST['field4'];
     $publisher=$_POST['field5'];

$insert="insert into book1(acc_num,title,author,edition,publisher) 
values('$acc_num',' $title','$author', '$edition','$publisher')";


$res=mysqli_query($conn,$insert);

if($res)
{
      echo '<script>alert("Your Book has been stored")</script>';
}
else 
 echo '<script>alert("Not Stored!")</script>';

}
?>