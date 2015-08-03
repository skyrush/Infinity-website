window.onload = function(){ 
	//Get submit button
	var submitbutton = document.getElementById("tfq");
	//Add listener to submit button
	if(submitbutton.addEventListener){
		submitbutton.addEventListener("click", function() {
			if (submitbutton.value == 'Search our website'){//Customize this text string to whatever you want
				submitbutton.value = '';
			} else if (submitbutton.value == 'Username or email address'){
				submitbutton.value = '';
			} else if (submitbutton.value == 'password'){
				submitbutton.value = '';
			} else if (submitbutton.value == 'name'){
				submitbutton.value = '';
			} else if (submitbutton.value == 'email'){
				submitbutton.value = '';
			}
		});
	}
}