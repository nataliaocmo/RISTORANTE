function login() {
    const loginForm = document.getElementById("loginForm");
    const formData = new FormData(loginForm);

    fetch("app/Http/Controllers/AuthController.php", {
        method: "POST",
        body: formData

        // headers: { 
        //     'Authorization': 'Basic ' + btoa('username:password') 
        //     } 
    })
    .then(response => {
        if (response.ok) {
            return response.json();
        } else {
            throw new Error("Error en la solicitud de inicio de sesión");
        }
    })
    .then(data => {
        console.log("Inicio de sesión exitoso", data);
    })
    .catch(error => {
        console.error("Error al iniciar sesión:", error.message);
    });
}
