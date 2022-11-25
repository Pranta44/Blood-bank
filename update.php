<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);

body { background:rgb(30,30,40); }
form { max-width:420px; margin:50px auto; }

.feedback-input {
  color:white;
  font-family: Helvetica, Arial, sans-serif;
  font-weight:500;
  font-size: 18px;
  border-radius: 5px;
  line-height: 22px;
  background-color: transparent;
  border:2px solid #CC6666;
  transition: all 0.3s;
  padding: 13px;
  margin-bottom: 15px;
  width:100%;
  box-sizing: border-box;
  outline:0;
}

.feedback-input:focus { border:2px solid #CC4949; }

textarea {
  height: 150px;
  line-height: 150%;
  resize:vertical;
}

[type="submit"] {
  font-family: 'Montserrat', Arial, Helvetica, sans-serif;
  width: 100%;
  background:#CC6666;
  border-radius:5px;
  border:0;
  cursor:pointer;
  color:white;
  font-size:24px;
  padding-top:10px;
  padding-bottom:10px;
  transition: all 0.3s;
  margin-top:-4px;
  font-weight:700;
}
[type="submit"]:hover { background:#CC4949; }
    </style>
</head>
<body>
<body>
<div class="con">
<form action="" enctype="multipart/form-data" method="POST">
<?php
  $server= "localhost";
  $username= "root";
  $password= "" ;
  $dbname= "project";
  $conn = mysqli_connect($server , $username , $password , $dbname) ;
  if(isset($_GET['id'])){
    
    $id = isset($_GET['id']) ? $_GET['id'] : '';
    
    $sql = "SELECT * FROM `userinfo` WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result-> fetch_array();
   }

  if(isset($_POST['submit'])){
      
  
         
          $name= $_POST['name'] ;
          $lname= $_POST['lname'] ;
          $email= $_POST['email'] ;
          $image=$_FILES['file'];
          $imagename='car-'.time().'-'.rand(100000,10000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
          
          
          $query="update userinfo set name='$name',lname='$lname',email='$email', image= '$imagename' where id=$id";
  
          $run=mysqli_query($conn,$query) or die(mysqli_error($conn));
          if($run){

             
          move_uploaded_file($image['tmp_name'],'upload/'.$imagename);
          header("location:index.php");
          
          }
          else{
              echo "not successfull";
          }
      }
      
          
     
  

?>



<label>First Name</label> <input type="text" name="name" class="feedback-input" value="<?php echo $row['name']; ?>"><br>

<label>Lastname</label> <input type="text" name="lname" class="feedback-input" value="<?php echo $row['lname']; ?>"><br>
<label>Email</label> <input type="text" name="email" class="feedback-input"  value="<?php echo $row['email']; ?>"><br>

<label>Add Your Photo</label> <input type="file" name="file" class="feedback-input" ><br>

<button type="submit" name="submit">Update </button>

</form>
</div>
</body>
</html>