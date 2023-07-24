const serialEquipoField = document.querySelector("[name=serial_del_equipo]");

const serialCargador = document.querySelector("[name=serial_cargador]");

const institucionEntrega = document.querySelector("[name=institucion_educativa]");

const institucionDondeEstudia = document.querySelector("[name=institucion_donde_estudia]");

const observaciones = document.querySelector("[name = observaciones]");

const validateEmptyField = (e) => {
	const field = e.target;
	const fieldValue = e.target.value;
	if (fieldValue.length == 0) {
		field.classList.add("invalid");
		field.nextElementSibling.classList.add("error");
		field.nextElementSibling.innerText = `${field.name} es requerido`;	
	}else{
		field.classList.remove("invalid");
		field.nextElementSibling.classList.remove("error");
		field.nextElementSibling.innerText = "";
	}
}


serialEquipoField.addEventListener("blur", validateEmptyField);

serialCargador.addEventListener("blur", validateEmptyField);

institucionEntrega.addEventListener("blur", validateEmptyField);

institucionDondeEstudia.addEventListener("blur", validateEmptyField);

observaciones.addEventListener("blur", validateEmptyField);

