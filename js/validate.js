//валидация параметров 
let x;

let Xbuttons = document.querySelectorAll('#Xbutton');
[].forEach.call( Xbuttons, function(button) {
    button.onclick = function() {
    	for (let i = 0; i < Xbuttons.length; i++) {
                Xbuttons[i].style.backgroundColor = "#00BBD6";
            }
    	x = button.value;
    	document.getElementById("hiddenbutton").value = button.value;

    	this.style.backgroundColor = "#94E0E0";
    }
});

const borders = [];
borders["Y"] = ["-5", "3"];

function validate(form) {

	let X = x;
	let Y = form.Y.value.replace("," , ".");
	let R = form.R.value;

	form.Y.value = Y;

	let valid = true;

	if (!isPresented(X, "X")) {
		valid = false;
	}
	if (!(isPresented(Y, "Y") && validateParam(Y, "Y"))) {
		valid = false;
	}
	if (!isPresented(R, "R")) {
		valid = false;
	}

	form.uniqid.value = ID();
	return valid;
	
}

function isPresented(param, paramName) {
	if (param == "" || param == null) {
		showWarning(paramName + " должен быть указан", paramName);
		return false;
	} else {
		showWarning("", paramName);
	}

	return true;
}

function validateParam(param, paramName) {
	if (!(!isNaN( Number(param) ) && param.lastIndexOf('.') != (param.length - 1))) {
		showWarning(paramName + " должен быть числом", paramName);
		return false;
	} else {
		showWarning("", paramName);
	}
	let bottomBorder = borders[paramName][0];
	let topBorder = borders[paramName][1];

	if (!(Number(param) > bottomBorder && Number(param) < topBorder)) {
		showWarning(paramName + " не входит в необходимый диапазон (" + bottomBorder + " ... " + topBorder +")", paramName);
		return false;
	} else {
		showWarning("", paramName);
	}
	
	return true;
}

function showWarning(warningMessage, paramName) {
	
	let warningContainer = document.getElementById("warning-container-" + paramName);
	
	if (warningContainer != null) {
		warningContainer.textContent = warningMessage;
	}
	
}

function ID() {
  return '_' + Math.random().toString(36).substr(2, 9);
}