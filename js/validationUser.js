const usuarioField = document.querySelector("[name = usuario]");

const nombreField = document.querySelector("[name = nombre]");

const passwordField = document.querySelector("[name = password]");

const cedulaField = document.querySelector("[name = cedula]");

const correoField = document.querySelector("[name = correo]");


const validateUser = (message, e) =>{
    const field = e.target;
    const fieldValue = e.target.value;
    
    if (fieldValue.trim().length === 0) {
        field.classList.add("invalid");
        field.nextElementSibling.classList.add("error");
        field.nextElementSibling.innerText = message;
    }else{
        field.classList.remove("invalid");
        field.nextElementSibling.classList.remove("error");
        field.nextElementSibling.innerText = "";
    }
}

usuarioField.addEventListener("blur", (e) => validateUser("Ingrese un usuario valido"));

nombreField.addEventListener("blur", (e) => validateUser("Ingrese un nombre"));

passwordField.addEventListener("blur", (e) => validateUser("Ingrese un password"));

cedulaField.addEventListener("blur", (e) => validateUser("Ingrese una Cedula"));

correoField.addEventListener("blur", (e) => validateUser("ingrese un correo"));