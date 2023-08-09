console.log("Archivo enlazado Dispo");

const serialEquipoField = document.querySelector("[name=serial_del_equipo]");

const serialCargador = document.querySelector("[name=serial_cargador]");

const institucionEntrega = document.querySelector("[name=institucion_educativa]");

const institucionDondeEstudia = document.querySelector("[name=institucion_donde_estudia]");

const motivoReincidencia = document.querySelector("[name=motivoReincidencia]");

const observaciones = document.querySelector("[name = observaciones]");

const validateEmptyField = (message,e) => {
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


serialEquipoField.addEventListener("blur", (e) => validateEmptyField("Ingrese el serial del equipo", e));

serialCargador.addEventListener("blur", (e) => validateEmptyField("Ingrese el serial del cargador", e));

institucionEntrega.addEventListener("blur", (e) => validateEmptyField("Ingrese la institucion de recepcion del equipo", e));

institucionDondeEstudia.addEventListener("blur", (e) => validateEmptyField("Ingrese la institucion donde estudia", e));

motivoReincidencia.addEventListener("blur", (e) => validateEmptyField("Ingrese el motivo de reincidencia", e));

observaciones.addEventListener("blur", (e) => validateEmptyField("Ingrese las observaciones", e));

