const btn=document.getElementById('chatButton');
const win=document.getElementById('chatWindow');
const close=document.getElementById('chatClose');
const messages=document.getElementById('chatMessages');
const input=document.getElementById('chatInput');
const send=document.getElementById('chatSend');

btn.onclick=()=>{win.classList.add('open');input.focus()};
close.onclick=()=>win.classList.remove('open');

function mensaje(texto,tipo){
    const d=document.createElement('div');
    d.className='message '+tipo;
    d.textContent=texto;
    messages.appendChild(d);
    messages.scrollTop=messages.scrollHeight;
    return d;
}

async function enviar(){
    const pregunta=input.value.trim();
    if(!pregunta)return;

    mensaje(pregunta,'user');
    input.value='';
    input.disabled=true;
    send.disabled=true;

    const cargando=mensaje('Consultando la información...','bot');

    try{
        const r=await fetch('chat.php',{
            method:'POST',
            headers:{'Content-Type':'application/json'},
            body:JSON.stringify({message:pregunta})
        });

        const data=await r.json();
        cargando.remove();

        mensaje(data.response || data.error || 'Ocurrió un error.','bot');

    }catch(e){
        cargando.remove();
        mensaje('No se pudo conectar con el asistente.','bot');
    }

    input.disabled=false;
    send.disabled=false;
    input.focus();
}

send.onclick=enviar;

input.addEventListener('keydown',e=>{
    if(e.key==='Enter')enviar();
});