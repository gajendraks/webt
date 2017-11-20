<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<nav id="nav">
	<ul>
   <li><a href="#logo" class="logo"><img src="hi1.svg" height="23px" width="27px" /></a></li>
   <li><a href="home.php" >HOME</a></li>
   <li><a href="#news">NEWS</a></li>
   <li><a href="#services">SERVICES</a></li>
   <li><a href="#contact">CONTACT US</a></li>
   <li><a href="#about">ABOUT US</a> </li>
    <li><a href="login.php" class="active" id="login">LOGIN</a></li>
   <li class="button"><form method="GET" action="proprac.html"><input type="submit" value="Register"></form></li>
   <li class="icon"><a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a></li>
   </ul>
</nav>
 <div id="log">
  <img src="loginlogo.png" style="position: relative;top: 30px;left :285px;opacity: 1"><br>
 <form method="post" action="pass.php" id="form">
 
 	LOGIN ID :<br>
 	<input type="text" name="id" placeholder="username"><br><br>
 	PASSWORD :<br>
 	<input type="password" name="password" placeholder="password"><br><br>
 	<button type="submit">Login</button><br>
 	<input type="checkbox" checked="checked"> Remember me
 </form>

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
var usr ="<?php echo $_SESSION['usr']?>";
var stat="<?php echo $_SESSION['status']?>";
if(stat==1)
 {
  console.log("running");
  var form=document.getElementById("form");
  var div=document.getElementById("log");
  while(form.firstChild){
    form.removeChild(form.firstChild);
  }
  var a=document.createElement("h1");
  a.innerHTML=usr+"<br><br>You're Logged in!<br>";
  a.setAttribute("style","position:relative;text-align:center;font-family:sansation;top:100px;font-size :60px;color:teal;");
  div.appendChild(a);
  var f=document.createElement("button");
  f.setAttribute("type","submit");
  f.innerHTML="Log Out";
  f.setAttribute("style","position:relative;top:200px;left:100px;");
  f.setAttribute("onclick","logout()");
  div.appendChild(f);
  var l=document.getElementById("login");
  l.innerHTML="Log Out";
 }  

function logout(){
console.log("logingout");
<?php $_SESSION["status"]=0;?>
window.open("login.php","_self");
}
</script>
</html>