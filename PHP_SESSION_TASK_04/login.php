<?php
session_start();
if(isset($_POST['submit'])){
    $name =htmlentities($_POST['name']);
    $password =md5($_POST['password']);
    if(empty($name) || empty($password) ){
        echo "null submission found!";
    }else if(isset($_SESSION['userName']) && isset($_SESSION['password'])){
        if($name == $_SESSION['userName'] && $password == $_SESSION['password']){
                $_SESSION['status'] = "OK";
                header('Location: edit_profile.php');
            }
    }
}else{
    header('location: login.php');
}
?>
<!DOCTYPE html>
<head>
    <title>Login</title>
</head>
<body>
    <center>
        <table width="100%" border="1">
            <tr height="100px">
                <td width="100px">
                    <a href="index.html"><img src="./logo.png" width="150px" height="100px"></a>
                <td align="right" colspan="2">
                    <a href="login.php">Home  | </a>
                    <a href="login.php">login  | </a>
                    <a href="login.php">Registration     | </a>
                </td>
                </td>
            </tr>
            <tr width="70%" height="300px">
                <td colspan="3">
            </tr>
        </table>
		<center>
    <fieldset>
        <legend><b>LOGIN</b></legend>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <table>
                <tr>
                    <td>User Name</td>
    				<td>:</td>
                    <td><input name="name" type="text" placeholder="Enter name"></td>
                </tr>
                <tr>
                    <td>Password</td>
    				<td>:</td>
                    <td><input name="password" type="password" placeholder="Enter your password"></td>
                </tr>
            </table>
            <hr />
    		<input name="remember" type="checkbox">Remember Me
    		<br/><br/>
            <input type="submit" value="Submit">        
    		<a href="forgot_password.php">Forgot Password?</a>
        </form>
    </fieldset>
</body>
</html>