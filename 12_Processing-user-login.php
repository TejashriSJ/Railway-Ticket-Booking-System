
<?php
session_start();
//after user loged in
//conection to database
$conn  = mysqli_connect("127.0.0.1:3307","root","");
mysqli_select_db($conn,"railways");

if(isset($_POST["Login"]))
{
    $username=$_POST["user"];
    $password=$_POST["pass"];
    $query=" SELECT * FROM users where name = '$username' and password='$password'";
    $result=mysqli_query($conn,$query)  or die("fail to query database");
    $row= mysqli_fetch_array($result);
    $_SESSION['loged_in_user_name'] = $username ;

    if($row['name']==$username and $row['password']==$password)
    {   $_SESSION['loged_in_user_id']=$row['user_id'];
        
        ?><html>
        <script>alert("Loggin sucessfull")</script>
       
        <a href="User-Book_ticket_1.php">Book_ticket</a>
        <a href="User-boking_status.php">boking_status</a>
        <a href="User-my_account.php">my_account</a>
        <a href="User-change_password.php">change_password</a>
        <a href="Home.html">Log-out</a>
    </html><?php
       
    }
    else
    {
        ?><html>
        <script>alert("Failed to login check your username and password")</script>
    </html><?php
        echo "Failed to login check your username and password";
       
    }
}
?>


