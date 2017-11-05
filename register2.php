<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Nigeria.gov</title>
	<meta name="description" content="">
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">
   <link rel="stylesheet" href="css/vendor.css">
   <link rel="stylesheet" href="css/main.css">

   <!-- script
   ================================================== -->
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

</head>
<?php session_start();
?>

<body id="top">

	<!-- header
   ================================================== -->
   <header>

   	<div class="header-logo">
	      <a href="index.php">Nigeria.gov</a>
	   </div>

	</header> <!-- end header -->


   <!-- home
   ================================================== -->
   <section id="home">

   	<div class="overlay"></div>
    <div class="home-content-table">
		   <div class="home-content-tablecell">
    <div class="row">
      <div class="col">

        <form action ="registration.php" method="POST">
                            <div class="form-group">
                                <label for="name">Name: </label>
                                <input type="text" class="form-control" name="name" required="" style="padding-left: 20px;margin-left: 360px;">
                            </div>
                            <div class="form-group">
                                <label for="address">Address: </label>
                                <input type="text" class="form-control" name="address" required="" style="padding-left: 20px;margin-left: 360px;">
                            </div>
                             <div class="form-group">
                                <label for="phonenum">Phone Number: </label>
                                <input type="text" class="form-control" name="phoneNo" required="" style="padding-left: 20px;margin-left: 360px;">
                            </div>
                            <div class="form-group">
                                <label for="password">Password: </label>
                                <input type="password" class="form-control" name="password" required="" style="padding-left: 20px;margin-left: 360px;">
                            </div>
                            <div class="form-group">
                                <label for="sex">Sex: </label>
                                <input type="radio" name="sex" value="male" checked>Male<br>
                                <input type="radio" name="sex" value="female">Female
                            </div>
                            <div class="form-group">
                                <label for="age">Age: </label>
                                <input type="text" class="form-control" name="role" required="" style="padding-left: 20px;margin-left: 360px;">
                            </div>
                            <div class="form-body" >
                                <input type="submit" value="Submit" name="submitbtn" />
                            </div>
                        </form>



        </div> <!-- end col-twelve -->
    </div> <!-- end row -->
  </div>
</div>


</section>
	<!-- footer
   ================================================== -->
   <footer style="padding-top: 250px;">
    	<div class="footer-bottom">

       	<div class="row">

       		<div class="col-twelve">
 	      		<div class="copyright">
 		         	<span>© Copyright Group 21.</span>
 		         	<span>Design by Group 21</span>
 		         </div>
 	      	</div>

       	</div>

       </div> <!-- end footer-bottom -->


    </footer>
   	<div class="footer-bottom">

      	<div class="row">

      		<div class="col-twelve">
	      		<div class="copyright">
		         	<span>© Copyright Group 21.</span>
		         	<span>Design by Group 21</span>
		         </div>
	      	</div>

      	</div>

      </div> <!-- end footer-bottom -->


   </footer>



   <!-- Java Script
   ================================================== -->
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>

</body>

</html>
