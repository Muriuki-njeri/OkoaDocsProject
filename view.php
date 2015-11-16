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

   echo "</br> id".$row["id"]."<br> name".$row["name_on_document"]."<br>" ;   

} 
} else {
echo "Your document is not yet found but will get in touch  will notify you when we get it";
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
 <div class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Search results</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


