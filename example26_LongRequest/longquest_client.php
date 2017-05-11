<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
Test: <input type="text" id="txtTest" />
<hr>
<div id="debug"></div>

<script>
	var data = " \r\n";
	var xhr = new XMLHttpRequest();
	//true為同步
	xhr.open("GET", "longrequest_server.php", true);
	xhr.onprogress = function (e) {
		// document.getElementById("debug").innerHTML = xhr.responseText;
		responseText = xhr.responseText;
		lastEvent = responseText.replace(data, "");
		document.getElementById("debug").innerHTML = lastEvent;
		// JSON.parse把JSON變物件
		 obj = JSON.parse(lastEvent);
		 document.getElementById("debug").innerHTML = obj.data + "%";
		data = responseText;
	}
	xhr.send(null);
</script>

</body>
</html>