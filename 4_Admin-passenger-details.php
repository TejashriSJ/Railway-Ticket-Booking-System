<?php
//after user loged in
//conection to database
$conn  = mysqli_connect("localhost","root","bhoomika02");
mysqli_select_db($conn,"railways");


    $query=" SELECT * FROM passenger";
    $result=mysqli_query($conn,$query)  or die("fail to query database");
    $row= mysqli_fetch_array($result);
    
 
   do{
    $name = $row["name"];
    $id = $row["passenger_id"];
    $r_status = $row["reservation_status"];
    $seat_no = $row["seat_no"];
    $gender = $row["gender"];
    $age=$row["age"];
    echo $id."  ".$name."   ".$gender."  ". $age."  ".$seat_no."   ".$r_status."<br>";
    
   }while($row = $result->fetch_assoc());
        
        
    
   

