<!--//<?php
//
//?>-->


<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>答案上传</title>
		<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
		<!--<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
	</head>

	<body style="background:background-color;background-color: transparent;">

		<div class="panel panel-danger">
			<div class="panel-heading">
				<h3 class="panel-title text-center">上传答案</h3>
			</div>
			<div class="panel-body" align="center">

				<form class="form-inline" role="form" class="text-center" action="" method="post">

					
					<table>
						<tr>
							<td>
								<input type="text" style="height: 30px;width:300px;margin:10px;">
							</td>
							<td>
								<input type="file" align="center" style="height: 30px;width:55px;margin:10px;"/>
							</td>
						</tr>
						<br><br />
						<tr>
							
							<td></td>
							<td>
								<!--<i type="submit" class="btn btn-default">提交</i>-->
								<button class="btn btn-danger" type="submit" style="border-radius: 15px; width: 60px;height: 40px;">提交</button>
								
							</td>
					
						</tr>
					</table>
					
						<br><br><br />
							

				</form>
				<br><br>
				<table border="1px" width="400px">
					<tr>
						<th>答案名称</th>
						<th>上传时间</th>
					</tr>
					<tr>
						<td>...</td>
						<td>...</td>
					</tr>
				</table>

			</div>
		</div>
		</div>

	</body>

</html>