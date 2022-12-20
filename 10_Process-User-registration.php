<?php
//after user loged in
//conection to database
$conn  = mysqli_connect('127.0.0.1:3307','root','');
mysqli_select_db($conn,"railways");

if(isset($_POST["submit"]))
{
    $username=$_POST["ruser"];
    $password=$_POST["rpass"];

    $gen=$_POST["gender"];
    $age=$_POST["age"];
    $email=$_POST["Email"];
    $adhar=$_POST["Adhar_no"];
    $mobile=$_POST["Mobile_no"];
    $city=$_POST["city"];
    
    $pincode=$_POST["pincode"];
    $repassword=$_POST["rrepass"];
    
    if($password==$repassword)
    {//have to make user_id as auto increment-----
        $query ="INSERT INTO `users` (`password`, `name`, `gender`, `age`, `email`, `aadhar_no`, `mobile_no`, `city`, `state`, `pincode`)
         VALUES ('$password', '$username',' $gen',' $age','$email','$adhar','$mobile','$city','$pincode')";

      mysqli_query($conn,$query);
      ?><html>
         <script>alert("registered sucessful!!!you can login now.")</script>
        </html><?php
    }
        //echo "Registered Successful!! you can login now.";    
    else
    {
    //echo "Password did't match try again";?><html>
         <script>alert("Password did't match try again.")</script>
         <a href="register_work.html"><i>REGISTRATION PAGE</i></a>
         </html><?php
    }

}
?>
