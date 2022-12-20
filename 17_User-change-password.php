<!DOCTYPE html>
<html>

<head>
    <title>Regischange_passwordter</title>
    <link rel="stylesheet" type="text/css" href="style_1.css">
</head>

<body>

    <h2>change password</h2>
    <form action="User-change_password.php" method="post">
        <p>
            <label>old_password:</label>
            <input type="text" id="password" name="old_pass" />
        </p>
        <p>
            <label>new_password:</label>
            <input type="password" id="password" name="new_pass" />
        </p>
        <p>
            <label>Re-enter Password:</label>
            <input type="password" id="password" name="rrepass" />
        </p>
        <p>
            <input type="submit" id="sub" name="submit" value="submit" />
        </p>
    </form>

</body>

</html>






<?php

$conn  = mysqli_connect("localhost","root","bhoomika02");
mysqli_select_db($conn,"railways");

if(isset($_POST["submit"]))
{
    $o_password=$_POST["old_pass"];
    $password=$_POST["new_pass"];
    $repassword=$_POST["rrepass"];
    if( $password==$repassword)
    {
        $query=" update users set password='$password'where password='$o_password' ";
    $result=mysqli_query($conn,$query)  or die("fail to query database");
    echo "password changed succesfull login again";
    }
    
    else
    {
        echo "re-enter password";
    }
}
  ?>     
