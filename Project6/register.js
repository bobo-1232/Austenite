function infovalidate(){
	var xhttp;
	var fname = document.getElementById("fname").value;
	var lname = document.getElementById("lname").value;
	var username = document.getElementById("username").value;
	var password = document.getElementById("password").value;
	//document.getElementById("result1").innerHTML = username;

	xhttp = new XMLHttpRequest();

	xhttp.onreadystatechange = function(){
		if(xhttp.readyState == 4){
			document.getElementById("result").innerHTML = this.responseText;
		}
	}
    
    //xhttp.open("GET", "register.php?username=" + username + "&password=" + password, true);
    xhttp.open("GET", "register.php?fname=" + fname + "&lname=" + lname + "&username=" + username + "&password=" + password, true);
	xhttp.send();
}