<?php

$db_host = "localhost";
$db_username = "root";
$db_pass = "";
$db_name = "okoa";
  //check connection
$myConnection = mysqli_connect("$db_host","$db_username","$db_pass","$db_name") or die("Error: Could not connect to the database");
if (isset($_POST['send'])) {	
	$identity_number = $_POST['identity_number'];
	$identity_number = mysqli_real_escape_string($identity_number);
	$name_on_document = $_POST['name_on_document'];
	$name_on_document = mysql_real_escape_string($name_on_document);
	$location = $_POST['location'];
	$location = mysql_real_escape_string($location);
        $contact_of_finder = $_POST['contact_of_finder'];
	$contact_of_finder = mysql_real_escape_string($contact_of_finder); 

	$query = mysqli_query($myConnection, "INSERT into Documents (identity_number, name_on_document, location, contact_of_finder ) values('$identity_number', '$name_on_document', '$location', '$contact_of_finder') ") or die (mysqli_error($myConnection));
	header("location:index.php");
 
	exit();

}

?>




<?php


$db_host  = "localhost";

$db_uid  = "root";

$db_pass = "";

$db_name  = "okoa"; 

$db_con = mysql_connect($db_host,$db_uid,$db_pass) or die('could not connect');
mysql_select_db($db_name);

if (isset($_POST['submit1'])) {
$identity_number=$_POST['identity_number'];

$sql="SELECT * FROM Documents WHERE identity_number='$identity_number'";

$result = mysql_query($sql);
  
   if ($result > 0){
 
while($row=mysql_fetch_assoc($result)){
   
   $idhide = $row["identity_number"];

   $display = "</br> name:".$row["name_on_document"]."<br>" ;   
  
} 
} else {

   $display =  "Your document is not yet found but will get in touch  will notify you when we get it";
//header("location:index.php");
}


mysql_close(); 
}  
?>





<!DOCTYPE html>
 <html>
  <head>
   <title>OkoaDocs</title>
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <link rel="icon" type="image/x-icon" href="images/android-icon-72x72.png">
    <!--modal dialog-->
 <script src="bootstrap.js"></script> 
<!--//modal dialog-->

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script> 
<link href="css/gallery.css" rel='stylesheet' type='text/css' />
<!-- //js -->	
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Signika+Negative:300,400,600,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,300,600,700,800,400' rel='stylesheet' type='text/css'>
<!--/fonts-->
<!-- start-smoth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smoth-scrolling-->
</head>
<body>
	<!--banner-->
	<div class="banner">
		<!--header-->
		<div id="head">
		<div class="headder">		
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"> </span>
								<span class="icon-bar"> </span>
								<span class="icon-bar"> </span>
							</button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="#home" class="active">Home</a></li>
								<li><a href="#about" class="scroll">About us</a></li>
								<li><a href="#services" class="scroll">Services</a></li>
								<li><a href="#contact" class="scroll">Contact</a></li>
                                                                 <li><a href="#openModal" class="">Report a document</a></li>
								<li><a href="#closeModal" class="">Search a document</a></li>

							</ul>	
						</div>	
				</nav>	
					<div class="logo">
						<a class="navbar-brand" href="index.php"><img src="images/OkoaDocsLogo.png" /></a>
				</div>
					<div class="header-right-text">

					<!--modal dialog-->


<div id="openModal" class="modalDialog">
<a href="#close" title="Close" class="close">X</a>
		<h2>Report a document</h2>
		  <form action="" method="post">
        
        <fieldset>
          
          <label for="name">Name:</label>
          
          <input type="text" id="name" name="name_on_document" placeholder="Name on the document">
          

          <label for="name">Phone Number:</label>
          <input type="text" id="number" name="contact_of_finder"  placeholder="Finder's number">

          <label for="name">Location:</label>
          <input type="text" id="location" name="location" placeholder="location found">


          
           <label for="serial">Identity Number</label> 
          <input type="text" id="" name="identity_number" placeholder="Document's Identity Number">

        <button onclick="location.href='#smallModal'" name="send" type="submit">Send</button>
       
      </form>  
	</div>

<div id="closeModal" class="modalDialog">
<a href="#close" title="Close" class="close">X</a>
	<h2>Search for your document</h2>
		  <form action="" method="post">
        <fieldset>

      <label for="name">Name:</label>
      <input type="text" id="name" name="user_name" placeholder="Name on the document"> 
        
        <label for="category">Select category:</label>
        <select id="job" name="user_category">
            <option value="select">Select Category</option>
            <option value="id">Identity Cards</option>
            <option value="passport">Passports</option>
            <option value="driving_license">Driving Licenses</option>
            <option value="birth_certificate"> Birth certificates</option>
            <option value="atm">ATM cards</option>
            <option value="nhif">NHIF cards</option>
            <option value="school_certificates">School Certificates</option>
            <option value="car_log_books">Car Log Books</option>
            <option value="iprs">IPRS cards</option> 
          </optgroup>
        </select>  
 	
              
</optgroup>
         
        </select>
 <label for="serial">Identity Number</label>
          <input type="text" id="number" name="identity_number">
          
          
        </fieldset>
      <button onclick="location.href='#displayModal'" name="submit1" type="submit">Send</button> 
        <!--<button  name="submit1" type="submit">Send</button>-->
	</div>

 </div>
					
	</div>
	</div>
<h1>OKOADOCS</h1>



		<h3>Retrieve your lost documents</h3>
                


  


	</div>

					<!--<div class="search-bar">
			<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
			<input type="submit" value="">
	   </div>
				<div class="clearfix"> </div>	-->		
		</div>	
		<!--//header-->
		
	<!--//banner-->
	<!--about-->
	<div class="about" id="about">
		<div class="container">
			<h6>About Us</h6>
			<div class="about-grids">
				<div class="col-md-6 about-info">
					<img src="images/img1.jpg" alt=""/>
				</div>
				<div class="col-md-6 about-info">
					<h3>OkoaDocs</h3>
					<p>The name OKOADOCS means to SAVE documents,
where the word Okoa is a Swahili word that means save and docs the short form of the word documents</p>
					<p class="ab-text"> OKOADOCS is an online platform that will enable users to retrieve their lost documents.
One can also report incase has found any document to us so that we can add it in our database. <br> We are going to help people retrieve the lost docoments such as:</p>


<ul>
	<li>IDs</li>
	<li>Birth Certificates</li>
	<li>Driving Licences</li>
	<li>ATM cards</li>
	
</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--/about-->
	<!--services-->
	<div class="services" id="services">
		<!-- container -->
		<div class="container">
		   <h6>Our Services</h6>
			<div class="serve-grids">
				<div class="serve-grids-top">
					<div class="col-md-3 service-box">
						<figure class="icon">
							<img src="images/documents.png">
						
						</figure>
						
						<p>We collect lost documents</p>
						
					</div>
					<div class="col-md-3 service-box">
						<figure class="icon">
						<img src="images/student.png">
						</figure>
					
						<p>We Keep data of the lost documents found</p>
						
					</div>
					<div id="img">
					<div class="col-md-3 service-box">
						<figure class="icon">
							<img src="images/agreement.png">
						</figure>
						
						<p>Reconnect you with your document</p>
					</div>
					</div>
					
					<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>
</div>
	<!--/services-->
	
	<div class="mid-section">
	    <div class="container">
		     <div class="mid-top">
		        <h2>Here at your service</h2>
				
		     </div>
		</div>
	</div>

<div id="contact" class="contact">
<h6>Contact</h6>
<div class="form-map">	
<div id="form">
	<form name="" action="/#wpcf7-f11218-o1" method="post" class="class-form" novalidate="novalidate">
		
		   <p class="name">Your Name (required)<p>
		 	<p><span class="wpcf7-form-control-wrap your-name" class="label">
		 	<input type="text" name="your-name" value="" size="60" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-      required" aria-required="true" aria-invalid="false" /></span></p>
		 	<p class="name">Subject</p>
		 	<p> <span class="wpcf7-form-control-wrap Subject" class="label">
		 	<input type="text" name="Subject" value="" size="60" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span></p>
		 	<p class="name">Your Email</p>
		 	<p> <span class="wpcf7-form-control-wrap your-email" class="label">
		 	<input type="email" name="your-email" value="" size="60" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" /></span></p>
		 	<p class="name">Message</p> 
		 	<p><span class="wpcf7-form-control-wrap Message" class="label"><textarea name="Message" cols="57" rows="8" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span></p>
		 	<input type="submit" value="Submit" class="wpcf7-form-control wpcf7-submit" />
	
</form>
</div>
 
	
                <div class="map" >
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.7930414633215!2d36.78864011443123!3d-1.2989468360056946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x4eb6d6e1e16b4153!2siHub!5e0!3m2!1sen!2ske!4v1447456322752" width="45%" height="415" frameborder="0" style="border:0" allowfullscreen></iframe>
                <br>
               <p> Bishop Magua Centre,</p>
               <p> Ground floor,</p>
               <p> phone: +254 711 197 311</p>
               <p>Email:<a href="mailto:okoadocs@gmail.com">okoadocs@gmail.com</a><br>
                
                </div>	
</div>
</div>


			
	<div class="footer">
		<div class="container">
			<p>Copyright @ 2015 OkoaDocs. All rights reserved </p>
		</div>
	</div>
	<!--//contact-->
		



</div>

	</div>

 </div>

<div id="displayModal" class="modalDialog">
<a href="#close" title="Close" class="close">X</a>
<h3>Search Results</h3>
<?php

function String2Stars($string='',$first=0,$last=0,$rep='*'){
  $begin  = substr($string,0,$first);
  $middle = str_repeat($rep,strlen(substr($string,$first,$last)));
  $end    = substr($string,$last);
  $stars  = $begin.$middle.$end;
  return $stars;
}
		//echo "<h3>search results".$idhide."</h3>";
         echo "</br>Thanks for using our platform. Your identity number end with".$row["$idhide"]."<br> name".$display."<br>" ;   
              //  echo $id_hide_split;
               // echo $idhide;
               // echo str_replace( "12345","*****",$idhide);


                echo String2Stars($idhide,0,-3); 


?>
</div>
<!--ending-->
<!--small modal-->

<div id="smallModal" class="modalDialog">
<a href="#close" title="Close" class="close">X</a>

<p>Hello!!<br>
Thanks for reporting the document you have found we highly appreciate<br>
For more information:<br>
Call:0711197311<br>
Email:okoadocs@info.com
</p>
</div>

<!--end small modal-->
 
		<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!--//smooth-scrolling-of-move-up
	<!-- Bootstrap core JavaScript
    ================================================== --->
    <!-- Placed at the end of the document so the pages load faster-->
    <script src="js/bootstrap.js"> </script>
</body>
</html>
