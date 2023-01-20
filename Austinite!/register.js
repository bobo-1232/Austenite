document.getElementById("register").onclick = verification;

function verification() {
	var registration = document.getElementById("registration");
	var username = registration.user.value;
	var password = registration.psw.value;
	var password_repeat = registration.psw2.value;

	if (username.length > 10 || username.length < 6 || !/^[A-Za-z0-9]*$/.test(username) || !isNaN(username.charAt(0))) {
		alert("Invalid username or password")
	}
	else if (password != password_repeat || password.length > 10 || password.length < 6 || !/^[A-Za-z0-9]*$/.test(password) || (!/\d/.test(password) || !/[a-z]/.test(password) || !/[A-Z]/.test(password))) {
		alert("Invalid username or password")
	}
	else {
		alert("User validated")

	}
}