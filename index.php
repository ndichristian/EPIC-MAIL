<!DOCTYPE html>
<html>
<head>
	<title>live chat</title>
	<script >
		function submitchat(){
			if(form1.uname.value ==''||form1.msg.value ==''){
				alert("all fields are mandatory!");
			}
			var uname = form1.uname.value;
			var msg = form1.msg.value;
			var xmlhttp= new xmlhttprequest();

			xmlhttp.onreadystatechange = function(){
				if(xmlhttp.readystate == 4 && xmlhttp.status == 200){
					document.getElementByid('chatlogs') .innerhtml =xmlhttp.responsetext;
				}

			}
			xmlhttp.open('get,''insert.php?uname='+uname+'&msg='+msg,true);
			xmlhttp.send();
		}
	</script>
</head>
<body style="background: gray">
<div align="center">
<form name="form1">
	enter your name:<input type="text" name="uname"><br>
	your message:<textarea name="msg"></textarea><br>
	<a href="#" onclick="submitchat()">send</a><br><br>
	
	<div id="chatlogs">
		loading chatlog please wait...
	</div>
</form>
</div>
</body>
</html>