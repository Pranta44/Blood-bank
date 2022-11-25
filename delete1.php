<?php
  $server= "localhost";
  $username= "root";
  $password= "" ;
  $dbname= "project";
  $conn = mysqli_connect($server , $username , $password , $dbname) ;
  
  $id = $_GET['id'];
  
  $dquery="DELETE FROM `userinfo` WHERE id=$id";
  $ss= "DELETE FROM `donar` WHERE user_id=$id";

  
  $runn=mysqli_query($conn,$dquery) or die(mysqli_error($conn));
  $run=mysqli_query($conn,$ss) or die(mysqli_error($conn));
  if($runn){
            if($run){
                   header("location:admin.php");
            }
  }
  else{
      echo "not succesfull";
  }

?>