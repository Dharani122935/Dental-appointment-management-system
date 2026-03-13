<?php
$con=mysqli_connect("localhost","root","","dental_appoinment");
$fname=$_POST['fname'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$cdate=date("Y-m-d");
$status=1;
$sql="insert into tbluser(fname,email,mobile,address,uname,pass,cdate,status)values('$fname','$email','$mobile','$address','$uname','$pass','$cdate','$status')";
$query=mysqli_query($con,$sql);
if ($query==TRUE) {
    echo '<script>alert("Registration Sucesfull Please Login to Continue.")</script>';
echo "<script>window.location.href ='index.php'</script>";
  }
  else
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
		 echo "<script>window.location.href ='index.php'</script>";
    }
?>