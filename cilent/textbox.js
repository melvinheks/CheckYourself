function addBotElements(x){
	var addDiv = document.createElement("div");
	var tex = document.createTextNode(x);
	addDiv.appendChild(tex);
        addDiv.className = "botelem";
	document.getElementById("msgs").append(addDiv);
	document.getElementById("msgs").scrollTop = 100;
}
function addUserElements(x){
	var addDiv = document.createElement("div");
	var tex = document.createTextNode(x);
	addDiv.appendChild(tex);
        addDiv.className = "userelem";
	document.getElementById("msgs").append(addDiv);
	document.getElementById("msgs").scrollTop = 100;
}
function relevant(){
	var symptoms = document.getElementById("input").value.split(" ");
	var arr = [];
	for(var i=0;i<symptoms.length;i++){
		symptoms[i] = symptoms[i].trim();
		if(symptoms[i].charAt(symptoms[i].length-1) == 's' &&
			symptoms[i].charAt(symptoms[i].length-2) != 's' )
				symptoms[i] = symptoms[i].substring(0,symptoms[i].length-1);
	}
	for(var i=0;i<symptoms.length;i++){
		var s = symp[symptoms[i]];
		if(s){
			//console.log(s);
			for(var j=0;j<s.length;j++){
				if(!arr[s[j]])
					arr[s[j]] = 1;
				else
					arr[s[j]] += 1;
			}
		}
	}
	sorted = Object.keys(arr);
	for(var i=0;i<sorted.length;++i){
		for(var j=i+1;j<sorted.length;++j){
			if(arr[sorted[i]] < arr[sorted[j]]){
				var temp = sorted[i];
				sorted[i] = sorted[j];
				sorted[j] = temp;
			}
		}
	}
	if(sorted.length >0){
		addBotElements("These are the list of possible illness:");
		for(var i=0,j=(sorted.length<3)?sorted.length:3;i<3 && i<j;++i){
			addBotElements(sorted[i]);
		}
	}
	else{
		addBotElements("I'm sorry I cannot tell what your illness is. Please see a doctor for a better analysis.");
	}
}
