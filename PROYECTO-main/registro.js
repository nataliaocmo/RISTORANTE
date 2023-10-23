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
    alert("usuario guardado con exito");

    const url ="http://127.0.0.1:8000/api/guardar";
    const formData=new formData();
    formData.append('name',JSON.stringify(name));
    formData.append('email',JSON.stringify(email));
    formData.append('adress',JSON.stringify(adress));
    formData.append('password',JSON.stringify(password));

    fetch(url,{
        method : 'POST',
        body : formData,
    })
        .then(response => {
            if(response.ok){
                return response.json();
            }else{
                throw new Error('Error en la solicitud HTTP');
            }
        })
        .then(data => {
            alert('Respuesta de la API:'+data);
        })
 }