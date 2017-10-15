 
function sendMsgs(){
	var temp = document.getElementById("input").value;
	console.log(temp);
	addUserElements(temp);
	relevant();
	document.getElementById("input").value = "";
}
function onEnter(event){
	if(event.keyCode == 13){
		sendMsgs();
		var area = document.getElementById("msgs")
		area.scrollTo(0,area.scrollHeight);
	}
}
window.addEventListener("keydown", onEnter);
