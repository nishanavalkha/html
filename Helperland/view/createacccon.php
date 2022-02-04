
 <?php
 			$conn = mysqli_connect('localhost','root','','helperland');

		 if(!$conn){
		 	die('database connection failed'.mysqli_connect_error());
		 }
		 else{
		 	echo "success";
		 }

		 if(isset($_POST['Register'])) {
		 	
		 	 $FirstName=$_POST['FirstName'];
			 $LastName =$_POST['LastName'];
		 	 $Email = $_POST['Email'];
		 	 $Mobile =$_POST['Mobile'];
		 	 $Password	=$_POST['Password'];



		 	 $query = "INSERT INTO user(FirstName,LastName,Email,Mobile,Password) VALUES('$FirstName','$LastName','$Email','$Mobile','$Password')";

		 	 $result= mysqli_query($conn,$query);
	 	

		 	if ($result) 
				 ?>
   				 <script>
     				 alert("Data Inserted Successfully!");
     				 window.location='createacc.php';
     			 </script>
     			 <?php
  			
   				 ?>
   				 <script>
     				 alert("Data Not Inserted");
      				window.location='createacc.php';
      			</script>
      			<?php
  
}			
 ?>
