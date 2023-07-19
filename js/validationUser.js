/* Creamos una constante por cada input en el formulario*/
const userField = document.querySelector("[name=usuario]");

const nameField = document.querySelector("[name=nombre]");

const passwordField = document.querySelector("[name=password]");

const cedulaField = document.querySelector("[name=cedula]");

const correoField = document.querySelector("[name=correo]");

const perfilField = document.querySelector("[name=perfil]");

/*Creamos una funcion para verificar cuando el input lo dejen vacio*/
const validateCampo = (message, e) => {
  /*Instanciamos el evento y targeamos el input */
  const field = e.target;
  const fieldValue = e.target.value;
  /*Validamos si el Input se encuentra vacio y mostramos un mensaje dependiendo de este */
  if (fieldValue.trim().length == 0) {
    field.classList.add("invalid-user");
    field.nextElementSibling.classList.add("error-user");
    field.nextElementSibling.innerText = message;
  } else {
    field.classList.remove("invalid-user");
    field.nextElementSibling.classList.remove("error-user");
    field.nextElementSibling.innerText = "";
  }
};
/* Validacion del email ingresado en el input */
const validateEmailFormat = (e) => {
  const field = e.target;
  const fieldValue = e.target.value;
  const regex = new RegExp(/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/);
  if (fieldValue.trim().length > 5 && !regex.test(fieldValue)) {
    field.classList.add("invalid-user");
    field.nextElementSibling.classList.add("error-user");
    field.nextElementSibling.innerText = "Ingrese un email valido";
  } else {
    field.classList.remove("invalid-user");
    field.nextElementSibling.classList.remove("error-user");
    field.nextElementSibling.innerText = "";
  }
};

/*Instaciamos cada una de las constantes y llamamos al evento BLUR este nos permite verificar que contiene el input*/
userField.addEventListener("blur", (e) =>
  validateCampo("Ingresa tu Usuario", e)
);

nameField.addEventListener("blur", (e) =>
  validateCampo("Ingrese su nombre completo", e)
);

passwordField.addEventListener("blur", (e) =>
  validateCampo("Ingrese una contraseña", e)
);

cedulaField.addEventListener("blur", (e) =>
  validateCampo("Coloque su Cédula de Identidad", e)
);

correoField.addEventListener("blur", (e) =>
  validateCampo("Ingrese un correo Valido", e)
);

correoField.addEventListener("input", validateEmailFormat);
