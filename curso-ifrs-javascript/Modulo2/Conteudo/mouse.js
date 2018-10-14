function passeiMouse(){
    document.getElementById("cores").style.backgroundColor="yellow";
    document.getElementById('log').innerHTML += 'passou o mouse e ficou amarelo<br>';
}
function tireiMouse(){
    document.getElementById("cores").style.backgroundColor='red';
    document.getElementById("log").innerHTML += 'tirei o mouse e ficou vermelho<br>';
}
function mexiDentro(){
    document.getElementById('cores').style.backgroundColor='blue';
    document.getElementById('log').innerHTML += 'mexi dentro do elemento e ficou azul<br>';
}
function cliqueiDentroElement(){
    document.getElementById('cores').style.backgroundColor='pink';
    document.getElementById('log').innerHTML += 'cliquei dentro do elemento e ficou roza<br>';
} 
function descliqueiElemento(){
    document.getElementById('cores').style.backgroundColor='orange';
    document.getElementById('log').innerHTML += 'descliquei dentro do elemento e ficou laranja<br>';
}