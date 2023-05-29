<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .home{
    display: flex;
    justify-content: space-around;
    align-items: center;
    flex-direction: column;
    height: 80vh;

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
        .class h1{
width: 100%;
        }
    </style>
</head>
<body>
    <div class="home">
        <div class="first">
            <marquee behavior="smooth" direction="alternative"><h1>YOUR LOCAL BOOK STORE!</h1></marquee>
        </div>
       <div class="second">
         <a href="./book.php"><button>Store Book</button></a>
       <a href="./search.php"> <button>Search Book</button></a>
       </div>
    </div>
</body>
</html>