 
function sendMsgs(){
	var temp = document.getElementById("input").value;
	console.log(temp);
	addUserElements(temp);
	relevant();
	document.getElementById("input").value = "";
}
