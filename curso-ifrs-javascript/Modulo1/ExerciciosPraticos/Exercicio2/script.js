var cidades = [
    {cidade:"Bento Gonçalves",min:"6ºC",max:"12ºC",href:"https://www.climatempo.com.br/previsao-do-tempo/cidade/350/bentogoncalves-rs"},
    {cidade:"Cuiabá",min:"28ºC",max:"32ºC",href:"https://www.climatempo.com.br/previsao-do-tempo/cidade/218/cuiaba-mt"},
    {cidade:"Maceió",min:"28ºC",max:"35ºC",href:"https://www.climatempo.com.br/previsao-do-tempo/cidade/8/maceio-al"},
    {cidade:"Vitória",min:"18ºC",max:"25ºC",href:"https://www.climatempo.com.br/previsao-do-tempo/cidade/84/vitoria-es"},
]
var body = document.getElementsByTagName("body")[0];
var table = document.createElement("table");
table.setAttribute("border","1");
table.setAttribute("align","center");
table.setAttribute("width","30%");
var trHead = document.createElement("tr");
var th1 = document.createElement("th");
var th2 = document.createElement("th");
var th3 = document.createElement("th");
th1.innerHTML = "Cidades"
trHead.appendChild(th1);
th2.innerHTML = "Min"
trHead.appendChild(th2);
th3.innerHTML = "Máx"
trHead.appendChild(th3);
table.appendChild(trHead);
for(var i in cidades){
    var tr = document.createElement("tr");
    var td1 = document.createElement("td");
    var a1 = document.createElement("a");
    a1.innerHTML = cidades[i].cidade;
    a1.setAttribute("href", cidades[i].href);
    a1.setAttribute("target","blank");
    td1.appendChild(a1);
    var td2 = document.createElement("td");
    td2.innerHTML = cidades[i].min;
    var td3 = document.createElement("td");
    td3.innerHTML = cidades[i].max;
    td1.setAttribute("align","center");
    td2.setAttribute("align","center");
    td3.setAttribute("align","center");
    tr.appendChild(td1);
    tr.appendChild(td2);
    tr.appendChild(td3);
    table.appendChild(tr);
}
body.appendChild(table);