<!--//<?php
//
//?>-->


<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>答案上传</title>
		<link href="../application/style/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
		<!--<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
	</head>

	<body style="background:background-color;background-color: transparent;">

		<!-- div class="panel panel-danger">
			<div class="panel-heading"> -->
				
				<h3 class="text-center">上传答案</h3>
			<!-- </div> -->
			<div class="panel-body" align="center">

				<form class="form-inline" role="form" class="text-center" action="../student/student_upload_act" method="post" enctype="multipart/form-data">
							文件上传：
								<!-- <input type="text" style="height: 30px;width:300px;margin:10px;"> -->

				<div class="input-group input-group-lg">
            		<span class="input-group-addon glyphicon glyphicon-file"></span>
           			<input type="text" class="form-control" placeholder="请上传答案">
       			</div>
				<input type="file" name="file" align="center" style="display:inline-block;height: 30px;width:55px;margin:10px;">
					
								<br>
								<br>
						
								<!--<i type="submit" class="btn btn-default">提交</i>-->
				<button class="btn btn-danger" type="submit" style="border-radius: 15px; width: 80px;height: 40px;">提交</button>
								
						<br><br>
							

				</form>
				<br><br>
				<table class="table table-striped">
					<tr>
						<th>答案名称</th>
						<th>上传时间</th>
						<th>说明</th>
					</tr>
					<tr>
						<td>我的答案</td>
						<td>2017.11.10</td>
						<td>
							<a href="#">查看</a>
							<a href="#">删除</a>
						</td>
					</tr>
					<tr>
						<td>我的答案</td>
						<td>2017.11.10</td>
						<td>
							<a href="#">查看</a>
							<a href="#">删除</a>
						</td>
					</tr>
					<tr>
						<td>我的答案</td>
						<td>2017.11.10</td>
						<td>
							<a href="#">查看</a>
							<a href="#">删除</a>
						</td>
					</tr>
					<tr>
						<td>我的答案</td>
						<td>2017.11.10</td>
						<td>
							<a href="#">查看</a>
							<a href="#">删除</a>
						</td>
					</tr>
				</table>

			<!-- </div> -->
		</div>
		</div>

	</body>

</html>