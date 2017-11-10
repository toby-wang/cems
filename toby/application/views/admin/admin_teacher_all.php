<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body style="background:background-color;background-color: transparent;font-size: 18px;">
        <form method="" action="">
        	<table border="2" align="center" style="margin-top: 100px;">
        		<thead>
        			<tr>
        			     <th width="100px">姓名</th>
        			     <th width="100px">密码</th>
        			</tr>
        		</thead>
        		<tbody>
                                {% for v in data %}
                                <tr>
        			     <th>{{ v.name }}</th>
        			     <th>{{ v.password }}</th>
                                </tr>  
                                {% endfor %} 
        		</tbody>
        	</table>
        </form>
	</body>
</html>
