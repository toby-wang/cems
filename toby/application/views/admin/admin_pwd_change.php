<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>修改密码</title>
		<link href="http://localhost/cems/toby/application/style/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">  
	</head>
	<body style="background:background-color;background-color: transparent;font-size: 18px;">
		<div align="center" id="add" style="background: transparent;">
    <form class="bs-example bs-example-form" role="form" method="post" action="http://localhost/cems/toby/admin/pwd_change">
    	<table cellpadding="5px">
    		<tr>
    			<td align="right">
    				<span style="color: white;">输入用户名</span>
    			</td>    			
    			<td align="right">
    				<input type="text" class="input-lg" placeholder="用户名" name="name" style="margin:15px;">
    			</td>    			
    		</tr>
    		
    	    		
    		
    		<tr>
    			<td align="right">
    				<span style="color: white;"> 输入原密码</span>
    			</td>   			
    			<td align="right">    				
    				<input type="password" class="input-lg" placeholder="密码" name="old_psw" style="margin:15px;">
    			</td>
    			
    		</tr>
    		
    		
    		
    		<tr>
    			<td align="right">
    				<span style="color: white;">输入修改后的密码</span>
    			</td>    			
    			<td align="right">
    				
    				<input type="password" class="input-lg" name="new_psw" placeholder="新密码" style="margin:15px;">
    			</td>    			
    		</tr>
    		
    		
    		<tr>
    			<td align="right">
    				<span style="color: white;">再次输入修改后的密码</span> 
    			</td>   			
    			<td align="right">
    				
    				<input type="password" class="input-lg" name="new_psw1" placeholder="重输新密码" style="margin:15px;">
    			</td>   			
    		</tr>
    		
    		
    		
        	<tr style="margin:15px;">
    			<td align="center">
    				<button type="submit" class="btn btn-success" style="margin:15px;">保存</button>
    			</td>   			
    			<td align="right">
    				
    				<button type="button" class="btn btn-danger" style="margin:15px;">重置</button>
    			</td>    			
    		</tr>
               
       
       </table>
    </form>
</div>
	</body>
</html>
