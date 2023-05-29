<html>
<style>
    form {
        top: 50%;
        left: 50%;
        position: absolute;
        transform: translate(-50%, -50%);
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        padding: 60px 150px;
        border-radius: 50px;

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

    button {
        padding: 13px 16px;
        align-items: center;
        margin-top: 10px;
        cursor: pointer;
        width: 100%;
    }

    form div {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
</style>

<body>

    <form action="./server.php" method="post">
        <h2>Login Form- PHP</h2>
        <div>
            <label for="">ID</label>
            <input require type="text" name="id" placeholder="ID"><br>
        </div>
        <div>
            <label for="">Password</label>
            <input require type="password" name="pass" placeholder="Password"><br>
        </div>
        <button type="submit">Login</button>
    </form>

</body>

</html>