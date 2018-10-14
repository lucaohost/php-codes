var contatos = [
    {nome:"Lucas", telefone:"989314842"},
    {nome:"Joana", telefone:"999456845"},
    {nome:"Robson", telefone:"999187758"},
    {nome:"Danilo", telefone:"999412836"},
    {nome:"Rafael", telefone:"999412853"},
    {nome:"Jonas", telefone:"999412768"},
    {nome:"Paulo", telefone:"999412821"},
    {nome:"Daniel", telefone:"999416576"},
    {nome:"Gabriela", telefone:"999342886"},
    {nome:"Janaína", telefone:"999465888"},
    {nome:"Zoraide", telefone:"945652823"},
    {nome:"Julia", telefone:"923412865"},
    {nome:"Poliana", telefone:"999512512"},
    {nome:"Luana", telefone:"999423856"},
]
//Seleciona body para depois jogar conteudo
var body = document.getElementsByTagName("body")[0];
//Criação da tabble
var table = document.createElement("table");
table.setAttribute("border","1");
table.setAttribute("width","30%");
table.setAttribute("align","center");
//Criação do cabecalho
var trHead = document.createElement("tr");
var th1 = document.createElement("th"); 
var th2 = document.createElement("th");
th1.innerHTML = "Nome";
th2.innerHTML = "Telefone";
th1.setAttribute("align","left");
th2.setAttribute("align","left");
trHead.appendChild(th1);
trHead.appendChild(th2);
table.appendChild(trHead);
//Itera os contatos criando tr e tds, appendando tudo
for (var i in contatos){
    var tr = document.createElement("tr");
    var td1 = document.createElement("td");
    var td2 = document.createElement("td");
    td1.innerHTML = contatos[i].nome;
    td2.innerHTML = contatos[i].telefone;
    tr.appendChild(td1);
    tr.appendChild(td2);
    table.appendChild(tr);
    body.appendChild(table);
}

