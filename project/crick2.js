event();
function add()
{
	var textarea=document.getElementsByTagName("textarea")[0];
	var text=textarea.value;
	var table=document.getElementById("table2")
    var tr = document.createElement("tr");
    var td1 = document.createElement("td");
    td1.innerHTML="<img src=\"unknown.jpeg\">";
    var td2=document.createElement("td");
    td2.innerHTML="<h3>Gajendra KS</h3>";
    td2.innerHTML+=text;
    td2.innerHTML+="<br><button onclick=\"like()\" class=\"lk\">LIKE</button><span>0</span>&nbsp &nbspLIKES"
    tr.appendChild(td1);
    tr.appendChild(td2);
    table.appendChild(tr);
    var no=document.getElementById("number");
    no.innerHTML=Number(no.innerHTML) + 1;
    textarea.value="";
    // var likes=document.getElementsByClasssName("lk");
    // likes[n].addEventListener("click",like);
    event();
}
function event(){
var likes=document.getElementsByClassName("lk");
for(var i=0;i<likes.length;i++)
{
	likes[i].addEventListener("click",like);

}
}
function like(e)
{

	var likes=this.nextSibling;
	likes.innerHTML=Number(likes.innerHTML)+1;
}
// function add(){
// 	var table=document.getElementById("fuck");
// 	var trn=document.createElement("tr");
// 	var td3=document.createElement("td");
// 	td3.innerHTML="hello";
// 	trn.appendChild(td3);
// 	table.appendChild(trn);
// }