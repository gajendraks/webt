var v8 = document.getElementById("v4");
// var v6 = document.getElementById("v6");
v8.addEventListener("click",play,false);

function play(e){
    // document.write("hello");
    var p=document.createElement("p");
    p.textContent="inspirational_video";
    p.style.left=e.clientX;
    p.style.top=e.clientY;
    p.style.position=absolute;
    p.style.zIndex=10;
    p.style.color=white;
    body.appendChild(p);

}

function history(){
    var x=document.createElement("p");
    x.style.setAttribute("fontSize","25px");
    var y=document.getElementById("hisp");
    y.appendChild(x);
}