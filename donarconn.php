<?php session_start();


    $con = mysqli_connect('localhost','root','','project');
    ?>
<?php
$server= "localhost";
$username= "root";
$password= "" ;
$dbname= "project";
$conn = mysqli_connect($server , $username , $password , $dbname) ;

   
   
   
        
		

   $email= $_SESSION['email'];
   
   $result = mysqli_query($conn, "SELECT * FROM userinfo WHERE email = '$email'");

   
if(isset($_POST['submit'])){
    

    
    

    
    
    $id=$_POST['id'];
    $mobile= $_POST['mobile'] ;
    $address= $_POST['address'] ;
    $age= $_POST['age'] ;
    $height= $_POST['height'] ;
    $inch= $_POST['inch'] ;
    $feet= $height * '0.305';
    $inchcm= $inch * '0.0254' ;
    $multi=$feet + $inchcm;
    $weight= $_POST['weight'] ;
    $bloodgroup= $_POST['bloodgroup'] ;
    $ldonate= $_POST['ldonate'] ;
    $bmi=$weight / ($multi*$multi);
    
   // $email=$_POST['email'];
    
   
    
    
        
    $query="insert into donar(`user_id`, `mobile`, `address`, `age`, `height`, `inch`, `feet`, `inchcm`, `multi`, `weight`, `bloodgroup`, `ldonate`, `bmi`) 
    values( '$id', '$mobile' , '$address', '$age' , '$height' , '$inch' , '$feet' , '$inchcm', '$multi', '$weight', '$bloodgroup', '$ldonate', '$bmi')";
   
        $run=mysqli_query($conn,$query) or die(mysqli_error($conn));
        if($run){
            header("location:donartab.php");
          
        
        }
        else{
            echo "not successfull";
        }
    }
    
    else{
        echo "all required";
    }
    



?>