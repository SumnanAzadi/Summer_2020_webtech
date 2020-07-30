<?php
session_start();
if(isset($_POST['submit'])){
    $name =htmlentities($_POST['name']);
    $password =md5($_POST['password']);
    if(empty($name) || empty($password) ){
        echo "null submission found!";
    }else{
        setcookie('name',$name, time()+3600);
        setcookie('password',$password, time()+3600);
        header('Location: edit_profile.php');
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
    		<a href="forgot_password.html">Forgot Password?</a>
        </form>
    </fieldset>
</body>
</html>