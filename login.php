<?php
session_start();
//error_reporting(0);
include('doctor/includes/dbconnection.php');

?>
<!doctype html>
<html lang="en">
    <head>
        <title>Dental Appointment Management System || Home Page</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/owl.carousel.min.css" rel="stylesheet">

        <link href="css/owl.theme.default.min.css" rel="stylesheet">

        <link href="css/templatemo-medic-care.css" rel="stylesheet">
        <script>
function getdoctors(val) {
     alert(val);
$.ajax({

type: "POST",
url: "get_doctors.php",
data:'sp_id='+val,
success: function(data){
$("#doctorlist").html(data);
}
});
}
</script>
<style>
		form {
  margin:0 auto;
  width:300px
}
input {
  margin-bottom:3px;
  padding:10px;
  width: 100%;
  border:1px solid #CCC
}
button {
  padding:10px
}
label {
  cursor:pointer
}
#form-switch {
  display:none
}
#register-form {
  display:none
}
#form-switch:checked~#register-form {
  display:block
}
#form-switch:checked~#login-form {
  display:none
}
		</style>
    </head>
    
    <body id="top">
    
        <main>

            <?php include_once('includes/header.php');?>

          
       
            

            

            <section class="section-padding" id="booking">
                <div class="container">
                    <div class="row">
                    
                        <div class="col-lg-12 col-12 mx-auto">
                            <div class="booking-form">
                                
                                <h2 class="text-center mb-lg-3 mb-2">Login/Register</h2>
                            
                              <input type='checkbox' id='form-switch'>
						<form id='login-form' action="logincheck.php" method='post'>
						  <input type="text" placeholder="Username" name="uname" required>
						  <input type="password" placeholder="Password" name="pass" required>
						  <input  type='submit' value="Login" class="btn btn-primary">
						  <label for='form-switch'><span>Register</span></label>
						</form>
						<form id='register-form' action="reg.php" method='post'>
					  <input type="text" placeholder="Full name" name="fname" required>
					   <input type="email" placeholder="Email" name="email"  required>
					   <input type="mobile" placeholder="Enter Mobile Number" name="mobile" required>
					   <textarea rows="4" cols="50" placeholder="Address..." name="address"></textarea>
					  <input type="text" placeholder="Username" name="uname" required>
					  <input type="password" placeholder="Password"  name="pass" required>
					 
					  <input type='submit' value="Register" class="btn btn-primary">
					  <label for='form-switch'>Already Member ? Sign In Now..</label>
					</form>

                            </div>
                            
                        </div>

                    </div>
                </div>
            </section>
             
        </main>
        <?php include_once('includes/footer.php');?>
        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/scrollspy.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>