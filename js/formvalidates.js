"use strict"

const elsoGomb=document.querySelector("#keszletmodosit");

if(elsoGomb){
    console.log("eljutt");
    elsoGomb.addEventListener("click",(evt)=> {
    evt.preventDefault();

});

kuldes();
}else
{
    alert("Nem sikerült a modositás");
};

function kuldes() {
    let kuldPromise = fetch("index.php?controller=computer&action=keszletmodosit")
    kuldPromise
        .then(response => response.json())
        .then(data => {

            if (data.success) {
                console.log("siker");
            } else {
                console.log("nem nymert");
            }
        });
}
