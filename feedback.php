<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="favicon.ico">
<title>Search2U</title>
<script type="text/javascript">
function Confirm(form){
alert("Record insert successfully!"); 
form.submit();
}
</script>
<style>
body {
	margin: 0;
	padding: 0;
	text-align: center; /* !!! */
	background-repeat: no-repeat;
}
#Content{
	margin-left: 15%;
    margin-right: 15%;
	position: relative;
	min-height: 100px;
	width: 70%;
	overflow: visible;
	margin: 0 auto;
	overflow: hidden;
	margin: 0 auto;
	width:70%;
	height:475px;
	z-index:4;
	border: thin solid #306;
	background-color: #517398;
	top: 50px;
	padding-right: 1%;
	padding-bottom: 1%;
	padding-left: 5%;
	right: auto;
	color: #FFF;
	padding-top: 1%;
	background-image: url(searchengine.jpg);
}
#Text{
    height:25px;
    font-size:14pt;
	width:500px;
}
#Text:hover{
	border: 2px solid #4CAF50;
}
#Label{
	color:black;
}
#footer {
	width: auto;
	background-color: #506065;
	position: fixed;
	width:100%;
	height:75px;
	z-index:2;
	left: 0px;
	right: 0%;
	margin-right: auto;
	margin-bottom: auto;
	bottom: auto;
	border-top-width: 3px;
	border-top-style: solid;
	border-top-color: #666;
	font-weight: normal;
	bottom: 0px;
}
#footer ul li a{
	text-decoration:none;
}
a:visited{ color: #3CBBF0}
#footer ul li.link a:hover {
	display: inline-block;
	padding: 0px 0px;
    color:white;
}	
#footer ul li.link-active a{
	display: inline-block;
	padding: 0px 0px;
	text-align: center;
	vertical-align: bottom;
	font-weight: bold;
	color:WHITE;
}
#footer ul{
	list-style:none;
	color: #FFF;
	}
#footer ul li{
	display:inline;
}
</style>
</head>
<body background="web-gfx ru (108).jpg">
<div id="Content">

	<form method="POST" action="feedback.php#Content">
    <p>
      <label><h3 id="Label">User Name</h3></label>
    </p>
    <p>
      <input id="Text" type="text" name="user" placeholder="Enter UserName" maxlength="10" required>
  </p>
    <p>
      <label><h3 id="Label">E-Mail</h3></label>
      </p>
    <p>
      <input id="Text" type="email" name="email" placeholder="Enter Email" required>
      </p>
      <p>
      <label><h3 id="Label">Feedback</h3></label>
    </p>    
    <p>
      <label for="textarea"></label>
      <textarea name="textarea" id="textarea" cols="70" rows="10"  placeholder="Enter Feedback" required style="font-size:12px"></textarea>
  </p>
    <p>
      <input type="submit" value="   Send Feedback  " onClick="Confirm(this.form)"/>
    </p>
  </form>
  
  <?PHP
$conn = new mysqli("localhost","root","","search2u");
error_reporting(E_PARSE);//error removing code
$user=$_POST['user'];
$email=$_POST['email'];
$textarea=$_POST['textarea'];

if($conn->connect_error)
{
	echo"Error In Connection";
}
else
{
	$sql="INSERT INTO feedback values('$user','$email','$textarea')";
	if($conn->query($sql)==true)
	{
		echo"";
	}
	else{
		
		echo "Error";
	}
	$conn->close();
}
?>
</div>

<!-- Footer start-->
<div id="footer">
  <div align="center">
    <ul>
   <li class="link"><a href="search2u.php" title="Search2U | Search Page">Search2U</a>&nbsp;&nbsp;&nbsp;|</li>&nbsp;&nbsp;&nbsp;
   <li class="link"><a href="app.php" title="Search2U | App">App</a></li> &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
    <li class="link"><a href="about.php" title="Search2U | About">About</a>&nbsp;&nbsp;&nbsp;|</li>&nbsp;&nbsp;&nbsp;
    <li class="link-active"><a href="feedback.php" title="Search2U | Feedback">Feedback</a></li>
&nbsp;&nbsp;&nbsp;|</li>&nbsp;&nbsp;&nbsp;
    <li class="link"><a href="privacy.php" title="Search2U | Privacy Policy">Privacy</a>&nbsp;&nbsp;&nbsp;|</li>&nbsp;&nbsp;&nbsp;
     <li class="link"><a href="help.php" title="Search2U | Help">Help</a></li>
        </ul>
        
    <p><strong>Copyright <b>©</b> 2017 Search2U, All Rights Reserved.</strong>
    </p>
  </div>
</div>
<!-- Footer Ends-->
</body>
</html>