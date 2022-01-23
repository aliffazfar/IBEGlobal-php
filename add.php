<?php
session_start();

// Transfer Customer Details From fcustomer.php into variables

$cname=$_POST['cname'];
$cemail=$_POST['cemail'];
$cssm=$_POST['cssm'];

$ccontact=$_POST['ccontact'];
$cadd=$_POST['cadd'];
$cevent=$_POST['cevent'];
$cdate=$_POST['cdate'];
$ccategory=$_POST['ccategory'];
$cdescription=$_POST['cdescription'];

// To open the database and make connection to server

$dbc = mysqli_connect ("localhost","root1234","","ibewebsite");

if (mysqli_connect_errno())
   {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

// transfer customer details from  variable into customer table

$sql="insert into customer(`cname`, `cemail`, `cssm`, `ccontact`, `cadd` , `cevent` , `cdate`, `ccategory` , `cdescription`) values ('$cname','$cemail','$cssm', '$ccontact','$cadd','$cevent','$cdate','$ccategory','$cdescription')";

$sql2="insert into propose(`cssm`, `pkgID`) values ('$cssm','$ccategory')";


$results= mysqli_query($dbc,$sql); 
$results= mysqli_query($dbc,$sql2); //to keep results query into $result

//$count=mysqli_num_rows($result); //to keep nos of rows in $count

// if success display message

if ($results)
{
	
	mysqli_commit($dbc);
	
	 
	print '<script>alert("One Proposal Had Been Added");</script>';
	print '<script>window.location.assign("index.html");</script>';
	
}
else
 {

 	mysqli_rollback($dbc);
	print '<script>alert("Failed");</script>';
	print '<script>window.location.assign("index.html");</script>';

	}	

?>
