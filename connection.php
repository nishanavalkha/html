 <?php

	
		 	$conn = mysqli_connect('localhost','root','','helperland');

		 if(!$conn)
		 	die('database connection failed'.mysqli_connect_error());

if(isset($_POST['submit'])) 
  {
  		
		 $firstname=$_POST['firstname'];
		 $lastname =$_POST['lastname'];
		 $Email = $_POST['Email'];
		 $Subject= $_POST['Subject'];
		 $PhoneNumber =$_POST['PhoneNumber'];
		 $Message = $_POST['Message'];

	
			
	 	 $query = "INSERT INTO contactus(firstname,lastname,Email,Subject,PhoneNumber,Message) VALUES('$		firstname','$lastname','$Email','Subject','$PhoneNumber','$Message')";

	 	$result= mysqli_query($conn,$query);
	 	

		 	if ($result) 
				echo "record inserted successfuly"; 		

			else

 				die("error:not inserted".mysqli_error());			
		 
 }
?>
 


