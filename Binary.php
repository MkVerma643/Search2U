<html>
<head>
<title>Binary Search</title>
</head>
<body bgcolor="navyblue">
<h1>Binary Search</h1>
In computer science, binary search, also known as half-interval search,[1] logarithmic search,
[2] or binary chop,[3] is a search algorithm that finds the position of a target value within a sorted array.
[4][5] Binary search compares the target value to the middle element of the array; if they are unequal, 
the half in which the target cannot 
lie is eliminated and the search continues on the remaining half until it is
 successful or the remaining half is empty.<br><br><br>
 E.g:  632 883 893 895 899 912 932 943 956 999<br>
<br> 
<form method="post" align="center">
<label>Enter Number to Search:</label>
 <input type="text" name="t2" required><br><br>
 <input type="submit" value="Find">
 </form>
 <?php
 if(isset($_POST['t2']))
 {
mysql_connect('localhost',$user,$pass);
mysql_select_db("search2u");
$no=['632','883','893','895','899','912','932','943','956','999'];
$search = $_POST['t2'];
$low=0;
$high=10;
while($low<$high)
{
	$mid=0;
	$mid=($low+$high)/2;
	$mid=intval($mid);
	if($search==$no[$mid])
	{
		echo"Data Found At Position".($mid+1);
		return;
	
	}
	else if($search<$no[$mid])
	{
		$high=$mid-1;
	}
	else
	{
		$low=$mid+1;
	}
}
 } 
?>
</body>
</html>