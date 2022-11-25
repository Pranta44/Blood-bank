<?php


$con = mysqli_connect('localhost','root','','project');
if(isset($_POST['signup'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    $files=$_FILES['file'];
    
    
    
    if($password == $cpassword){
        $email_check = "SELECT * FROM userinfo WHERE email = '$email'";
        $res = mysqli_query($con, $email_check);
        if(mysqli_num_rows($res) > 0){
            //$errors['email'] = "Email that you have entered is already exist!";
            echo '<script type="text/javascript">alert("Email you entered already exixts")</script>';
        }
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $image=$_FILES['file'];
        $imagename='car-'.time().'-'.rand(100000,10000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
        
        
            
            $insert_data = "INSERT INTO userinfo (name, lname, email, password, image)
                        values('$name', '$lname', '$email',  '$encpass', '$imagename')";
        $data_check = mysqli_query($con, $insert_data);
        if($data_check){
            move_uploaded_file($image['tmp_name'],'upload/'.$imagename);
            
               header('location: login.php');
                
        }else{
            echo '<script type="text/javascript">alert("Try again")</script>';
        }
    }

        

        
    else{
        echo '<script type="text/javascript">alert("Password did not match")</script>';
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="signup.php" method="POST" autocomplete="" enctype="multipart/form-data">
                    <h2 class="text-center">Signup Form</h2>
                    <p class="text-center">It's quick and easy.</p>
                   
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="First Name" required >
                        <input class="form-control" type="text" name="lname" placeholder="Last Name" required >
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required >
                    </div>
                    
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirm password" required>
                    </div>
                    <div class="form-group">
                        <label > Add Your Image
                        <input class="form-control" type="file" name="file" ></label>
                    </div>
                    
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="signup" value="Signup">
                    </div>
                    <div class="link login-link text-center">Already a member? <a href="login.php">Login here</a></div>
                </form>
            </div>
        </div>
    </div>
    

</body>
</html>