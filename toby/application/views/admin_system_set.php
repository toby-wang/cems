<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body style="background:background-color;background-color: transparent;font-size: 14px;color: white;">
        <h3 align="center">修改系统配置</h3>
        <form >
        	<table align="center" cellpadding="8px">
        		<tr>
        			<td>后台任务间隔时间</td>
        			<td>
        				<input type="text" style="height: auto;width: 200px;" />
        			</td>
        		</tr>
        		<tr style="margin-bottom:15px;">
        			<td></td>
        			<td>制定扫描考试信息的间隔时间，单位为分钟</td>
        		</tr>
        		
        		<tr>
        			<td>分页查询记录条数</td>
        			<td>
        				<input type="text" style="height: auto;width: 200px;" />
        			</td>
        		</tr>
        		<tr style="margin-bottom:15px;">
        			<td></td>
        			<td>指定分页查询时每页显示记录数的默认值（查询页面中可以更改）</td>
        		</tr>
        		
        		<tr>
        			<td>手工开启考试时间阈值</td>
        			<td>
        				<input type="text" style="height: auto;width: 200px;" />
        			</td>
        		</tr>
        		<tr style="margin-bottom:15px;margin-top: 15px;">
        			<td></td>
        			<td>指定手工开启考试时允许的最大提前量，单位为分钟</td>
        		</tr>
        		
        		<tr>
        			<td>上传文件字节数下限</td>
        			<td>
        				<input type="text" style="height: auto;width: 200px;" />
        			</td>
        		</tr>
        		<tr style="margin-bottom:15px;margin-top: 15px;">
        			<td></td>
        			<td>制定上传文件的长度下限（字节），低于此值发出警告</td>
        		</tr>
        		
        		<tr>
        			<td>上传文件字节数上限</td>
        			<td>
        				<input type="text" style="height: auto;width: 200px;" />
        			</td>
        		</tr>
        		<tr style="margin-bottom:15px; padding-bottom: 20px;">
        			<td></td>
        			<td>制定上传文件的长度上限（字节），高于此值发出警告</td>
        		</tr>
        		
        		<tr>
        			<td align="right">
        				<input type="checkbox" />
        			</td>
        			<td>教师可以清理和删除考试</td>
        		</tr>
        		
        		<tr>
        			<td align="right">
    				<button type="button" style="margin:15px;background-color: #22E1BB;">修改</button>
    			</td>   			
    			<td align="center">    				
    				<button type="button" style="margin:15px;background-color: #00BFFF; ">取消</button>
    			</td>    			
    		</tr>
        		</tr>
        	</table>
        </form>
	</body>
</html>
