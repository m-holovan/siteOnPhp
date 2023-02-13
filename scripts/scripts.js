function validateForm() {
	var re = /\s/;
	var re2 = /^\s*$/;
	var login = document.forms["autoriz"]["log"].value;
	var firstPass = document.forms["autoriz"]["pass"].value;
	var repeatPass = document.forms["autoriz"]["passAgain"].value;
	

	if(re2.test(login,firstPass,repeatPass) == true){
		alert("Error! Fields login or password are empty!");
		return false;
	}
	if(firstPass != repeatPass){
		alert("Passwords are not the same");
		return false;
	}
	if(login.length && firstPass.length < 4){
		alert("Error! Login or password must be more than 4 characters!");
		return false;
	}
	if(re.test(login) == true){
		alert("Error! Login must be without space!");
		return false;
	}
	else{
		alert("Evrything alright");
	}
}