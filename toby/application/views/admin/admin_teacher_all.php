<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body style="background:background-color;background-color: transparent;font-size: 18px;">
		{% for v in data %}  
            姓名:{{ v.name }}<br>
            密码:{{ v.password }}<br>
        {% endfor %}  
	</body>
</html>
