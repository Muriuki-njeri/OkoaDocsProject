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
                            </ul>   
                        </div>   
                </nav>   
                    <div class="logo">
                        <a class="navbar-brand" href="index.html"><img src="images/OkoaDocsLogo.png" /></a>
                </div>
                    <div class="header-right-text">

                    <!--modal dialog-->
<div class="button">
<a href="#openModal">Report a document</a>
<div id="openModal" class="modalDialog">
<a href="#close" title="Close" class="close">X</a>
        <h2>Report a document</h2>
          <form action="" method="post">
       
        <fieldset>
         
          <label for="name">Name:</label>
          <input type="text" id="name" name="user_name">

           <label for="serial">Serial Number</label>
          <input type="text" id="mail" name="user_serial">

           <label for="category">Select category:</label>
        <select id="job" name="user_category">
            <option value="select">Select Category</option>
            <option value="Identity Cards">Identity Cards</option>
            <option value="Passports">Passports</option>
            <option value="driving_license">Driving Licenses</option>
            <option value="Birth certificates"> Birth certificates</option>
            <option value="ATM cards">ATM cards</option>
            <option value="NHIF cards">NHIF cards</option>
            <option value="School Certificates">School Certificates</option>
            <option value="Car Log Books">Car Log Books</option>
            <option value="IPRS cards">IPRS cards</option> 
          </optgroup>
        </select>    
        </fieldset>    
        <button type="submit" name="send">Send</button> 
      </form> 
    </div>
<a href="#closeModal">Search your document</a>
<div id="closeModal" class="modalDialog">
<a href="#close" title="Close" class="close">X</a>
    <h2>Search your document</h2>
          <form action="search.php" method="post">
        <fieldset>    
          <label for="name">Name:</label>
          <input type="text" id="name" name="user_name">
           <label for="serial">Serial Number</label>
          <input type="text" id="mail" name="user_serial">
           <label for="category">Select category:</label>
        <select id="job" name="user_category">
            <option value="select">Select Category</option>
            <option value="id">Identity Cards</option>
            <option value="passport">Passports</option>
            <option value="driving_license">Driving Licenses</option>
            <option value="birth_certificate"> Birth certificates</option>
            <option value="nhif">NHIF cards</option>
            <option value="school_certificates">School Certificates</option>
            <option value="car_log_books">Car Log Books</option>
            <option value="iprs">IPRS cards</option>
          </optgroup>
        </select>   
        </fieldset>
        <button type="submit">Send</button>
    </div>

 </div>
                   
    </div>
    </div>
                    <!--<div class="search-bar">
            <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
            <input type="submit" value="">
       </div>
                <div class="clearfix"> </div>    -->       
        </div>   
        <!--//header-->
        <h1>OKOADOCS</h1>
        <h3>Retrieve your lost documents</h3>
    </div>
    <!--//banner-->
    <!--about-->
    <div class="about" id="about">
        <div class="container">
            <h6>Search results</h6>
            <div class="about-grids">
                <div class="col-md-6 about-info">
                    <img src="images/img1.jpg" alt=""/>
                </div>
                <div class="col-md-6 about-info">
                <?php
                $db_host = "localhost";
                $db_username = "root";
                $db_pass = "";
                $db_name = "okoa";
                 
                $myConnection = mysqli_connect("$db_host","$db_username","$db_pass","$db_name") or die("Error: Could not connect to the database");
                    //header("location:find.php");
                $sql = query("SELECT * FROM search") or die(mysql_error());
                $query = mysqli_query($myConnection, $sql);
                while($results = mysql_fetch_assoc($query))
                {
                    echo '                    <h3> '.$db_name.'</h3>
                    <p>'.$db_name.'</p>
                    <p>'.$db_name.'</p>';
                }

                  
                  
                  
                ?>       
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
                       
                        <p>We help the rightful owner get back his document</p>
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
                <h2>We are Always There at Your Services</h2>
               
             </div>
        </div>
    </div>

    <!--contact-->
    <div class="contact" id="contact">
        <div class="container">
            <h6>Contact</h6>
            <div class="contact-grids">
                <div class="col-md-7 contact-left">               
                    <form>
                        <input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
                        <input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                        <textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
                        <input type="submit" value="Submit" >
                    </form>
                </div>
                <div class="col-md-5 contact-right">
                    <p class="cnt-p">Bishop Magua Centre </p>
                    <p>Ground floor</p>
                    <p>PO BOX 66</p>

                    <p>Telephone : +245 705 414 090</p>
                   
                    <p>Email : <a href="mailto:example@mail.com">mail@okoadocs.com</a></p>
                </div>                           
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!--contact-->
    <div class="footer">
        <div class="container">
            <p>Copyright @ 2015 OkoaDocs. All rights reserved </p>
        </div>
    </div>
    <!--//contact-->
       



</div>


 
        <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    <!--//smooth-scrolling-of-move-up
    <!-- Bootstrap core JavaScript
    ================================================== --->
    <!-- Placed at the end of the document so the pages load faster-->
    <script src="js/bootstrap.js"> </script>
</body>
</html>
