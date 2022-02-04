 <?php
	


		   if(isset($_POST['Send']))

		   {

   				 require("PHPMailerAutoload.php");

    		 // function sendmail($recipent, $subject, $body, $altbody=""){
         $mail = new PHPMailer;
         $mail->SMTPDebug = 2;                               // Enable verbose debug output

         $mail->isSMTP();                                      // Set mailer to use SMTP
         $mail->Host = 'smtp.gmail.com;';     // Specify main and backup SMTP servers
         $mail->SMTPAuth = true;                               // Enable SMTP authentication
         $mail->Username ="nishanavalkha2251@gmail.com";              // SMTP username
         $mail->Password = "Nisha$2711";                          // SMTP password
         $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
         $mail->Port = 587;                                    // TCP port to connect to

         $mail->setFrom('nishanavalkha2251@gmail.com','Helperland');
         $mail->addAddress("180320116027.it.nisha@gmail.com");     // Add a recipient
    

          
         $mail->isHTML(true);                                  // Set email format to HTML

         $mail->Subject = 'forgot password';
         $mail->Body   ="<a href='http://localhost/helperland/view/forgot.php'>click here</a>";

        

        if(!$mail->Send()) {

            echo 'Message could not be sent.';
             echo 'Mailer Error: ' . $mail->ErrorInfo;
         }
       
         else
 				?>
   				 <script>
     				 alert("Your mail has been sent!..");
     				 window.location='home.php';
     			 </script>
     			 <?php
    }
?> 
		

