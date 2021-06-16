<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="favicon.ico">
<title>Search2U</title>
<script type="text/javascript">

</script>
<style>
body {
    margin: 0;
    padding: 0;
    text-align: center; /* !!! */
}
#Intro {
	position: relative;
	width: 97%;
	height: 490px;
	z-index: 3;
	left: auto;
	top: 0px;
	margin-right: auto;
	margin-left: auto;
	bottom: 1.5%;
	
}
.cnt_txt {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 16px;
    color: #000;
    line-height: 22px;
    float: left;
    border-left: 7px;
    border-right: 7px;
    border-color: #fff;
    width: 965px;
    padding: 7px;
    text-align: justify;
}
.cnt_hd {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 24px;
	font-weight: bold;
	color: #fff;
	padding-bottom: 7px;
	background: #6888C0;
	padding-left: 7px;
	padding-top: 7px;
	margin-bottom: 5px;
	border-radius: 8px 8px 8px 8px;
	width: 100%;
	top: 0px;
	padding-right: 7px;
	left: auto;
	right: auto;
}
.cnt_cnt {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	color: #FFF;
	padding-bottom: 7px;
	padding-left: 7px;
	padding-top: 7px;
	margin-bottom: 5px;
	border-radius: 8px 8px 8px 8px;
	width: 100%;
	top: 0px;
	left: auto;
	right: auto;
	padding-right: 7px;
}
#Overview {
	z-index: 4;
	color: black;
	height: 456px;
	margin-left: 10%;
	margin-right: 10%;
	position: relative;
	min-height: 100px;
	width: 80%;
	overflow: auto;
	margin: 0 auto;
	text-align: left;
	font-family:"Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;
}
#Text{
    height:25px;
    font-size:14pt;
	width:500px;
	border-radius:8px;
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
<body bgcolor="#fff" >
<div id="Intro" class="cnt_txt" align="center">
  <div class="cnt_hd" align="center">
    <div align="center"><h3>Welcome to the Search2U Help library!</h3></div>
</div>
  <div id="Overview" class="cnt_cnt">
    <p><strong>At Search2U, our users are our friends - that means it's our duty to provide the best answers possible. If you're having trouble finding answers, help is here. After all, isn't that what friends are for? Get started by choosing the Search2U Search Engine, and feel free to browse the most popular topics below.<br /></strong>
      <br /></p>
      <ul>
      <li><strong>How Do I ???</strong></p></li>
&nbsp;&nbsp;• Search -->Just Go to Homepage and Search by using Keyword.<br />
&nbsp;&nbsp;• Change my default homepage? -->Go To Setting-->Change the default page.<br />
&nbsp;&nbsp;• Set Search2U as default Search Engine-->Go To Setting-->In Search option "Manage Search Option".<br />
<br />
<FORM method="POST" action="help.php">
<input id="Text" type="text" name="t1" placeholder="Search Help Here!!!" required autocomplete="off">
<input type="image" onMouseOver="this.src='Magnify.png'" value="submit" src="Magnify.png" alt="submit Button" width="35" height="20" name="submit">
</FORM>
  <div class="Result">
	  <?php
$user = 'root';
$pass = '';
$db = "search2u";
error_reporting(E_PARSE);//error removing code
$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to Connect");
$search1=mysql_real_escape_string($_POST['t1']);
mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db("search2u");
$query=mysql_query("SELECT * from help where title LIKE '%".$search1."%'");
if(mysql_num_rows($query) >= 1)
{
	while($a=mysql_fetch_array($query))
	{
	echo "<h3><br><ul><li>".$a['title']."</a></li></ul></h3>"."<p>".$a['body']."</p>";
	echo"<hr>";
	}
	echo"<br><br><br>";
}
else if($_POST['t1']=="")
{
	echo"";
}
else
{
	echo "<p>Your search &nbsp;".$search1."&nbsp; did not match any Help.";
}
mysqli_close($db);
?>
	</div>

  </div>
</div>
<!-- Footer start-->
<div id="footer">
  <div align="center">
    <ul>
   <li class="link"><a href="search2u.php" title="Search2U | Search Page">Search2U</a>&nbsp;&nbsp;&nbsp;|</li>&nbsp;&nbsp;&nbsp;
   <li class="link"><a href="app.php" title="Search2U | App">App</a></li> &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
    <li class="link"><a href="about.php" title="Search2U | About">About</a>&nbsp;&nbsp;&nbsp;|</li>&nbsp;&nbsp;&nbsp;
    <li class="link"><a href="feedback.php" title="Search2U | Feedback">Feedback</a></li>
&nbsp;&nbsp;&nbsp;|</li>&nbsp;&nbsp;&nbsp;
    <li class="link"><a href="privacy.php" title="Search2U | Privacy Policy">Privacy</a>&nbsp;&nbsp;&nbsp;|</li>&nbsp;&nbsp;&nbsp;
     <li class="link-active"><a href="help.php" title="Search2U | Help">Help</a></li>
        </ul>
        
    <p><strong>Copyright <b>©</b> 2017 Search2U, All Rights Reserved.</strong>
    </p>
  </div>
</div>
<!-- Footer Ends-->
</body>
</html>