
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      *{
          margin:0;
          padding:0;
      }
      img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
      body{
        
        
          background-position:center;
          background-size:cover;
          font-family:sans-serif;
          margin-top:40;
      }
      .regform{
          width:800px;
          background-color:rgb(0,0,0,6);
          margin:auto;
          color:#FFFFFF;
          padding:10px 0px 10px 0px;
          text-align:center;
          border-radius:15px 15px 0px 0px;
      }
    .mane{
        background-color:rgb(0,0,0,0.5);
        width:800px;
        margin:auto;
    }
    form{
       padding:00px;
    }
    #kk{
        width:20%;
        height:100px;
    }
    .name{
        margin-left:25px;
        margin-top:30px;
        width:125px;
        color:black;
        font-size:18px;
        font-weight:700;
    }
  
    
    
  .email, .address, .id, .mobile, .age, .height, .weight, .ldonate{
        position:relative;
        left:200px;
        top:-37px;
        line-height:40px;
        width:532px;
        border-radius:6px;
        padding:0 22px;
        font-size:16px;
      

    }
    .option{
        position:relative;
        left:200px;
        top:-37px;
        line-height:40px;
        width:532px;
        height:40px;
        border-radius:6px;
        padding:0 22px;
        font-size:16px;
        color:#555;
        outline:none;
        overflow:hidden;
    }
    button{
        background-color:#00002e;
        display:block;
        margin:20px 0px 0px 20px;
        text-align:center;
        border-radius:12px;
        border:2px solid #366473;
        padding:14px 110px;
        outline:none;
        color:white;
        cursor:pointer;
        transition:0.25px;
        
    }
    button:hover{
        background-color:#5390F5;
    }
    </style>
</head>
<body>



    
    
    
    
    

    <form action="" method="POST">
    <?php
  $server= "localhost";
  $username= "root";
  $password= "" ;
  $dbname= "project";
  $conn = mysqli_connect($server , $username , $password , $dbname) ;
  if(isset($_GET['id'])){
      
    
    $id = isset($_GET['id']) ? $_GET['id'] : '';
    
    
    $sql = "SELECT * FROM `donar` WHERE user_id= $id ";
    $result = $conn->query($sql);

    $row1 = $result-> fetch_array();
   }

  if(isset($_POST['submit'])){
      
  
         
    
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
          
          
          $query="update donar set mobile='$mobile', address='$address', age='$age', height= '$height', inch= '$inch', multi= '$multi', weight= '$weight', ldonate= '$ldonate', bmi= '$bmi' where user_id=$id";
  
          $run=mysqli_query($conn,$query) or die(mysqli_error($conn));
          if($run){

             
          
          header("location:donartab.php");
          
          }
          else{
              echo "not successfull";
          }
      }
      
          
     
  

?>
    
    
    
    
    <div class="mane">
    <img src="./img/p.png"  style="width:30%">
    

    <form action="" method="POST">
    
    
    <h2 class="name">Mobile No</h2>
    <input class="mobile" type="text" name="mobile" value="<?php echo $row1['mobile']; ?>" >
    <h2 class="name">Address</h2>
    <input class="address" type="text" name="address" value="<?php echo $row1['address']; ?>" >
    <h2 class="name">Age</h2>
    <input class="age" type="text" name="age" value="<?php echo $row1['age']; ?>" >
    <h2 class="name">Height </h2>
   <label > <input class="height" type="text" name="height" placeholder="feet" value="<?php echo $row1['height']; ?>" >
   <input class="height" type="text" name="inch" placeholder="inch" value="<?php echo $row1['inch']; ?>" >

</label>
    
    <h2 class="name">Weight</h2>
    <input class="weight" type="text" name="weight" value="<?php echo $row1['weight']; ?>" >
    
    
    <h2 class="name">Last Donate</h2>
    <input class="ldonate" type="date" name="ldonate" value="<?php echo $row1['ldonate']; ?>" >
    <button type="submit" name="submit">Submit</button>
    
    </form>
    
    </div>
</body>
</html>