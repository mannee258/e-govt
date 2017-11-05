<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Nigeria.gov</title>


  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">


</head>



<body>
  <form action ="registration.php" method="POST">
  <div class="login-form" >
     <h1>Register</h1>

     <div class="form-group">
     <input type="text" class="form-control" name="name" placeholder="Name" id="name">
     <i class="fa fa-user"></i>
 </div>
 <div class="form-group">
     <input type="text" class="form-control" name="address" placeholder="Address" id="address" >
     <i class="fa fa-home"></i>
 </div>
  <div class="form-group">
     <input type="text" class="form-control" name="phoneNo" placeholder="Phone Number " id="phonenum">
     <i class="fa fa-phone"></i>
 </div>
 <div class="form-group">
     <label for="sex">Sex: </label>
     <input type="radio" name="sex" value="male" checked>Male
     <input type="radio" name="sex" value="female">Female

 </div>
 <div class="form-group">
     <input type="text" class="form-control" name="role" placeholder="Age " id="age">
     <i class="fa fa-user"></i>
 </div>
     <div class="form-group log-status">
       <input type="password" class="form-control" placeholder="Password" id="password" name="password">
       <i class="fa fa-lock"></i>
     </div>
      <span class="alert">Invalid Credentials</span>
      <a class="link" href="login.php">Already registered? click here</a>
      <a class="link" href="index.php">Click to go Back to home page</a>
     <button class="log-btn">Register</button>


   </div>
 </form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


  <script src="js/jquery-2.1.3.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

</body>
</html>
