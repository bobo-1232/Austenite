function register(){
	var name = document.getElementById("name").value
	var username = document.getElementById("username").value;
	var password = document.getElementById("password").value;
	var vpassword = document.getElementById("vpassword").value;
	var letterNumber = /^[0-9a-zA-Z]+$/;
	var num = /^[0-9]+$/;
	var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,10}$/;

	if (name == ""){
		window.alert("Please enter your name")
	}

	if (username == ""){
		window.alert("Please enter usename")
	}

	else if ((username.length < 6) || (username.length > 10)){
		window.alert("Invalid username. Try again")
	}

	else if (!username.match(letterNumber)){
		window.alert("Invalid username. Try again")
	}

	else if (username.charAt(0).match(num)){
		window.alert("Invalid username. Try again")
	}

	if (password == ""){
		window.alert("Please enter password")
	}

	else if ((password.length < 6) || (password.length > 10)){
		window.alert("Invalid password. Try again")
	}

	else if (!password.match(passw)){
		window.alert("Invalid password. Try again")
	}

	if (vpassword !== password){
		window.alert("Password verification failed. Try again")
	}

	

}