<?php
$conn = mysqli_connect("localhost","root","bhoomika02");
mysqli_select_db($conn,"railways");

if(isset($_POST["Login"]))
{
    $username=$_POST["user"];
    $password=$_POST["pass"];
    $query=" SELECT * FROM customer where username = '$username' and password='$password'";
    $result=mysqli_query($conn,$query)  or die("fail to query database");
    $row= mysqli_fetch_array($result);
    if($row['username']==$username and $row['password']==$password)
    {
        echo "<b>login successful welcome </b>"."<b>".$row['username']."!!!</b>";
    }
    else
    {
        echo "Failed to login check your username and password";
        ?><html>
         <a href="index_work.php"><i>HOME PAGE</i></a>
        </html><?php
    }
}
if(isset($_POST["aLogin"]))
{
    $username=$_POST["auser"];
    $password=$_POST["apass"];
    $query=" SELECT * FROM adminlogin where username = '$username' and password='$password'";
    $result=mysqli_query($conn,$query)  or die("fail to query database");
    $row= mysqli_fetch_array($result);
    if($row['username']==$username and $row['password']==$password)
    {
        echo "<b>login successful  </b>";
    }
    else
    {
        echo "Failed to login check your username and password";
        ?><html>
         <a href="index_work.php"><i>HOME PAGE</i></a>
        </html><?php
    }
}
if(isset($_POST["submit"]))
{
    $username=$_POST["ruser"];
    $password=$_POST["rpass"];
    $repassword=$_POST["rrepass"];
    if($password==$repassword)
    {
        $query ="INSERT INTO `customer`( `username`, `password`) VALUES ('$username','$password')";
        mysqli_query($conn,$query );
        echo "Registered Successful!! you can login now.";
        ?><html>
         <a href="index_work.php"><i>HOME PAGE</i></a>
        </html><?php
    }
    else
    {
    echo "Password did't match try again";?><html>
         <a href="register_work.html"><i>REGISTRATION PAGE</i></a>
         </html><?php
    }

}
?>