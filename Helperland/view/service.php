<!DOCTYPE html>
<html>
<head>
	<title>service page</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width-device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="assets/css/service1.css">
	<!-- 	<link rel="stylesheet"  href="http://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet"  href="http://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">   
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel=stylesheet> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

	<div class="block">
		<div class="here">
		<img src="assets/image/logo-large.png" class="logo">
		<nav class="navbar">
			<ul>
				<li><a href="#" title="book a cleaner" class="book">Book Now</a></li>
				<li><a href="prices.html" title="prices">Prices</a></li>
				<li><a href="#" title="our Guarantee">Warranty</a></li>
				<li><a href="#" title="blob">Blog</a></li>
				<li><a href="contact.php" title="contact">Contact us</a></li>
				<li><a href="home.php" title="login" class="book">Login</a></li>
				<li><a href="service.php" title="become a helper" class="book">Become a Helper</a></li>
				<li><img src="assets/image/ic-flag.png" style="" ></li>
				<li><img src="assets/image/keyboard-right-arrow-button.png " style="width: 12px; height: 7px; background-color: white;" ></li>
			</ul>
		</nav>
		</div>

	<div class="rec-box">
		<div class="reg" style="margin-bottom: 41px; margin-top: 20px;">Register as Helper! </div>
		<form action="sercon.php" method="post">
			<div class="index">
				<input type="text" name="FirstName" placeholder="First name">
				<input type="text" name="LastName" placeholder="Last name">
				<input type="text" name="Email" placeholder="Email Address"><br>
				
				<input type="text" name="Mobile" placeholder="Phone Number"> 
				<input type="password" name="Password" placeholder="password">
                <input type="password" name="" placeholder="confirm password">
            </div>
        <div class="index1">
                
                <input type="checkbox" id="v2">
                <label for="v2"> <span class="text-style-1 " style="color: grey;">I accept </span>terms and conditions<span class="text-style-2"  style="color: grey;">&</span>
 						 privacy policy
 				</label>
        </div>

       
             
          <button type="Submit" name="Submit" class="btn-primary" style=" margin-top: 30px; width: 200px;height: 50px;color: white;border-radius: 26px;border: 1px solid; background-color: #1d7a8c;">
            getting started</button></form>   	
    </div>
						<div class="row" style="margin-top:42px;margin-bottom: 33px;">
							<div class="col text-center">
								<a href="#next"><img src="assets/image/group-18_5.png"></a>
						    </div>
					    </div>
   

</div>

<div class="plan">
	
	<div class="box1">
			<img src="assets\image/blog-left-bg.png" style="margin-top: 16px;">

			<h1>How it works</h1>
		

		<div class="box2">
			<h2>Register yourself</h2>
			<p>Provide your basic information to register <br> yourself as a service provider.</p>
			<h6>Read more <img src="assets\image/shape-2.png"></h6>
			<img src="assets\/image/laptop.png" style="margin-top: -100px;margin-left: 400px; width: 200px;height: 180px;">


		<div class="f1" style="margin-left: 350px;">	<h2>Get service requests</h2>
			<p>You will get serivce requests from <br> your customers depend on service area and profile.</p>
			<h6>Read more <img src="assets\image/shape-2.png"></h6>
		</div>


			<div class="p1">
			<img src="assets\image/group-29.png" style="margin-top: 50px; border-radius: 70%; width:200px; height: 170px; border:1px solid white;">
			<h2> Complete serivce</h2>
			<p>Accept serivce requests from your customers <br> grid complete your work.</p>
			<h6>Read more <img src="assets\image/shape-2.png"></h6>
			</div>

			<img src="assets\image/group-30.png" style="margin-left: 400px;margin-top:-200px;border-radius: 70%;width:200px; height: 190px;">

		</div>
		<img src="assets\image/blog-right-bg.png" style="margin-left: 0px;margin-top: 16px;" >

	</div>   
</div>
	<div class="news">
				 	<h4>Get Our Newsletter</h4>
                    <input type="email " placeholder="Your Email "><button class="btn btn-sm " style="background-color: #ff7b6d;color: white; font-size: 14px;  border-radius: 20px;">Submit</button>
    </div> 

 <?php include 'footer/footer.php'; ?>
</body>
</html>