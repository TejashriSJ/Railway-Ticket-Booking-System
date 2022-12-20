<?php
session_start();
$conn  = mysqli_connect("localhost","root","bhoomika02");
mysqli_select_db($conn,"railways");

$count=$_SESSION['passenger'];
$_SESSION['seat_no']=45;
$_SESSION['ticket_id']=7;//make it auto increment in database
$status="payment_pending";

$query_t ="INSERT INTO `ticket`(`id`,`user_id`, `train_no`, `status`) VALUES ('".$_SESSION['ticket_id']."','".$_SESSION['loged_in_user_id']."','".$_SESSION['train_no']."','$status')";
while($count--)
{   $html= '<form action="" method="post">';
    $html .=' <p>
    <label>name:</label>
    <input type="text" name="name">
    <label>gender:</label>
    <input type="radio" name="gender" value="male">male</input>
    <input type="radio" name="gender" value="female">female</input>
    <label>age:</label>
    <input type="number" name="age" value="age">
    <input type="submit" value="ok"></form>
</p><br>';
echo $html;
$result = mysqli_query($conn,$query_t)  or die("fail to query database."); 
$query_t_id="SELECT * from ticket where user_id='".$_SESSION['loged_in_user_id']."' " ;
$result_2 = mysqli_query($conn,$query_t_id)  or die("fail to query database..");
$row=mysqli_fetch_array($result_2);
echo $_POST['name'];
//$query_passenger='INSERT INTO `passenger`(`name`, `gender`, `age`, `seat_no`, `reservation_status`, `user_id`, `ticket_id`) 
//VALUES ('$_POST['name']','$_POST['gender']','$_POST['age']','$_SESSION['seat_no']','$row['status']','$_SESSION['logged_in_user_id']','$row['ticket_id']')'  
$result_3 = mysqli_query($conn,$query_passenger)  or die("fail to query database...");

$_SESSION['seat_no']++;
$_SESSION['ticket_id']++;
}
$html .='<a href="User-payment_page.php">make payment</a>';
echo $html;

?>















        
    