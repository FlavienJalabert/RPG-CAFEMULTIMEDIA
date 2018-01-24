window.addEventListener("load",init,false);

function init(event) {
document.getElementById("menu_burger").addEventListener("click",basculemenu,false);
     window.addEventListener("resize",changedimension,false);
}

function basculemenu(event) {

     if (document.getElementById("lemenu").style.display=="block")
         document.getElementById("lemenu").style.display="none";
     else
         document.getElementById("lemenu").style.display="block";

}

function changedimension(event){

     if(window.innerWidth > 1200)
document.getElementById("lemenu").style.display="block";
     else document.getElementById("lemenu").style.display="none";
}