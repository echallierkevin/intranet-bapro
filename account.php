<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}


if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 120)) {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
    header("location: login.php");
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>menu horizontal</title>
		<meta charset="utf-8" />
		<style>
			#menu ul {
				padding:0;
				margin:0;
				list-style:none;
			}
			#menu > ul > li {
				float:left;
				margin:0;
				padding:0;
				position:relative;
			}
			#menu > ul > li > a {
			  display:block;
			  font:normal bold 14px tahoma;
			  background:#3f4040;
			  min-width:100px;
			  text-align:center;
			  padding:10px 15px 10px 15px;
			  text-decoration:none;
			  color:#FFF;
			  border-top:4px solid #FFF;
			  border-bottom:4px solid #00B4FF;
			  transition:background 500ms,color 500ms,border-color 500ms;
			}
			#menu > ul > li > a:hover {
			  background:#666;
			  border-top-color:#00B4FF;
			  color:#00B4FF;
			}
			#menu > ul > li > ul {
			  position:absolute;
			  top:45px;
			  left:0;
			  display:none;
			}
			#menu > ul > li > ul > li > a {
			  background:#666;
			  display:block;
			  font:normal normal 12px tahoma;
			  padding:5px 10px 5px 10px;
			  text-decoration:none;
			  color:#FFF;
			  border-bottom:1px solid #FFF;
			  min-width:130px;
			}
			#menu > ul > li > ul > li > a:hover {
				background:#777;
			}
		</style>
		<script src='http://code.jquery.com/jquery-latest.js'></script>
		<script>
			window.onload = function(){
				$("#menu > ul > li").hover(
					function(){ $(this).find("ul").slideDown('fast'); } ,
					function(){ $(this).find("ul").slideUp('fast'); } );
			}
		</script>
	</head>
	<body>
	
<div id="menu">
<ul> 

<li><a href="#">lien principal 1</a> <!--  -->

  <ul>  <!-- menu secondaire -->
  <li><a href="#">lien secondaire</a></li>
  <li><a href="#">lien secondaire</a></li>
  <li><a href="#">lien secondaire</a></li>
  </ul>

</li>

<li><a href="#">lien principal 2</a>

  <ul>
  <li><a href="#">lien secondaire</a></li>
  <li><a href="#">lien secondaire</a></li>
  </ul>

</li>

<li><a href="#">lien principal 3</a> 

  <ul> 
  <li><a href="#">lien secondaire</a></li>
  <li><a href="#">lien secondaire</a></li>
  </ul>

</li>

<li><a href="#">lien principal 4</a> 

  <ul> 
  <li><a href="#">lien secondaire</a></li>
  <li><a href="#">lien secondaire</a></li>
  </ul>

</li>

<li><a href="#">lien principal 5</a> 

  <ul> 
  <li><a href="#">lien secondaire</a></li>
  <li><a href="#">lien secondaire</a></li>
  </ul>

</li>
</ul>
</div>

	</body>
</html>