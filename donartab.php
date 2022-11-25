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
    margin-top:100px; 
    
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
    <h1> You Can Edit Your Information</h1>

<table id="myTable">



<?php
   
   
   
        
   $con = mysqli_connect('localhost','root','','project');
  
   $email= $_SESSION['email'];
   
   $result = mysqli_query($con, "SELECT * FROM userinfo WHERE email = '$email'");

   $row = mysqli_fetch_assoc($result);

   $idd = $row['id'];
  

   $result1 = mysqli_query($con, "SELECT * FROM donar WHERE user_id=$idd");
   
   $row1 = mysqli_fetch_assoc($result1);
  
   
 ?>
 <tbody>
             <tr>
             
            
           <tr> <th>Mobile</th>
               <td><?php echo $row1['mobile']; ?></td></tr>
            
            
            <tr>
                <th>Address :</th>
                <td><?php echo $row1['address']; ?></td></tr>
                
            <tr><th>Age</th>
                <td><?php echo $row1['age']; ?></td></tr>
            <tr><th>Height Feet</th>
                <td><?php echo $row1['height']; ?></td></tr>
                <tr><th>Height Inch </th>
                <td><?php echo $row1['inch']; ?></td></tr>
                
                
            <tr><th>Weight</th>
            
                <td><?php echo $row1['weight']; ?></td></tr>
            <tr> <th>Blood Group</th>
                <td><?php echo $row1['bloodgroup']; ?></td></tr>
            <tr><th>Last Donate</th>
                <td><?php echo $row1['ldonate']; ?></td></tr>
            <tr><th>BMI</th>
                <td><?php echo $row1['bmi']; ?></td></tr>
            <tr><th>BMI Catagory </th>
                <td><?php if ($row1['bmi'] <18.5) echo "Underweight";
                else if($row1['bmi'] >25) echo "Overweight";
                else echo"Available";
            ?></td></tr>
           <tr> <th >Action</th>
               <td colspan="2"><a href="update1.php?id=<?php echo $row1['user_id']; ?>"><button type="submit" name="edit">Edit</button></a></td>
               <a href="home.php" ><button type="submit" name="edit">Home</button></a>
              </tr>
            
            
            
            
            </tr>
            </tbody>
            </div>
 
</table>

</body>
</html>