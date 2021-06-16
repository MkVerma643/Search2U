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
function display_c(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct()',refresh)
}
function display_ct() {
var strcount
var x = new Date()
var x1=x.getMonth() + "/" + x.getDate() + "/" + x.getYear(); 
x1 =  x.getHours( )+ ":" + x.getMinutes() + ":" + x.getSeconds();
document.getElementById('ct').innerHTML = x1;
tt=display_c();
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
	height: 95px;
	width: 100%;
	overflow: visible;
	top: 0px;
	margin: 0 auto;
	text-align: center;
	background-color: #f1f1f1;
	border-bottom:solid #9D9D9D;
}
#Text{
    height:30px;
    font-size:14pt;
	width:600px;
}

#Button{
	padding: 10px 24px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
	border-radius: 1px;
	border:1px solid #4CAF50;
	color:#008CBA;
	 -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}
#Button:hover {
    background-color: #e7e7e7; /* Gray */
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.Result{
	position:absolute;
	margin-left: 12.5%;
    margin-right: 12.5%;
	position: relative;
	min-height: 100px;
	width: 75%;
	overflow: visible;
	margin: 0 auto;
	text-align: left;
}
#footer {
	width: auto;
	background-color: #506065;
	position: fixed;
    bottom: 0;
	width:100%;
	height:75px;
	z-index:2;
	left: 0px;
	right: 0%;
	margin-right: auto;
	margin-bottom: auto;
	border-top-width: 3px;
	border-top-style: solid;
	border-top-color: #666;
	font-weight: normal;
}
#footer ul li a{
	text-decoration:none;
}
a{text-decoration:none;}
a:link{ color: #3CBBF0}
a:visited{ color: #3CBBF0}
a:hover{text-decoration: underline}
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

ul.ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #e7e7e7;
    background-color: #f3f3f3;
}
li.li {
    float:left;
}
li.li a.link {
    display: block;
    color: #666;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
li.li a.active_link {
    display: block;
    color: #666;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
li.li a.link:hover:not(.active_link) {
    background-color: #ddd;
	color:black;
}

li.li a.active_link {
    color: white;
    background-color:#3A4549;
}
</style>
</head>
<body bgcolor="#fff" onload=display_ct();>
<div class="Content">
<br>
<form method="get" action="search2u4.php">
  <a href="search2U.php">
  <img src="search2u.jpg" alt="Search2u Icon Image" width="200" height="60" title="Search2U" align="absmiddle"/></a>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input id="Text" name="search" type="text"  placeholder="Start Searching Here" title="Search" onkeydown="return defaultAction(event)" value="<?php echo htmlspecialchars($_GET['search']); ?>" onfocus="this.value autofocus autocomplete="off" >
  
  <input id="Button" value="&nbsp;&nbsp;&nbsp;Search&nbsp;&nbsp;&nbsp;" name="submit" type="submit" title="Click to Search...">
  </form>
</div>

<div class="Result">
<?php
$user = 'root';
$pass = '';
$db = "search2u";

$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to Connect");
$search=mysql_real_escape_string($_GET['search']);
mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db("search2u"); 
  
$button = $_GET ['submit'];
$search = $_GET ['search']; 
  
if(strlen($search)<=0)
echo "Search term too short";
else{
?>
<div id="Navigation">
<ul class="ul">
  <li class="li"><a class="link" href="search2u1.php?search=<?php echo $search; ?>&submit=   Search">&nbsp;&nbsp;&nbsp;All&nbsp;&nbsp;&nbsp;</a></li>
  <li class="li"><a class="link" href="search2u2.php?search=<?php echo $search; ?>&submit=   Search" >&nbsp;&nbsp;&nbsp;Images&nbsp;&nbsp;&nbsp;</a></li>
   <li class="li"><a class="link" href="search2u3.php?search=<?php echo $search; ?>&submit=   Search" >&nbsp;&nbsp;&nbsp;Videos&nbsp;&nbsp;&nbsp;</a></li>
  <li class="li"><a class="active_link" href="" >&nbsp;&nbsp;&nbsp;News&nbsp;&nbsp;&nbsp;</a></li>
  <li class="li"><a class="link" href="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
  
   <li class="li"><a class="active_link" href="search2u.php">&nbsp;&nbsp;&nbsp;Search2U&nbsp;&nbsp;&nbsp;</a></li>
   <?php
   echo "&nbsp;Date: " . date("Y-m-d");
echo ", <b>" . date("l")."</b><br>&nbsp;"; ?>
Time:&nbsp;<span id='ct' ></span>
</ul>
</div>
<?php
echo "You searched for <b>$search</b> <hr size='1'>";
mysql_connect('localhost',$user,$pass);
mysql_select_db("search2u");
    
$search_exploded = explode (" ", $search);
 
$x = "";
$construct = "";  
    
foreach($search_exploded as $search_each)
{
	$x++;
	if($x==1)
	{
		$search = addcslashes(mysql_real_escape_string($search), '%_');
		$construct .="title like '%".$search."%'";
	}
	else
	$construct .=" title LIKE '%".$search."%' OR body Like '%".$search."%' OR link like '%".$search."%' order by id";
		    
	}

$constructs ="SELECT * FROM news WHERE $construct";
$run = mysql_query($constructs);
    
$foundnum = mysql_num_rows($run);
    
if ($foundnum==0)
{
	echo "<p>Your search &nbsp;<b>".$search."</b>&nbsp; did not match any documents.</p>";
	echo"<h3>Suggestions:</h3><ul>";
	echo "<p><li>Make sure that all words are spelled correctly.</li><br>";
	echo "<li>Try different keywords.</li>"; echo"<br>";
	echo "<li>Try more general keywords.</li></p></ul>"; 
}
else
{  
echo "$foundnum results found !<p>"; 
	
$per_page = 5;
$start = isset($_GET['start']) ? $_GET['start']: '';
$max_pages = ceil($foundnum / $per_page);
if(!$start)
$start=0; 
$getquery = mysql_query("SELECT * FROM news WHERE $construct LIMIT $start, $per_page");
  
while($runrows = mysql_fetch_assoc($getquery))
{
$link = $runrows ['link'];
$title = $runrows ['title'];
$body = $runrows ['body'];
   
echo "<h3><a href='".$link."' >".$title."</a></h3><p><img src='jaitley.jpg' width='300px' height='250'><p>".$body."</p>";
echo"<hr>";
    
}
 echo"<br>";
 
//Pagination Starts
echo "<center>";
  
$prev = $start - $per_page;
$next = $start + $per_page;
                       
$adjacents = 3;
$last = $max_pages - 1;
  
if($max_pages > 1)
{   
//previous button
if (!($start<=0)) 
echo " <a href='search2u4.php?search=$search&submit=Search+source+code&start=$prev'>Prev</a> ";    
          
//pages 
if ($max_pages < 7 + ($adjacents * 2))   //not enough pages to bother breaking it up
{
$i = 0;   
for ($counter = 1; $counter <= $max_pages; $counter++)
{
if ($i == $start){
echo " <a href='search2u4.php?search=$search&submit=Search+source+code&start=$i'><b>$counter</b></a> ";
}
else {
echo " <a href='search2u4.php?search=$search&submit=Search+source+code&start=$i'>$counter</a> ";
}  
$i = $i + $per_page;                 
}
}
elseif($max_pages > 5 + ($adjacents * 2))    //enough pages to hide some
{
//close to beginning; only hide later pages
if(($start/$per_page) < 1 + ($adjacents * 2))        
{
$i = 0;
for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
{
if ($i == $start){
echo " <a href='search2u4.php?search=$search&submit=Search+source+code&start=$i'><b>$counter</b></a> ";
}
else {
echo " <a href='search2u4.php?search=$search&submit=Search+source+code&start=$i'>$counter</a> ";
} 
$i = $i + $per_page;                                       
}
                          
}
//in middle; hide some front and some back
elseif($max_pages - ($adjacents * 2) > ($start / $per_page) && ($start / $per_page) > ($adjacents * 2))
{
echo " <a href='search2u4.php?search=$search&submit=Search+source+code&start=0'>1</a> ";
echo " <a href='search2u4.php?search=$search&submit=Search+source+code&start=$per_page'>2</a> .... ";
 
$i = $start;                 
for ($counter = ($start/$per_page)+1; $counter < ($start / $per_page) + $adjacents + 2; $counter++)
{
if ($i == $start){
echo " <a href='search2u4.php?search=$search&submit=Search+source+code&start=$i'><b>$counter</b></a> ";
}
else {
echo " <a href='search2u4.php?search=$search&submit=Search+source+code&start=$i'>$counter</a> ";
}   
$i = $i + $per_page;                
}
                                  
}
//close to end; only hide early pages
else
{
echo " <a href='search2u4.php?search=$search&submit=Search+source+code&start=0'>1</a> ";
echo " <a href='search2u4.php?search=$search&submit=Search+source+code&start=$per_page'>2</a> .... ";
 
$i = $start;                
for ($counter = ($start / $per_page) + 1; $counter <= $max_pages; $counter++)
{
if ($i == $start){
echo " <a href='search2u4.php?search=$search&submit=Search+source+code&start=$i'><b>$counter</b></a> ";
}
else {
echo " <a href='search2u4.php?search=$search&submit=Search+source+code&start=$i'>$counter</a> ";   
} 
$i = $i + $per_page;              
}
}
}
          
//next button
if (!($start >=$foundnum-$per_page))
echo " <a href='search2u4.php?search=$search&submit=Search+source+code&start=$next'>Next</a> ";    
}   
echo "</center>";
} 
} 
echo"<br><hr><br><br><br><br><br>";
?>

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