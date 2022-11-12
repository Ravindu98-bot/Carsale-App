<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            background: url(Assets/rr.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            
            font-family: sans-serif;
        }
        .box{
            width: 320px;
            height: 420px;
            background: rgba(10, 10, 10, 0.678);
            color: rgb(238, 149, 149);
            top:50%;
            left:50%;
            position: absolute;
            transform: translate(-50%,-50%);
            box-sizing: border-box;
            padding: 70px 30px;
        }
        .atr{
            width: 100px;
            height: 100px;
            border-radius: 50px;
            position: absolute;
            top: -50px;
            left: calc(50% - 50px);
        }
        .h1{
            margin: 0;
            padding: 0 0 20px;
            text-align: center;
            font-size: 22px;
        }
        .box p{
            margin: 0;
            padding: 0;
            font-weight: bold;
        }
        .box input{
            width: 100%;
            margin-bottom: 20px;
        }
        .box input[type="email"], input[type="password"]{
            border: none;
            border-bottom: 1px solid #fff;
            background: none;
            outline: 40px;
            color: aliceblue;
            font-size: 16px;
        }
        .box input[type="submit"]{
            border: none;
            outline: none;
            height: 40px;
            background: #e23c3c;
            color: azure;
            font-size: 16px;
        }
        .box input[type="submit"]:hover{
            cursor: pointer;
            background: #71d4e6;
            color: black;
        }
        .box a{
            font-size: 12px;
            line-height: 20px;
            color: rgb(165, 40, 40);
        }
    </style>
</head>
<body>
    <div class="box">
        <img src="avatar.png" class="atr">
        <h1>Login Here</h1>
        <form action="log_action.php" method="POST">
            <p>E-mail</p>
            <input type="email" name="email" placeholder="E-mail">
            <p>Password</p>
            <input type="password" name="password" placeholder="Password">
            <input type="submit" name="" value="Log in">
            <a href="">Forgot your password</a><br>
            <a href="regform.php">Don't have an account</a>
        </form>
    </div>
    
</body>
</html>