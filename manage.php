<!DOCTYPE html>
<html>
<head>
	<title>Stratigic Planning</title>
	<link rel="icon" href="icons8-Doctors Bag-40.png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="manage.css">
</head>
<body>
<nav id="nav">
	<ul>
   <li><a href="#logo" class="logo"><img src="hi1.svg" height="23px" width="27px" /></a></li>
   <li><a href="home.php" class="active">HOME</a></li>
   <li><a href="#news">NEWS</a></li>
   <li><a href="#services">SERVICES</a></li>
   <li><a href="#contact">CONTACT US</a></li>
   <li><a href="#about">ABOUT US</a> </li>
    <li><a href="login.php">LOGIN</a></li>
   <li class="button"><form method="GET" action="pro1.html"><input type="submit" value="Register"></form></li>
   <li class="icon"><a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a></li>
   </ul>
</nav>
<div id="first">
	<h2>MANAGEMENT CONSULTING</h2>
</div>
<div id="info">
	<h2>PROVEN RECORD OF SUCCESSFUL BUSINESS OPERATION AND LEADERSHIP</h2>
	<p>We offer a full range of management consulting services and have a proven industry track record of successful business operation and leadership.</p>
	<p>Our service offering also includes healthcare consulting services specializing in implementing new approaches to enhancing community-based solutions to the health care as well as providing business-consulting services for operational and financial management.</p>
	<p>Our management consulting services focus on the areas of operational, legal, finance, revenue cycle management, and information technology.</p>
	<p>Consulting services revolve around the relationships between employers, managed care entities, hospitals and physicians, and home health agencies. This includes specializing in developing refined management approaches and assisting organizations in realigning their strategies as a result of the PPACA (Patient Protection and Accountable Care Act of 2010).</p>
	<p>Franklin Healthcare Management’s consulting services create synergies that maximize value and generate exponential growth opportunities.</p>
	<p>Management reviews are also available.</p>
</div>
<div id="last">
	<p>© 2017 Healthcare Management.  All rights reserved. | Design © 2017 popdot media</p>
</div>
</body>
<script>
function myFunction() {
    var x = document.getElementById("nav");
    if (x.className === "") {
        x.className += " responsive";
    } else {
        x.className = "";
    }
}
</script>
</html>