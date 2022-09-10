/* Afficher la date du jour */

function DateDuJour() {
    var today = new Date();
    var a = (today.getDate());
    var b = (today.getMonth());
    var c = (today.getFullYear());
    var element = document.getElementById("DateDuJour");
    element.innerHTML += a + "/" + ( b + 1) + "/" + c;
}
document.addEventListener("DOMContentLoaded", DateDuJour);


/* barre rechercher */

function Searching() {
    let input = document.getElementById('searchbar').value
    input=input.toLowerCase();
    let x = document.getElementsByClassName('animals');
      
    for (i = 0; i < x.length; i++) { 
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="list-item";                 
        }
    }
}