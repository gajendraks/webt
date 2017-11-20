var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    slides[slideIndex-1].style.display = "block"; 
    setTimeout(showSlides, 3000);
	}


var test=document.getElementsByClassName("test")[0];
test.addEventListener("click",change);
function change(){
	var list=document.getElementById("list");
	var odi=document.getElementsByClassName("odi")[0];
	var t20=document.getElementsByClassName("t20")[0];
	t20.style.backgroundColor="#5b9e5b";
	odi.style.backgroundColor="#5b9e5b";
	test.style.backgroundColor="white";
	list.innerHTML="<ol><li> West Indies</li><li>Djdh</li><li>FHUFGA</li><ol>";
}


var odi=document.getElementsByClassName("odi")[0];
odi.addEventListener("click",change1);
function change1(){
	var list=document.getElementById("list");
	var test=document.getElementsByClassName("test")[0];
	var t20=document.getElementsByClassName("t20")[0];
	test.style.backgroundColor="#5b9e5b";
	t20.style.backgroundColor="#5b9e5b";
	odi.style.backgroundColor="white";
	list.innerHTML="<ol><li>India</li><li>Pakistan</li><li>Srilanka</li><li>Bangladesh</li><li>Australia</li><li>England</li><ol>";

}

var t20=document.getElementsByClassName("t20")[0];
t20.addEventListener("click",change2);
function change2(){
	var list=document.getElementById("list");
	var test=document.getElementsByClassName("test")[0];
	var odi=document.getElementsByClassName("odi")[0];
	test.style.backgroundColor="#5b9e5b";
	odi.style.backgroundColor="#5b9e5b";
	t20.style.backgroundColor="white";
	list.innerHTML="<ol><li>Pakistan</li><li>New Zealand</li><li>West Indies</li><li>England</li><li>India</li><li>South Africa</li><li>Australia</li><li>Srilanka</li><li>Afghanistan</li><li>Bangladesh</li><ol>";
}

