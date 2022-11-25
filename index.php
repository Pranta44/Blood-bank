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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <style media="screen">
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    /* background-color: #EA9684; */
    font-family: Arial, Helvetica, sans-serif;
    background: #d5e1ef;

}

main {
    width: 340px;
    overflow: hidden;
    background-color: #fdfcfc;
    font-size: 16px;
    line-height: 22px;
    color: #000;
    border-radius: 7px;
    box-shadow: -4px -4px 20px rgba(0, 0, 0, 0.505);
    margin: 50px auto;

}

.top-card {
    width: 100%;
    /* height: 200px; */
}

.top-card img {
  width: 60%;
  margin-left: 20%;
    position: relative;
    overflow: hidden;
    border-radius: 50%;
}

.top-card .menu-icon {
    position: relative;

    bottom: 13.7em;
    font-size: 17px;
    cursor: pointer;
}



.top-card .menu-icon .item1 {
    margin-left: 10px;
    margin-top: 15px;
    color: red;
}

.top-card .menu-icon .item2 {
   float: right;
   margin-right: 20px;
   margin-top: -10px;
   color: blue;

}

 

h1 {
    font-size: 22px;
    color: #000;
    font-weight: 600;
    margin: 12px 0;
    text-align: center;

}
h3 {
    font-size: 22px;
    color: #000;
    font-weight: 600;
    margin: 12px 0;
    text-align: center;

}
h2 {
    font-size: 22px;
    color: #000;
    font-weight: 600;
    margin: 12px 0;
    text-align: center;

}



.middle-card, footer {
    margin: 5px 25px;
}

.middle-card {
    text-align: justify;
}

footer {
    text-align: center;

}

footer .social-icon {
    /* padding: 7%; */
    font-size: 20px;
    margin: 0 5%;
    color: rgba(0, 0, 0, .9);
}

.facebook:hover {color:#3b5999;}
.twitter:hover {color: #55acee;}
.google:hover {color: #dd4b39;}
.github:hover {color: #302f2f;}
.linkedin:hover {color: #0077B5;}

footer .links {
    border-top: 2px solid rgba(0, 0, 0, .1);
    text-align: center;
    margin-top: 10px;
    padding: 8px 0;

}




button{
  width: 110px;
  height: 37px;
  margin-top: 10px;
  border-radius: 2px;
  background: #1990cc;
  font-size: 15px;
  border: none;
  color: white;
}
button:last-child{
  margin-left: 40px;
  border: 2px solid #1990cc;
  background: white;
  color: black;
}

a{
  margin-left: 20%;
}
  </style>
</head>



<body>

    
    
      
                <?php
   
   
   
        
		

   $email= $_SESSION['email'];
   
   $result = mysqli_query($con, "SELECT * FROM userinfo WHERE email = '$email'");

   $row = mysqli_fetch_assoc($result);

   $idd = $row['id'];

   $result1 = mysqli_query($con, "SELECT * FROM donar WHERE user_id=$idd");
   $row1 = mysqli_fetch_assoc($result1);
 ?>
    <main>
    <section class="top-card">
      <img src="upload/<?= $row['image']; ?>" alt="user picture">
      <div class="menu-icon">
        <div class="menu item1"><i class="fas fa-heart"></i></div>
        <div class="menu item2"><i class="fas fa-bars"></i></div>
      </div>

    </section>

    <section class="middle-card">
    <p> <h1> Hi  <?php echo $row['name']; ?>           <?php echo $row['lname']; ?></h1>  .This is your Registration information</p>
      <h3>Your Id         <?php echo $row['id']; ?></h3>
      
      <h2><?php echo $row['email']; ?></h2>
      <h2> Registration Date:<?php echo $row['date']; ?></h2>
      <a href="update.php?id=<?php echo $row['id']; ?>" ><button type="submit" name="edit">Edit</button></a>
      <a href="home.php" ><button type="submit" name="edit">Home</button></a>
      

           
     
    </section>

    

      
      </section>
    </footer>
  </main>
</body>
</body>
</html>