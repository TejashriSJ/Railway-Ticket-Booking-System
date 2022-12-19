<?php
//after user loged in
//conection to database
$conn  = mysqli_connect("127.0.0.1:3307","root","");
mysqli_select_db($conn,"railways");

if(isset($_POST["aLogin"]))
{
    $username=$_POST["auser"];
    $password=$_POST["apass"];
    $query=" SELECT * FROM admin where name = '$username' and password='$password'";
    $result=mysqli_query($conn,$query)  or die("fail to query database");
    $row= mysqli_fetch_array($result);
  
    if($row['name']==$username and $row['password']==$password)
    {?><html>
        <script>alert("Loggin sucessfull")</script>
        <a href="Home.html">Home</a>
        <a href="Admin-add_train.html">add_train</a>
        <a href="Admin-user_details.php">user_details</a>
        <a href="Admin-booking_details.php">booking_details</a>
        <a href="Admin-train_details.php">trains_details</a>
    </html><?php
        echo "<b>login successful welcome </b>"."<b>".$row['name']."!!!</b>";
    }
    else
    {
        ?><html>
        <script>alert("Failed to login check your username and password")</script>
    </html><?php
        echo "Failed to login check your username and password";
       
    }
} ?>

