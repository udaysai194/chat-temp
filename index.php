<!DOCTYPE html>
<html>
<head>
	<title>php chat app</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
		span{
			background-color: yellow;
			border-radius: 7px;
			padding: 1px 5px 1px 5px;
		}
		input, button{
			border-radius: 0px;
		}
		.chat-box {
			width: 100%;
			text-align: right;
			padding: 10px;
			background-color: lightblue;
			border-radius: 5px;
		}
		.chat-box div{
			margin: 3px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1 style="text-align: center;">CHAT APP</h1>
		<div class="chat-box" id="chat-box">
		</div>
		<div class="row" style="width: 100%;margin: auto;justify-content: space-between;">
			<input class="col-10 col-md-11" type="text" name="message" class="form-control" placeholder="message" id="msgInput">
			<button class="col-2 col-md-1" id="send" onclick ="msg()">send</button>
		</div>
	</div>
	<script>
		function msg() {
			if (document.getElementById('msgInput').value != '') {
				var div = document.createElement("div");
				var span = document.createElement("span");
				var message = document.getElementById("msgInput").value;
				var node = document.createTextNode(message);
				var element = document.getElementById("chat-box");
				element.appendChild(div).appendChild(span).appendChild(node);
				document.getElementById("msgInput").value = '';
			}else{}
		}

		var input = document.getElementById("msgInput");
			input.addEventListener("keyup", function(event) {
			    event.preventDefault();
			    if (event.keyCode === 13) {
			        document.getElementById("send").click();
			    }
			});
	</script>
</body>
</html>