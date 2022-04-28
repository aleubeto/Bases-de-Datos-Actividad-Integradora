//chat desplegable minimizado
const coll = document.getElementById('chat-button');
const chat = document.getElementById('chat-content');
var hide = true;
coll.addEventListener('click', () => {
    if (hide){
        chat.style.display = 'inline';
        hide = false;
    }
    else{
        chat.style.display = 'none';
        hide = true;
    }
})