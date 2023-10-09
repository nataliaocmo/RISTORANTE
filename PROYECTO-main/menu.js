var modal = document.getElementById("myModal");
var btnUser = document.getElementById("btnUser");
var closeBtn = document.getElementsByClassName("close")[0];
var loginButton = document.getElementById("loginButton");

// Función para abrir el modal
btnUser.onclick = function() {
  modal.style.display = "block";
}

// Función para cerrar el modal
closeBtn.onclick = function() {
  modal.style.display = "none";
}

// Función para cerrar el modal haciendo clic fuera de él
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// Función para realizar la lógica de inicio de sesión (aquí debes implementar tu propia lógica de autenticación)
loginButton.onclick = function() {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;

  // Aquí debes verificar las credenciales y decidir si el inicio de sesión es válido
  // Puedes agregar tu lógica de autenticación aquí

  // Ejemplo de verificación simple (debes implementar tu propia lógica):
  if (username === "usuario" && password === "contraseña") {
    alert("Inicio de sesión exitoso");
    modal.style.display = "none";
    // Redirige a la página de inicio de sesión exitoso o realiza otras acciones necesarias
  } else {
    alert("Credenciales incorrectas. Inténtalo de nuevo.");
  }
}