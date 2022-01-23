<!DOCTYPE html>
<html lang="en">

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
	
	
</head>
<style>
  table {
	border-collapse: collapse;
	width: 60%;
	color: #000;
	font-size: 17px;
	text-align: center;
	font-family: Arial;
     } 
  th {
   background-color: #000;
   color: white;
    }
  tr:nth-child(even) {background-color: #fff}
 </style>
<body>

  <!--==========================
    Header
  ============================-->
  <header id="header" class="header-fixed">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <img src="img/logo.png" alt="" title="">
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">

		 <li><a href="mainPage.php">Staff Menu  </a></li>
		<li>	
<form class="example" method="get" action="display.php" style="margin:auto;max-width:220px">
  <input type="text" placeholder="  View Details / SSM" name="cssm" id="cssm" >
  <button type="submit"><i class="fa fa-search"></i></button>
	
</form></li>
  
			
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
          <h2>Proposal Project Applications</h2>
          <p></p>
        </div>
        </div>
		  
		  
   <div align="center">
     <table  bordercolor="#000" border="1" align="center">
       <tr>
         <th><div>
           <div align="middle">Total of Proposal Applications</div>
         </div></th>
        </tr>
       
       <?php
	$dbc = mysqli_connect ("localhost","root","root1234","ibewebsite");
   if (mysqli_connect_errno())
      {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $sql = "select * from customer ";
     
    $result = mysqli_num_rows(mysqli_query($dbc, $sql));
	echo  "<tr><td align=centre>$result</td></tr>";
?>
     </table>
     
   </div>
   <div align="center">
     <table align="center" bordercolor="#000" border="1" width="100%">
       <tr>
         <th>SSM</th>		   
         <th>Company Name</th> 
<th>Event Name</th>
<th>Event Date</th>            
       </tr>
 <?php
	 
$conn = mysqli_connect("localhost", "root", "", "ibewebsite");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "select * from customer";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["cssm"] . "</td><td>" . $row["cname"]. "</td> <td>" . $row["cevent"]. "</td><td>" . $row["cdate"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
     </table>
   </div>
   
<td>

   
    </section>

  </main>
	




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
        &copy; Copyright 2019</strong>. All Rights Reserved by IBE Global Sdn. Bhd.
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
</body>

</html>
