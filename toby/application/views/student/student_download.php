<!--//<?php
//
//?>-->


<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>试卷下载</title>
		<link href="../application/style/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">



	</head>

	<body style="background:background-color;background-color: transparent;">
		
		<div class="header">
			
			<h3 class="text-center"><span>******</span>考试进行中</p></h3>
			<br><br>
			
		</div>

		<!-- <div class="panel panel-danger">
			<div class="panel-heading"> -->
				<h3 class="panel-title text-center text-danger">下载情况</h3>
			<!-- </div> -->
			<div class="panel-body">
			<table class="table table-hover">
				<caption>可下载试卷</caption>
				<thead>
					<tr>
						<th>名称</th>
						<th>上传时间</th>
						<th>上传老师</th>
						<th>说明</th>
					</tr>
				</thead>
				<tbody align="left">
					{% for v in data %}
                        <tr>
        			    	<td>{{ v.subject }}</td>
							<td>{{ v.BeginTime }}</td>
							<td></td>
							<td>
								<a href="../{{ v.path }}">下载</a>
							</td>
                        </tr>  
                    {% endfor %}				
				</tbody>
			</table>			
				<P hidden="hidden">当前没有可下载的电子试卷...</P>
				<!-- <button hidden="hidden" class="btn btn-danger" style="border-radius: 15px;">退出系统</button> -->

			</div>
		</div>
		<!-- </div> -->

	</body>

</html>