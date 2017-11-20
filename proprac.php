<!DOCTYPE html>
<html>
	<head>
		<title>WT PROJECT</title>
		<link rel="icon" href="doct.png">
		<meta charset="utf-8">
		<!--<link rel="stylesheet" type="text/css" href="pro.css">-->
		<style>
			/*#i{text-align: center;}*/
			@font-face{
				font-family: nikoleta;
				src:url(NIKOLETA.ttf);
			}
			@font-face{
				font-family: belda;
				src:url(Belda.ttf);
			}
			body{margin:0;padding: 0}
			p{font-family: nikoleta}
			label{font-family: nikoleta}
			#k{color:magenta;position: relative;left:15px;font-family: belda;font-size: 25px;}
			/*.submit {
			  padding: 10px 15px;
			  font-size: 15px;
			  text-align: center;
			  cursor: pointer;
			  outline: none;
			  color: #fff;
			  background-color: #4CAF50;
			  border: none;
			  border-radius: 5px;
			  box-shadow: 0 5px #999;
			}

			.submit:hover {background-color: #3e8e41}

			.submit:active {
			  background-color: #3e8e41;
			  box-shadow: 0 5px #666;
			  transform: translateY(2px);
			}*/

			.overlay {
		    height: 100%;
		    width: 0;
		    position: fixed;
		    z-index: 1;
		    top: 0;
		    left: 0;
		    background-color: rgb(0,0,0);
		    background-color: rgba(0,0,0, 0.9);
		    overflow-x: hidden;
		    transition: 0.5s;
		}

		#myProgress {
		    position: relative;
		    left:250px;
		    top:250px;
		    width: 60%;
		    height: 30px;
		    background-color: grey;
		    vertical-align: center;
		}
		#myBar {
		    position: absolute;
		    width: 1%;
		    height: 100%;
		    background-color: green;
		}
		#label {
		  position: relative;
		  top:227px;
		  left:1049px;
		  line-height: 30px;
		  color: white;
		}
		#p{
		    position: relative;
		    color: white;
		    left:250px;
		    top:250px;
		    
		}
		.overlay a {
		    padding: 8px;
		    text-decoration: none;
		    font-size: 36px;
		    color: #818181;
		    display: block;
		    transition: 0.3s;
		}

		.overlay a:hover, .overlay a:focus {
		    color: #f1f1f1;
		}

		.overlay .closebtn {
		    position: absolute;
		    top: 20px;
		    right: 45px;
		    font-size: 60px;
		}

		@media screen and (max-height: 450px) {
		  .overlay a {font-size: 20px}
		  .overlay .closebtn {
		    font-size: 40px;
		    top: 15px;
		    right: 35px;
		  }
		}


		</style>

	</head>
	<body>
	<!--<img src="m35.jpg" style=";width:48.5%">-->
	<!--<nav>
   		<a href="#logo" class="logo"><img src="hi1.svg" height="23px" width="30px" /></a>
   		<a href="#home" class="active">HOME</a>
   		<a href="#news">NEWS</a>
   		<a href="#services">SERVICES</a>
   		<a href="#contact">CONTACT US</a>
   		<a href="#about">ABOUT US</a> 
	</nav>-->
    <div align="center" style="background-image:url(giv.jpg);background-repeat:no-repeat;background-size:cover;background-attachment: fixed;">
	<table border="1" style="border-color:pink;border-width:25px;opacity:0.9;background-color:white" >
		<tr>
		<td>
		<form method="GET" >
			<!--<img src="m35.jpg" style="position:relative;left:275px;width:72%">
			<img src="m34.jpg" style="position:relative;rigth:690px;">
			<img src="m34.jpg" style="position:relative;left:220px;">-->
			<img src="m21.jpg" style="position:relative;left:440px">
			
			
			<p id="k"><big>Medical Reimbursement Claim</big></p>
			<p><big>Choose One<sup style="color:magenta"><big><b>*</b></big></sup></big></p>
			<label>
				<input type="radio" name="gen" ><big>Medicare</big>
				&nbsp&nbsp&nbsp<input type="radio" name="gen"><big>Medicade</big>
				&nbsp&nbsp&nbsp<input type="radio" name="gen"><big>Tricare Champus</big>
				&nbsp&nbsp&nbsp<input type="radio" name="gen"><big>Group Health</big>
				&nbsp&nbsp&nbsp<input type="radio" name="gen"><big>Dental/Vision</big>
				</br><input type="radio" name="gen"><big>Other</big>
			</label>
			<p id="k"><big>Patient Information</big></p>
			<label><big>Patient's Name</big></br><input type="text" style="width:16%;padding-top:10px;padding-bottom:10px;border-radius: 5px;">
			<input type="text" style="width:3%;padding-top:10px;border-radius:5px;padding-bottom:10px">
			<input type="text" style="width:16%;padding-top:10px;padding-bottom:10px;border-radius: 5px;">
			<p><small style="position:relative;left:1px">First Name</small><small style="position:relative;left:61px">Initial</small><small style="position:relative;left:114px">Last Name</small></p>
			</label>
			<label><big>Patient's Date of Birth</big></br>
				<input type="date" style="width:20%;padding-top:6px;border-radius:5px;padding-bottom:6px" name="bdaymonth" placeholder="DOB">
				<input type="image" src="icons8-Calendar-48.png" height="30px" width="30px">
			</label>
		</br>
	</br>
			<label><big>Patient's Address</big></br><input type="text" style="width:35%;padding-top:10px;padding-bottom:10px;border-radius: 5px;margin-bottom: 4px"></br>
			<input type="text" style="width:35%;padding-top:10px;padding-bottom:10px;border-radius: 5px;margin-bottom: 4px"></br>
			<input type="text" style="width:9%;padding-top:10px;padding-bottom:10px;border-radius: 5px;margin-bottom: 4px">
			<select style="width:9%;padding-top:4px;padding-bottom:4px;border-width:2px;border-color:light black;border-radius: 5px;margin-bottom: 4px;">
				<option></option>
				<option>Karnataka</option>
				<option>Maharashtra</option>
				<option>Goa</option>
				<option>Gujrat</option>
				<option>Jammu and Kashmir</option>
				<option>Arunachal Pradesh</option>
				<option>Seemandhra</option>
				<option>Tamil Nadu</option>
				<option>Assam</option>
				<option>Manipur</option>
				<option>Meghalaya</option>
				<option>Sikkim</option>
				<option>Madhya Pradesh</option>
				<option>Orissa</option>
				<option>Meghalaya</option>
				<option>Jharkhand</option>
				<option>Bihar</option>
				<option>Uttar Pradesh</option>
				<option>Uttarakhand</option>
				<option>Rajasthan</option>
				<option>Chattisgarh</option>
				<option>West Bengal</option>
				<option>Punjab</option>
				<option>Haryana</option>
				<option>Uttarakhand</option>
				<option>Rajasthan</option>
				<option>Tripura</option>
				<option>Mizoram</option>
				<option>Nagaland</option>
				<option>Himachal Pradesh</option>
				<option>Telangana</option>
			</select>
			<input type="text" style="width:7%;padding-top:10px;padding-bottom:10px;border-radius: 5px;">
		
		    <p><small style="position:relative;left:1px">City</small><small style="position:relative;left:50px">State</small><small style="position:relative;left:97px">ZIP Code</small></p>
			<p><big>Patient's Sex</big><sup style="color:magenta"><big><b>*</b></big></sup></p>
			<input type="radio" name="ge2" style="font-family:Arial"><big>Male</big>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="ge2"><big>Female</big>
			<p><big>Patient's Relation to insured</big><sup style="color:magenta"><big><b>*</b></big></sup></p>
			<input type="radio" name="gen1" style="font-family:Arial"><big>Self</big>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="gen1"><big>Spouse</big>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="gen1"><big>Child</big>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="gen1"><big>Other</big>&nbsp&nbsp<input type="text" style="width:10%">
			<label>Range<input type="range" min="0" max="50"></label>
			<br />
	
			<div id="myNav" class="overlay">
			 <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			 <div id="myProgress" >
			    <div id="myBar">
			            
			  </div>
			</div>
			    <br>
			    <div id="p">Folder is being recieved</div><div id="label">0%</div> 
			   <!-- <embed src="giphy.mp4"></embed>-->
			</div>
			<br><br>
			<!--<div>
				
			</div>
		</div>-->
			<div style="width:16%;padding:5px;cursor:pointer;border-width:2px;border-color:black;background-color:lightgrey;" onclick="openNav();move()">I am done here  </div>
		</form>
	</td>
</tr>
	</table>
	</div>

	<script>
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}

function move() {
  var elem = document.getElementById("myBar");   
  var width = 1;
  var id = setInterval(frame, 10);
  function frame() {
    if (width > 100) {
      clearInterval(id);
    } else 
    {
      if(width==100)
  		var con=confirm("Your form was recieved");	
      width++; 
      elem.style.width = width + '%'; 
      document.getElementById("label").innerHTML = width * 1  + '%';
     
  		if(con==1)	
  			window.location.href="home.php";
  	
    }
    
  }


}
</script>     
	</body>
</html>