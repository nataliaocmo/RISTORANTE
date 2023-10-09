var registro = document.getElementById("sign");
 //funcion onclick
 var n =document.getElementById("nombre");
 var e=document.getElementById("email");
 var a=document.getElementById("adress");
 var p=document.getElementById("password");
 
 registro.onclick = function(){
    const name= n.value;
    const password= p.value;
    const email= e.value;
    const adress= a.value;
    alert("Si sirvio");
 }