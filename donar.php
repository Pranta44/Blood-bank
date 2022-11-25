<?php session_start();


    $con = mysqli_connect('localhost','root','','project');
    ?>
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
        
        background-color: pink;
          background-position:center;
          background-size:cover;
          font-family:sans-serif;
          margin-top:40;
          height: 50%;
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
<?php
   
   
   
        
		

   $email= $_SESSION['email'];
   
   $result = mysqli_query($con, "SELECT * FROM userinfo WHERE email = '$email'");

   $row = mysqli_fetch_assoc($result);
 ?>


    <div class="regform"><h1>Want to donate blood? Please Register here</h1></div>
    
    <div class="mane">
    <img src="./img/p.png"  style="width:30%">
    

    <form action="donarconn.php" method="POST">
    <div id="kk">
        <div>
    <h2 class="name" >User Id</h2>
    <input class="id" type="text" name="id" value="<?php echo $row['id']; ?>" > </div>
    </div>
    
    <h2 class="name" >Email</h2>
    <input class="email" type="text" name="email" value="<?php echo $row['email']; ?>" > 
    
    <h2 class="name">Mobile No</h2>
    <input class="mobile" type="text" name="mobile" required>
    <h2 class="name">Address</h2>
    <input class="address" type="text" name="address" required>
    <h2 class="name">Age</h2>
    <input class="age" type="text" name="age" required>
    <h2 class="name">Height </h2>
   <label > <input class="height" type="text" name="height" placeholder="feet" required>
   <input class="height" type="text" name="inch" placeholder="inch" required>

</label>
    
    <h2 class="name">Weight</h2>
    <input class="weight" type="text" name="weight" required>
    <h2 class="name">Blood Group</h2>
    <select name="bloodgroup" class="option" >
    <option disabled="disabled " selected="selected" name="bloodgroup">Choose Option</option>
    <option >A+</option>
    <option >A-</option>
    <option >B+</option>
    <option >B-</option>
    <option >AB+</option>
    <option >AB-</option>
    <option >O+</option>
    <option >O-</option>
    </select>
    <h2 class="name">Last Donate</h2>
    <input class="ldonate" type="date" name="ldonate" required>
    <button type="submit" name="submit">Submit</button>
    
    </form>
    
    </div>
</body>
</html>