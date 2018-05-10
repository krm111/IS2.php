function validate() {
	var usr = document.getElementById("txt_usr");
	var psw = document.getElementById("txt_psw");
	if (usr.value=="user@gmail.com") {
		if (psw.value=="123") {
			location="sgpf.html"
		}
		else {
			alert("Invalid Password")
		}
	} 
	else {
		alert("Invalid Email")
	}
}
