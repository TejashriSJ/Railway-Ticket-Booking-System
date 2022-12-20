<?php
session_start();
$user_name= $_SESSION['loged_in_user_name'];
$user_id =$_SESSION['logged_in_user_id'];
//after user loged in
//conection to database
$conn  = mysqli_connect("localhost","root","bhoomika02");
mysqli_select_db($conn,"railways");

    $query=" SELECT * FROM users where name = '$user_name'";
    $result=mysqli_query($conn,$query)  or die("fail to query database");
    $row= mysqli_fetch_array($result);
    echo $row['user_id']."<br>".$row['name']."<br>".$row['password']."<br>".$row['gender']."<br>". $row['age']."<br>". $row['email']."<br>". $row['aadhar_no']."<br>". $row['mobile_no']."<br>". $row['city']
    ."<br>". $row['state']."<br>". $row['pincode'];
    
 
  ?>
        
        
    
   

