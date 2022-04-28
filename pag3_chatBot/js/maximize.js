//menú desplegable sidebar
const sidebarBtn = document.getElementById('menu-button');
const sidebar = document.getElementById('side-menu');
const topmax = document.getElementById('maximized-top');
const bttmax = document.getElementById('maximized-bottom');
var hide = true;
sidebarBtn.addEventListener('click', () => {
    if (hide){
        sidebar.style.display = 'inline';
        topmax.style.borderRadius = '0px 10px 0px 0px';
        bttmax.style.borderRadius = '0px 0px 10px 0px';
        hide = false;
    }
    else{
        sidebar.style.display = 'none';
        topmax.style.borderRadius = '10px 10px 0px 0px';
        bttmax.style.borderRadius = '0px 0px 10px 10px';
        hide = true;
    }
})