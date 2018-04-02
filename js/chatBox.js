function msg() {
	if (document.getElementById('msgInput').value != '') {
		var div = document.createElement("div");
		var span = document.createElement("div");
		var message = document.getElementById("msgInput").value;
		var node = document.createTextNode(message);
		var element = document.getElementById("chat-box");
		element.appendChild(div).appendChild(span).appendChild(node);
		document.getElementById("msgInput").value = '';
		var element = document.getElementById("chat-box");
		element.scrollTop = element.scrollHeight;
	}else{}
	}

var input = document.getElementById("msgInput");
	input.addEventListener("keyup", function(event) {
    	event.preventDefault();
    	if (event.keyCode === 13) {
        	document.getElementById("send").click();
    	}
	});

