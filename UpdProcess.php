
<?php
session_start();

$cssm=$_GET['cssm'];
$cname=$_POST['cname'];
$cemail=$_POST['cemail'];

$cadd=$_POST['cadd'];

$ccontact=$_POST['ccontact'];
$cevent=$_POST['cevent'];
$cdate=$_POST['cdate'];
$ccategory=$_POST['ccategory'];
$cdescription=$_POST['cdescription'];
	
	$dbc = mysqli_connect ("localhost", "root", "root1234","ibewebsite");
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
	  
	$sql = "UPDATE `customer` SET `cssm`='$cssm',`cname`='$cname',  `cadd`='$cadd', `cemail`='$cemail'   ,`ccontact`='$ccontact' ,`cevent`='$cevent' ,`cdate`='$cdate' ,`ccategory`='$ccategory' ,`cdescription`='$cdescription'

    where `cssm`='$cssm'";


    $sql2="UPDATE `propose` SET `cssm`='$cssm' ,`pkgID`='$ccategory' where `cssm`='$cssm'";



	$result = mysqli_query($dbc, $sql);
    $results= mysqli_query($dbc,$sql2);
	
	if($result) //success  
	{
		
		
			mysqli_commit($dbc);
			Print '<script>alert("Proposal is successfully updated.");</script>'; 
			Print '<script>window.location.assign("display.php?cssm='.$cssm.'");</script>'; 
		}
		else //unsuccess  
		{
			mysqli_rollback($dbc);

			Print '<script>alert("Proposal is failed to update.");</script>'; 
			Print '<script>window.location.assign("update2.php?cssm='.$cssm.'");</script>'; 		
		}
?>
