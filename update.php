<?php
	session_start();
?>

<!DOCTYPE html>
<html>

	
	

<head>
  <meta charset="utf-8">
  <title>IBE Global Sdn Bhd</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">


<style>
body {
  font-family: Arial;
}

* {
  box-sizing: border-box;
}

form.example input[type=text] {
	padding: 4.5px;
	font-size: 16px;
	border: 1px solid grey;
	float: left;
	width: 100%;
	background: #f1f1f1;
	border-radius: 9px;
}

form.example button {
  border-radius: 9px;
  width: 20%;
  padding: 4.5px;
  background: #8da029;
  color: white;
  font-size: 17px;
  border: 1px solid black;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #8da029;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
	
	
</style>
	
<style>
	
	select {
  width: 100%;
  padding: 16px 20px;
  border: 1px solid #ced4da;
  border-style: ridge;
  border-radius: 4px;
  background-color: #fff;
  
}
	
	aln{
		text-align: center;
	}
  table {
	border-collapse: collapse;
	width: 80%;
	color: #000;
	font-size: 15px;
	text-align: center;
	font-family: Arial;
     } 
  th {
   background-color: #000;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
	
	.button {
				
  border-radius: 9px;
  background-color: #4CAF50; /* Green */
  border: #000;
  color: white;
  padding: 12px 75px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin: 4px 2px;
  cursor: pointer;
}
 </style>
</head>	
<body>


  <!--==========================
    Header
  ============================-->
  <header id="header" class="header-fixed">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="index.html#intro" class="scrollto"><img src="img/logo.png" alt="" title=""></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">

		 <li><a href="javascript:history.back()">⇽ Back</a></li>
  
			
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <main id="main" class="main-page">

    <!--==========================
      Speaker Details Section
    ============================-->
   
	  <section  align="center" id="hotels" class="section-with-bg wow fadeInUp">
      <div class="container" >
        <div class="section-header">
          <h2>Update Proposal Project Details</h2>
          <p></p>
        </div>
        </div>
		  
	 <?php
     $cssm = $_GET['cssm'];
	 
     $dbc = mysqli_connect ("localhost","root","root1234","ibewebsite");
     if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: ".mysqli_connect_error();
      }

  	 // $sql = "select * from `group` where `grpno` = 3";
     $sql = "select * from customer where cssm = $cssm ";
     $result = mysqli_query($dbc,$sql);

// to display the details error
  	  
      if (false === $result) 
      {
         echo mysql_error();
	    }
	  
      $row = mysqli_fetch_assoc($result)
?>
	
<div align="center" class="container">

<form class="form-horizontal" action="UpdProcess.php?cssm=<?php echo $cssm;?>" method="post" align="center">
<div align="center" class="form-group">


 <fieldset  disabled >
	 SSM ID
  <input class="form-control" style="text-align:center;" type="text" name="cssm" value='<?=$row['cssm'];?>'> 
</fieldset><br>
	 <fieldset >
  Company Name 
  <input class="form-control" type="text" name="cname" value='<?=$row['cname'];?>' >

  <br>
  PIC Designer
  <input class="form-control" type="text" name="cpic" value='<?=$row['cpic'];?>'>
  <br>
	 
  PIC Sales & Marketing
  <input class="form-control" type="text" name="cpicSM" value='<?=$row['cpicSM'];?>'>
  <br> 

  PIC Contact
  <input class="form-control" type="text" name="ccontact" value='<?=$row['ccontact'];?>'>
  <br> 
		 
  Company Email
  <input class="form-control" type="text" name="cemail" value='<?=$row['cemail'];?>'>
  <br> 		
		 
  Event Name
  <input class="form-control" type="text" name="cevent" value='<?=$row['cevent'];?>'>
  <br> 

  Event Date
  <input class="form-control" type="text" name="cdate" value='<?=$row['cdate'];?>'>
  <br> 
		 
  Company Package Category 
  
  <select name="ccategory" width=20% size="1" id="ccategory" >
      <option value="A">3D</option>
      <option value="B">Graphic</option>
      value='<?=$row['ccategory'];?>'
</select>
		 
  Event Descriptions
  <input class="form-control" type="text" name="cdescription" value='<?=$row['cdescription'];?>'>
  <br> 		 
		 
		 
  </fieldset>
  
  <br>
  
<input type="submit"  class="button" value="UPDATE" onclick="return confirm('Are you sure?')">

</form>
</div>
	</div>
</section>
</body>
	   
	   <!--==========================
    Footer
  ============================-->
   <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

      
			  <div class="col-lg-3 col-md-6 footer-info">
            <img src="img/loggo.png" style="width:160px;height:90px;" align="middle" alt="Ibe">
            <p> Take Your Vision <p>to A Whole New Level </p>
          </div>



          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              IBE Global Sdn. Bhd. <br>
              14-G, Jalan 15/1F
			  Seksyen 15,<br>
			  43650 Bandar Baru Bangi<br>
              Selangor Darul Ehsan <br>
              <strong>Phone:</strong> +603 8927 3895<br>
              <strong>Email:</strong> info@ibeglobal.biz<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>
			  

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
       <strong> &copy; Copyright 2019</strong>. All Rights Reserved by IBE Global Sdn. Bhd.
      </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
</html> 
