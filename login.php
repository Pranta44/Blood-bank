<?php session_start();
define('EMAIL', 'Admin@gmail.com');
define('PASSWORD', '12345678');

if(isset($_SESSION['email']) || isset($_COOKIE['email']) ){
	if(($_SESSION['email'] == EMAIL) || ($_COOKIE['email'] == PASSWORD))
	{
		header("Location: admin.php");

	}
	else
	{
		header("Location: home.php");
	}
}

    $con = mysqli_connect('localhost','root','','project');

    
    
    if(isset($_POST['login'])){
        
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $keep = isset($_POST['keep']) ? $_POST['keep'] : NULL;
        if($email == EMAIL && $password == PASSWORD)
		{
			
			
			if(isset($keep))
			{					
				setcookie('email', $email, time()+60*60);	
               
			}
			header("Location: admin.php");

		}
       
        $check_email = "SELECT * FROM userinfo WHERE email = '$email'";
        $res = mysqli_query($con, $check_email);
        
        if(mysqli_num_rows($res) > 0){
            
            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['password'];
            
           
                 
                $_SESSION['email'] = $email;
                $status = $fetch['status'];
                if($status == 'verified'){
                  $_SESSION['email'] = $email;
                  $_SESSION['password'] = $password;

                  if(isset($keep))
			{					
				setcookie('email', $email, time()+60*60);	
               // echo $_COOKIE['user_login'];
               // echo "Hello";
			}
                    header('location: home.php');
                
            
            
         
    }
}
    else{
        echo '<script type="text/javascript">alert("Incorrect email or password or you havenot register yet")</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="login.php" method="POST" autocomplete="">
                    <h2 class="text-center">Login Form</h2>
                    <p class="text-center">Login with your email and password.</p>
                    
                    
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required >
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Login">
                    </div>
                    <input type="checkbox" name="keep" value="keep">
                    <span><p style="color: black;">Remember me?</p></span>
                    <div class="link login-link text-center">Not yet a member? <a href="signup.php">Signup now</a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
