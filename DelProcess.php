<?php
session_start();
	$cssm=$_GET['cssm'];
	
	$dbc = mysqli_connect ("localhost", "root", "root1234", "ibewebsite");
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
	 
	
	$sql2 = "DELETE FROM propose where cssm='$cssm'";
	$result2 = mysqli_query($dbc, $sql2);

	if($result2 === FALSE) 
 { 
   
	echo mysqli_error(); // TODO: better error handling
 }
	
	if($result2) //success  
	{
			mysqli_commit($dbc);
			$sql = "DELETE FROM customer where cssm ='$cssm'";
			$result = mysqli_query($dbc, $sql);
			
	
			Print '<script>alert("Proposal Record Successfuly Deleted.");</script>'; 
			print '<script>window.location.assign("list.php");</script>';
			//Print '<script>window.location.assign("listgrp.php?id='.$id.'");</script>'; 
		}
		else //unsuccess  
		{
			mysqli_rollback($dbc);

			Print '<script>alert("Proposal Record is failed to be Deleted.");</script>'; 
					
		}
?>
