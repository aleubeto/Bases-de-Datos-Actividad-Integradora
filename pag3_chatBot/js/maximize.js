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

//Listas desplegables de sidebar
let listElements = document.querySelectorAll('.list_button--click');
listElements.forEach(listElements =>{
    listElements.addEventListener('click', ()=>{
        listElements.classList.toggle('arrow');
        let height = 0;
        let menu = listElements.nextElementSibling;
        if(menu.clientHeight == "0"){
            height=menu.scrollHeight;
        }
        menu.style.height = `${height}px`;
    })
});