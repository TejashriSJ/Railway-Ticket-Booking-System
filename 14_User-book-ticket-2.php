<?php
session_start();
$conn  = mysqli_connect("localhost","root","bhoomika02");
mysqli_select_db($conn,"railways");

$source=$_POST['source'];
$dest=$_POST['destination'];
$date=$_POST['date'];
$_SESSION['passenger']=$_POST['passengers'];

$query="SELECT * FROM train WHERE sourse = '$source' and destination='$dest'and date='$date'";
$result = mysqli_query($conn,$query)  or die("fail to query database");
$row= mysqli_fetch_array($result);
if($_POST['type']=='ac')
$prise=$_POST['passengers']*$row['fare_ac'];
elseif($_POST['type']=='sl')
$prise=$_POST['passengers']*$row['fare_sl'];
else
$prise=$_POST['passengers']*$row['fare_gen'];
$_SESSION['PRISE']=$prise;
if($row['sourse']==$source and $row['destination']==$dest and $row['date']==$date)
{
    $html ='<form >';
    $html .=' Train:'.$row['train_name'].'<br>
     Arraival Time:'.$row['arraival_time'].'<br> Departure Time:'.$row['departure_time'].'<br> Prise:'.$prise.'
     <br><a href="User-Book_ticket_3.php">make payment</a></form>';
     echo $html;
     $_SESSION['train_no']=$row['train_no'];
     echo $_SESSION['train_no'];
     echo $_SESSION['loged_in_user_id'];
}
else
{
    echo "train not availlable";
    $html ='<form action ="User-Book_ticket_1.php" method="post">
    <input type="submit" name="back" value="back"></form>';
    echo $html;
}

?>





