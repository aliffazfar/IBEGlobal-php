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
		
		 <li><a href="totalSponsor.php">⇽ Back</a></li>
  <li><a href="index.html">Log Out</a></li>
			
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <main id="main" class="main-page">

    <!--==========================
      Speaker Details Section
    ============================-->
   
	  <section id="speakers-details" class="wow fadeIn">
      <div class="container">
        <div class="section-header">
          <h2>Sponsorship <br>And Advertising Opportunities</h2>
          <p></p>
        </div>
        </div>
		  
<form>

  <div align="center">
	  
    <table width="68%" bordercolor="#000" border="1">
      <tr> 
        <th><div align="center"><font color="#FFF">SSM</font></div></th>
        <th><div align="center"><font color="#FFF">Company Name</font></div></th>
        <th><div align="center"><font color="#FFF">Designation</font></div></th>
     	<th><div align="center"><font color="#FFF">Contact PIC</font></div></th>
		<th><div align="center"><font color="#FFF">Email</font></div></th>
		<th><div align="center"><font color="#FFF">Package</font></div></th>  
        <th><div align="center"><font color="#FFF"></font></div></th>
         <th><div align="center"><font color="#FFF"> </font></div></th>
      </tr>
		
      <?php
    $cssm = $_GET['cssm'];
	
    // To open the database and make connection to server

   $dbc = mysqli_connect ("localhost","root","","ibewebsite");
   if (mysqli_connect_errno())
      {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $sql = "select * from customer where cssm=$cssm";
     
    $result = mysqli_query($dbc, $sql);


if (mysqli_num_rows($result)==0)
{
	{mysqli_rollback($dbc);
	print '<script>alert("This Company does not exist!");</script>';
	print '<script>window.location.assign("totalSponsor.php");</script>';}
}
		
		
		
else 
{
    while($row = mysqli_fetch_assoc($result)){
      
        Print '<tr>
                  <td align="center"><font color="#000000">'.$row['cssm'].'</font></td>
                  <td align="center"><font color="#000000">'.$row['cname'].'</font></td>
                  <td align="center"><font color="#000000">'.$row['cdesignation'].'</font>
				  <td align="center"><font color="#000000">'.$row['ccontact'].'</font>
				  <td align="center"><font color="#000000">'.$row['cemail'].'</font>
				  <td align="center"><font color="#000000">'.$row['ccategory'].'</font>
				  </td></td>
				
                  <td align="center">
                  <a href="display.php?cssm='.$row['cssm'].' & " class="btn" role="button">Update</a>
                   </td>
                 <td align="center">
                  <a href="delete.php?cssm='.$row['cssm'].'" class="btn" role="button">Delete</a>
                    </td>
                </tr>';
      }
	
	
	
}
		
    ?>

    </table>
  </div>

</form>
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
