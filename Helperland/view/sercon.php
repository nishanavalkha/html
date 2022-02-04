

 <?php
 			$conn = mysqli_connect('localhost','root','','helperland');

		 if(!$conn){
		 	die('database connection failed'.mysqli_connect_error());
		 }
		 else{
		 	echo "success";
		 }

		 if(isset($_POST['Submit'])) {
		 	
		 	 $FirstName=$_POST['FirstName'];
			 $LastName =$_POST['LastName'];
		 	 $Email = $_POST['Email'];
		 	 $Mobile =$_POST['Mobile'];
		 	 $Password	=$_POST['Password'];



		 	 $query = "INSERT INTO user(FirstName,LastName,Email,Mobile,Password) VALUES('$FirstName','$LastName','$Email','$Mobile','$Password')";

		 	 $result= mysqli_query($conn,$query);
	 	

		 	if ($result) 
				echo "record inserted successfuly"; 		

			else

 				die("error:not inserted".mysqli_error());		
		 }


 ?>
