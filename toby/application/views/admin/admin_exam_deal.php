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
			<tr>
				<td width="90px" align="center">考试名称</td>
				<td width="90px" align="center">考试时间</td>
				<td width="60px" align="center">创建人</td>
				<td width="70px" align="center">上传试卷</td>
				<td width="70px" align="center">自动开始</td>
				<td width="50px" align="center">进行中</td>
				<td width="50px" align="center">已结束</td>
				<td width="50px" align="center">已归档</td>
				<td width="50px" align="center">已清理</td>
				<td width="50px" align="center">编辑</td>
			</tr>
			
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
		</table>
	</form>
    
    </body>
</html>
