<?php
//after user loged in
//conection to database
$conn  = mysqli_connect("localhost","root","bhoomika02");
mysqli_select_db($conn,"railways");


    $query=" SELECT * FROM users ";
    $result=mysqli_query($conn,$query)  or die("fail to query database");
    $row= mysqli_fetch_array($result);
    
 
   do{
    $name = $row["name"];
    $id = $row["user_id"];
    $email = $row["email"];
    $phone_no = $row["mobile_no"];
    $gender = $row["gender"];
    echo $id."-".$name."--".$email."--".$gender."<br>";
   }while($row = $result->fetch_assoc());
        
        
    
   

