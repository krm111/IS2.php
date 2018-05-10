//string for entry (show)
var string1 = "";

//calculate value
function calculate(){		
 
	var entry1 = document.getElementById("txt_entry");			
	var str1 = (string1 === "") ?  entry1.value : "(" + string1 + ")" + entry1.value;							

	try{
		var result1 = eval(str1);					
		document.getElementById("p_result").innerHTML = result1;
		entry1.value = "";
		string1 = str1;
		document.getElementById("p_string").innerHTML = string1;
	}catch(err){					
		alert("Syntax Error");				
	}
 
}

//delete string 
function del(){
	var entry1 = document.getElementById("txt_entry");			
	entry1.value = "";		
	string1 = "";			
	document.getElementById("p_result").innerHTML = "0";
	document.getElementById("p_string").innerHTML = string1;
}

//Identification Enter and Esc
function identification_key(event){
	// Verification Press "Enter"
	if(event.keyCode==13){
		calculate();		
	// Verification Press "Esc"				
	}else if(event.keyCode==27){
		del();
	}
}

//Key Press (Calculator Buttons)
function key(text1){
	var entry1 = document.getElementById("txt_entry");
	entry1.value+=text1;
}

