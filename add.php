<?php
	//including the database connection file
	include_once("config.php");
 
	if(isset($_POST['Submit'])) {    
		$misid=$_POST['misid'];
		$full_name=$_POST['full_name'];			
		$yoa=$_POST['yoa']; 	
		$fee=$_POST['fee'];
		$cgpa=$_POST['cgpa'];   
    
   		//insert data to database
        	$result = mysqli_query($mysqli, "INSERT INTO student_rec(MISID,FULL_NAME,YEAR_OF_ADMISSION, FEES, 			     CGPA) VALUES ('$misid','$full_name','$yoa','$fee','$cgpa')");
        
        	//display success message
        	echo "<font color='green'>Data added successfully.";
		header("Location:index.php");    
       
	}
?>

