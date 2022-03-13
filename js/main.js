window.addEventListener('load',start);
function start() {
    let menu=document.getElementById('menu');
    let navs=document.getElementById('navs');
    let closenav=document.getElementById('close');

    menu.addEventListener('click',displayNav);
    function displayNav() {
        
        navs.style.display="block";
    }
closenav.addEventListener('click',closenav1);
function closenav1() {
    navs.style.display="none";
}


}