<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
    <body style="background:background-color;background-color: transparent;">
	<form >
		<table align="center">
			<tr>
				<h3 align="center">添加考试</h3>
			</tr>
			<tr>
				<td>
					<input type="text"  placeholder="考试名称*"  />
				</td>
				<td>
					<input type="date"  placeholder="考试时间*" />
				</td>
				<td>
					<input type="checkbox" />自动开始
				</td>
				<td>
					<input type="button" id="teacher_exam_add" value="添加"
						style="font-size: 16px;background-color:#008000 ;color: white;" />
				</td>
			</tr>
			<tr style="height: 20px;"></tr>
		</table>
		
		<table align="center" border="1" style="border:double">
			<thead>
			<tr>
				<th width="90px" align="center">考试名称</th>
				<th width="90px" align="center">考试时间</th>
				<th width="60px" align="center">创建人</th>
				<th width="70px" align="center">上传试卷</th>
				<th width="70px" align="center">自动开始</th>
				<th width="50px" align="center">进行中</th>
				<th width="50px" align="center">已结束</th>
				<th width="50px" align="center">已归档</th>
				<th width="50px" align="center">已清理</th>
				<th width="50px" align="center">编辑</th>
			</tr>
			</thead>
			<tbody>
			<tr height="20px">
				<td></td>
				<td></td>
				<td></td>				
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>	
				<td></td>
			</tr>
			</tbody>
		</table>
	</form>
    
    </body>
</html>
