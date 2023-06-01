<!-- //login form  -->
<html>
<style>
    form {
        top: 50%;
        left: 50%;
        position: absolute;
        transform: translate(-50%, -50%);
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        padding: 60px 190px;
        border-radius: 20px;

    }

    form input {
        padding: 10px;
        border: none;
        outline: none;
        border: 1px solid #eee;
        margin-top: 4px;
    }

    form div {
        margin-top: 20px;
    }

    .btn {
        padding: 13px 16px;
        align-items: center;
        margin-top: 10px;
        cursor: pointer;
        width: 100%;
        cursor: pointer;
    }

    form div {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
</style>

<body>

    <form action="" method="post">
        <h2>Login Form- PHP</h2>
        <div>
            <label for="">ID</label>
            <input require type="text" name="id" placeholder="ID"><br>
        </div>
        <div>
            <label for="">Password</label>
            <input require type="password" name="pass" placeholder="Password"><br>
        </div>
        <input class="btn" type="submit" value="Login" name="loginbtn">
    </form>

</body>

</html>

<?php

$server = 'localhost';
$username = "root";
$password = "";
$db = "loginuser";
$conn = mysqli_connect($server, $username, $password, $db);

if (isset($_POST['loginbtn'])) {

    $id = $_POST['id'];
    $password = $_POST['pass'];

    $query = "SELECT * from user WHERE id='$id' ";

    $res = mysqli_query($conn, $query);
    if ($res) {
        if (mysqli_num_rows($res) > 0) {
            header("Location: http://localhost/vipul/q1/window.php");
        } else
            echo "Invalid";
    }
}

?>