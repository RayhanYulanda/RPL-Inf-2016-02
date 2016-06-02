<!DOCTYPE html>
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<meta charset="UTF-8">
<meta name ="viewport" content="width=device-width, initial-scale=1.0">

<title>LOGIN</title>
<style>
body {
    background: url('img/bg.jpg') no-repeat fixed center center;
    background-size: cover;
    font-family: Montserrat;
}

.logo {
    width: 140px;
    height: 140px;
    background: url('img/l300.png') no-repeat center;
	background-size: 140px 120px;
    margin: 30px auto;
}

.login-block {
    width: 320px;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    border-top: 5px solid #ff0000;
    margin: 0 auto;
}

.login-block h1 {
    text-align: center;
    color: #000;
    font-size: 18px;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
}

.login-block input {
    width: 100%;
    height: 42px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 14px;
    font-family: Montserrat;
    padding: 0 20px 0 50px;
    outline: none;
}

.login-block input#username {
    background: #fff url('img/user.png') 10px no-repeat;
    background-size: 30px 30px;
}


.login-block input#password {
    background: #fff url('img/pass.png') 10px no-repeat;
    background-size: 30px 30px;
}



.login-block input#login {
    width: 100%;
    height: 40px;
    background: #cc0000;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #e15960;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
}

.login-block input:hover#login {
    background: #ff0000;
}

</style>
</head>

<body>

<div class="logo"></div>
<div class="login-block">
	<form action="index.php" method="POST">
		<h1>Login l300</h1>
		<input type="text" value="" placeholder="ID l300" name="id_l300" id="username"/>
		<input type="password" value="" placeholder="Password" name="password" id="password"/>
		<input type="submit" value="LOGIN" id="login"/>
    </form>
</div>
</body>

</html>