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
     #myInput {
  background-color:white;
  background-image: url('/css/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 30%; /* Full-width */
  font-size: 20px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
  color:black;
}
.btn.patreon {
	background-color: rgb(232, 91, 70);
  justify-content: right;
}
h1{
  text-align:center;
  text-shadow:2px 2px 5px red;
}
button{
    background-color:gray;
  }  
 .divc button{
    background-color:#fff;
  } 
  .divc{
    text-align:right;
  }
  .divc{
    text-align:right;
  }
   

   body{
      
    text-align:center;
      background-color:wheat;
      
      
    }
    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
td {
  border: 1px solid white;
  text-align: left;
  padding: 8px;
  padding: .7rem;
      font-size:.7rem;
}
th {
  border: 1px solid #dddddd;
  text-align: left;
  background-color:#53c9c1;
  padding: 8px;
  font-size:12px;
  
  padding: .7rem;
      font-size:.7rem;
}

    
    td:nth-child(even) {
  background-color: #dddddd;
}
    @media screen and (max-width: 600px){
      #myInput {
  background-color:white;
  background-image: url('/css/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 20%; /* Full-width */
  font-size: 10px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
  color:black;
}
      thead{
        display:none;
      }
      td{
        display:block;
      }
      td:first-child{
        
        background-color:black;
        color:blue;
        text-align:center;
      }
      td:nth-child(2)::before{
        content:"Main Buyer:";
      }
      td:nth-child(3)::before{
        content:"Customer Name:";
      }
      td:nth-child(4)::before{
        content:"Ref Order No:";
      }
      td:nth-child(5)::before{
        content:"Product Item Code:";
      }
      td:nth-child(6)::before{
        content:"Product Type:";
      }
      td:nth-child(7)::before{
        content:"Item Type:";
      }
      
      td:nth-child(8)::before{
        content:"Colour:";
      }
      
      td:nth-child(9)::before{
        content:"Order QTY:";
      }
      td:nth-child(10)::before{
        content:"Unit:";
      }
      td:nth-child(11)::before{
        content:"Size:";
      }
      td:nth-child(12)::before{
        content:"Price:";
      }
      td:nth-child(13)::before{
        content:"Production Discription:";
      }
      td:nth-child(14)::before{
        content:"Production Start Time:";
      }
      td:nth-child(15)::before{
        content:"Production Finish Time:";
      }
      td:nth-child(16)::before{
        content:"Production QTY:";
      }
      td:nth-child(17)::before{
        content:"Remarks:";
      }
      
      td:nth-child(18)::before{
        content:"Action:";
      }
      td{
        text-align:right;
      }
      td::before{
        float:left;
        margin-right:3rem;
        font-weight:bold;
      }
      
      
    }
    </style>
</head>
<body>

<div>

<table id="myTable">
<h1>Admin Table</h1>
<div>
    <form method="POST">
<input type="searchbar" id="myInput" placeholder="Search By Blood Group.."  name="search"><br><br>
</form>
</div>

<thead>
<tr id="header">
<th>Id</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>

<th>Mobile</th>
<th>Address</th>
<th>Age</th>
<th>Height</th>
<th>Weight</th>
<th>Blood Group</th>
<th>Last Donate</th>
<th>BMI</th>
<th>BMI Catagory</th>

<th>Profile Picture</th>
<th>Delete</th>




</tr>
</thead>
<?php
$conn=mysqli_connect("localhost", "root", "", "project");
$sea=NULL;
if(isset($_POST['search'])){
    $sea= $_POST['search'];
    
    
    }
if($conn->connect_error){
    die("Connection Failed:". $conn->connect_error);
}
$sql = "SELECT id,name,lname,email,mobile,address,age,height,weight,bloodgroup,ldonate,image,bmi from userinfo INNER JOIN donar ON userinfo.id = donar.user_id order by id desc ";
$result = $conn-> query($sql);

    while ($row = $result-> fetch_assoc()){
        if($sea == NULL){
        ?>
            <tbody>
             <tr>
             <td><?php echo $row['id']; ?></td>
             <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['lname']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            
            
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td><?php echo $row['height']; ?></td>
            <td><?php echo $row['weight']; ?></td>
            <td><?php echo $row['bloodgroup']; ?></td>
            <td><?php echo $row['ldonate']; ?></td>
            <td><?php echo $row['bmi']; ?></td>
            <td><?php if ($row['bmi'] <18.5) echo "Underweight";
                else if($row['bmi'] >25) echo "Overweight";
                else echo"Available";
            ?></td>
            
            <td> <img src="upload/<?= $row['image']; ?>" alt="user picture" height="100" width="100"></td>
            <td><a href="delete1.php?id=<?php echo $row['id']; ?>"><button type="submit" name="edit">Delete</button></a></td>
            
            
            </tr>
            </tbody>
            </div>
    
    <?php
        }
        else if($sea == $row['bloodgroup']){
            ?>
            <tbody>
             <tr>
             <td><?php echo $row['id']; ?></td>
             <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['lname']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            
            
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td><?php echo $row['height']; ?></td>
            <td><?php echo $row['weight']; ?></td>
            <td><?php echo $row['bloodgroup']; ?></td>
            <td><?php echo $row['ldonate']; ?></td>
            <td><?php echo $row['bmi']; ?></td>
            <td><?php if ($row['bmi'] <18.5) echo "Underweight";
                else if($row['bmi'] >25) echo "Overweight";
                else echo"Available";
            ?></td>
            
            <td> <img src="upload/<?= $row['image']; ?>" alt="user picture" height="100" width="100"></td>
            <td><a href="delete1.php?id=<?php echo $row['id']; ?>"><button type="submit" name="delete">Delete</button></a></td>
            
            
            </tr>
            </tbody>
            </div>
    
    <?php
        }
    }
   
?>
</table>
<a href="logout.php"  class="btn patreon">
		<i class="fab fa-patreon"></i> Logout <br>
	</a>
</body>
</html>