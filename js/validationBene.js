console.log("Archivo Enlazado JS beneficiario")

const identificadorCanaima = document.querySelector("[name=ic]");

const nombreDeBeneficiario = document.querySelector("[name=nombre_del_beneficiario]");

const cedulaDeIdentidad = document.querySelector("[name=cedulaBene]");

const edadBeneficiario = document.querySelector("[name=edad]");

const nombreRepresentante = document.querySelector("[name=nombre_del_representante]");

const correoRepresentante = document.querySelector("[name=correoBene]");

const phoneRepresentante = document.querySelector("[name=phone]");

const municipio = document.querySelector("[name=municipio]");

const direccion = document.querySelector("[name = direccion]");

const descripcionDiscapacidad = document.querySelector("[name = descripcion_discapacidad]");

/*Validacion de si el campo lo dejan vacio y mostrar el error*/

const validateBeneficiario = (message, e) => {
	const field = e.target;
	const fieldValue = e.target.value;
	if (fieldValue.length == 0) {
		field.classList.add("invalid-user");
		field.nextElementSibling.classList.add("error-user");
		field.nextElementSibling.innerText = message;	
	}else{
		field.classList.remove("invalid-user");
		field.nextElementSibling.classList.remove("error-user");
		field.nextElementSibling.innerText = "";
	}
}

/*Captamos los datos de las constantes y con el evento blur verificamos si el input esta vacio o no*/
identificadorCanaima.addEventListener("blur", (e) => validateBeneficiario("Ingrese el identificador del equipo", e));

nombreDeBeneficiario.addEventListener("blur", (e) => validateBeneficiario("Ingrese el nombre del beneficiario", e));

cedulaDeIdentidad.addEventListener("blur", (e) => validateBeneficiario("Ingrese la Cedula de Identidad del Beneficiario.", e));

edadBeneficiario.addEventListener("blur", (e) => validateBeneficiario("Ingrese la Edad del beneficiario.", e));

nombreRepresentante.addEventListener("blur", (e) => validateBeneficiario("Ingrese Nombre del Representante.", e));

correoRepresentante.addEventListener("blur", (e) => validateBeneficiario("Ingrese el Correo del Representante.", e));

phoneRepresentante.addEventListener("blur", (e) => validateBeneficiario("Ingrese el Telefono del Representante.", e));

municipio.addEventListener("blur", (e) => validateBeneficiario("Ingrese el Municipio.", e));

direccion.addEventListener("blur", (e) => validateBeneficiario("Ingrese la direccion.", e));

descripcionDiscapacidad.addEventListener("blur", (e) => validateBeneficiario("Ingrese la descripcion de discapacidad.", e));