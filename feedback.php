<?php
if(isset($_POST['submit']))
{
$name = $_POST['name'];
$branch=$_POST['branch'];
$year=$_POST['year'];
$email=$_POST['email'];
$college=$_POST['college'];
$comment=$_POST['comment'];

mysql_connect("localhost","root","");
mysql_select_db("forms");
$data=mysql_query("insert into feedback values('$name','$branch','$year','$email','$college','$comment')");

if($data)
 echo "<script>alert('Your feedback has been submitted successfully')</script>";
else
{
echo"<script>alert('your feedback submision not created success......')</script>";
echo mysql_error();
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>IEEE - MVSR SB</title>
	<meta charset="utf-8" />
	
	<link rel="stylesheet" href="style.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- for menu -->
	<link rel="stylesheet" type="text/css" href="ddsmoothmenu.css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script type="text/javascript" src="ddsmoothmenu.js">
</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "smoothmenu1", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

ddsmoothmenu.init({
	mainmenuid: "smoothmenu2", //Menu DIV id
	orientation: 'v', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu-v', //class added to menu's outer DIV
	method: 'toggle', // set to 'hover' (default) or 'toggle'
	arrowswap: true, // enable rollover effect on menu arrow images?
	//customtheme: ["#804000", "#482400"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>
	<!-- close menu -->
	
<!-- real slide show -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

<style>
table {
margin:0px auto;
width:80%;
}

td {
width:200px;
line-height:30px;
}

input {
height:30px;
padding-left:10px;
border:solid 1px #4d4d4d;
}

</style>


	
</head>

<body class="body">
<header class="header-bar">
<?php include 'topmenu.php'; ?>
</header>
	
<header class="mainHeader">
		<img src="images/header-banner.jpg">
</header>


<section class="menulayout">
<?php include 'menulayout.php'; ?>
</section>

<section id="feedback">
<ul>
<li><a href="regtform.php">Register</a></li>
<li><a href="feedback.php">Feedback</a></li>
</ul>
</section>

<section id="social-nw">
<h3>
Join Us
</h3>
<ul>
<li><a href="https://www.facebook.com/IeeeMvsr?ref=hl">
<img src="socialnw/fb.png" width="50" height="50">
</a></li>
<li><a href="https://twitter.com/IEEEMvsr">
<img src="socialnw/tw.png" width="50" height="50">
</a></li>
<li><a href="https://www.linkedin.com/groups/IEEE-Student-Branch-MVSR-4775277?gid=4775277&mostPopular=&trk=tyah&trkInfo=tarId%3A1406737500993%2Ctas%3Aieee%20mvsr%2Cidx%3A1-1-1">

<img src="socialnw/li.png" width="50" height="50">

</a></li>
</ul>
</section>

<!-- <section id="banner-menu">

	
	<section class="banner">
	<div id="myreel"></div>

	<!--
<div class="paginate">
≤ <a href="javascript:firstreel.navigate('back')" style="margin-right:200px;">back</a>  <a href="javascript:firstreel.navigate('forth')">forth</a> ≥
</div>
	</section>
</section> -->

<!-- content -->
	
	<div class="mainContent">
		<div class="content">
				
		<article class="a-ieee">
		<header>
		<h2>
		Feedback
		</h2>
		</header>
		<p>
		<form name="form1" method="post" action=''>
		
		<table>
		
		<tr>
		<td>Name</td>
		<td><input type="text"  size="30" name="name" id="u-name" placeholder=" Name" required pattern="[a-zA-Z]{1,50}">
		</td>
		</tr>
		

		
		<tr>
		<td>Branch</td>
		<td>
		
		<select name="select1" required>
		<option name="ece">Select Branch</option>
		<option name="ece">ECE</option>
		<option name="ese">CSE</option>
		<option name="eee">EEE</option>
		<option name="it">IT</option>
		<option name="civil">CIVIL</option>
		<option name="mech">MECH</option>
		</select>
		
        </td>
		</tr>
		
		<tr>
		<td>Year</td>
		<td>
		<select name="select1" required>
		<option name="y1">Select Year</option>
		<option name="y1">I Year</option>
		<option name="y2">II Year</option>
		<option name="y3">III Year</option>
		<option name="y4">IV</option>
		</select>
		</td>
        </tr>

    

		
		<tr>
        <td>Email</td>
		<td><input type="email" size="30" name="email" id="email" placeholder="Email" required></td>
		</tr>
		
		<tr>
		<td>College</td>
		<td><input type="text" size="30" name="college" id="college" placeholder="College" required pattern="[a-zA-Z]{1,150}">
		</td>
		</tr>
		
		<tr>
		<td>Comment/Suggestion</td>
		<td><textarea rows="4" cols="40" name="comment" id="comment" placeholder="Comment/Suggestion" required pattern="[a-zA-Z]{1,250}"></textarea>
		</td>
		</tr>
		
		<tr>
		<td colspan="2" align="center">
		<input type="submit" name="submit" value="Submit">
		<input type="reset" name="reset" value="Reset">
		</td>
		</tr>
		</table>
		</form>
		</p>
		
		</article>
		
<!--	-->	
			

	<footer class="mainFooter">
		<p>Copyright &copy; 2014 IEEE - MVSR SB .All rights Reserved <span style="padding-left:400px;"> <a href="http://about.me/vinaychenna">Chenna Vinay Kumar</a></span></p>
	</footer>
	
	</div>
	


</body>
</html>