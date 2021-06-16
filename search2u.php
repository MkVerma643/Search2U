<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="favicon.ico">
<title>Search2U</title>
<script type="text/javascript">
function defaultAction(e)
{
    if (null == e)
        e = window.event ;
    if (e.keyCode == 13)  {
        document.getElementById("Button").click();
        return false;
    }
}
</script>
<style>
body {
    margin: 0;
    padding: 0;
    text-align: center; /* !!! */
}
.Content{
	position: relative;
	height: 300px;
	width: 510px;
	overflow: hidden;
	top: 150px;
	margin: 0 auto;
	text-align: center;
}
#Text{
    height:25px;
    font-size:14pt;
	width:500px;
}

#Button{
	padding: 12px 28px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
	border-radius: 2px;
	border: 2px solid #4CAF50;
	color:#008CBA;
	 -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}
#Button:hover {
    background-color: #e7e7e7; /* Gray */
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
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
<div class="Content">
  <a href="search2U.php">
  <img src="search2u.jpg" alt="Search2u Icon Image" width="500" height="143" title="Search2U" align="absmiddle"/></a>
 <br><br>
 <form method="get" action="search2u1.php">
  <input id="Text" name="search" type="text"  placeholder="Start Searching Here!!!" title="Search" onkeydown="return defaultAction(event)" autofocus required autocomplete="off">
  <br><br>
  <input id="Button" value="&nbsp;&nbsp;&nbsp;Search&nbsp;&nbsp;&nbsp;" name="submit" type="submit" title="Click to Search...">
  </form>

</div>
<!-- Footer start-->
<div id="footer">
  <div align="center">
    <ul>
   <li class="link-active"><a href="search2U.php" title="Search2U | Search Page">Search2U</a>&nbsp;&nbsp;&nbsp;|</li>&nbsp;&nbsp;&nbsp;
   <li class="link"><a href="app.php" title="Search2U | App">App</a></li> &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
    <li class="link"><a href="about.php" title="Search2U | About">About</a>&nbsp;&nbsp;&nbsp;|</li>&nbsp;&nbsp;&nbsp;
    <li class="link"><a href="feedback.php" title="Search2U | Feedback">Feedback</a></li>
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