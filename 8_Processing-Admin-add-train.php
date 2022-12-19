<?php
//after user loged in
//conection to database
$conn  = mysqli_connect("127.0.0.1:3307","root","");
mysqli_select_db($conn,"railways");

if(isset($_POST["add_train"]))
{
    $Train_no=$_POST["Train_no"];
    $Train_name=$_POST["Train_name"];

    $Source=$_POST["Source"];
    $Destination=$_POST["Destination"];
    $Arrival_time=$_POST["Arrival_time"];
    $Departure_time=$_POST["Departure_time"];
    $Availibility_of_seats=$_POST["Availibility-of_seats"];
    $AC_seats=$_POST["AC_seats"];
    $AC_fare=$_POST["AC_fare"];
    $SL_seats=$_POST["SL_seats"];
    $SL_fare=$_POST["SL_fare"];
    $General_seats=$_POST["General_seats"];
    $General_fare=$_POST["General_fare"];
    $date=$_POST["date"];
$query ="INSERT INTO `train` (`train_no`, `train_name`, `sourse`, `destination`, `arraival_time`, `departure_time`, `availability_seats`, `ac`, `sl`, `gen`, `fare_ac`, `fare_sl`, `fare_gn`, `date`)
 VALUES ('$Train_no', ' $Train_name', '$Source', ' $Destination', ' $Arrival_time', '$Departure_time', '$Availibility_of_seats', '$AC_seats', ' $SL_seats', '$General_seats', '$AC_fare', '$SL_fare', '$General_fare', '$date')";
      mysqli_query($conn,$query);
      
    }
?>
