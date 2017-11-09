<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

	</head>
    <body style="background:background-color;background-color: transparent;">
    	<form method="post" action="">
    		<div align="center" style="width: 600px;height: 100px;">
    			<h3 align="center">按学生查找已登录信息 </h3>
    			<input type="text" placeholder="学号"/>
    			<input type="text" placeholder="姓名" />
    			<input type="text" placeholder="班级" />
    			<input type="button" class="glyphicon glyphicon-search" value="查找" />
    		</div>
    		<div align="center" style="width:600px;height: 100px;">
    			<h3 align="center">按IP查找已登录信息 </h3>
    			<input type="text" placeholder="IP" />
    			<input type="button" class="glyphicon glyphicon-search" value="查找" />
    		</div>
    		<div align="center" style="width: 600px;height: 100px;">
    			<h3 align="center">查找结果</h3>
    		<table border="2"  style="width: 500px;">
    			<thead>
    				<tr>
    					<th>学号</th>
    					<th>姓名</th>
    					<th>班级</th>
    					<th>IP地址</th>
    				</tr>
    			</thead>
    			<tbody>
    				<tr>
    					<td></td>
    					<td></td>
    					<td></td>
    					<td></td>
    				</tr>
    			</tbody>
    		</table>
    		</div>
    	</form>
	</body>
</html>
