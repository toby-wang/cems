<!DOCTYPE html>
<html>
  <head>
    <title>管理员页面</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />

    <link href="../application/style/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">   
    </head>
    <body style="background:background-color;background-color: transparent;font-size: 18px;">
    

<div align="center" id="add" style="background: transparent;">
    <form class="bs-example bs-example-form" role="form" action="../admin/add_cate" method="post">
    	<table cellpadding="5px">
    		<tr>
    			<td align="right">
    				<span class="glyphicon glyphicon-user" class="label"></span> User
    			</td>
    			
    			<td align="right">
    				
    				<input type="text" class="input-lg" placeholder="用户名" name="name" style="margin:15px;">
    			</td>
    			
    		</tr>    		
    		<tr>
    			<td align="right">
    				<span class="glyphicon glyphicon-lock" class="label"></span> Psw
    			</td>
    			
    			<td align="right">
    				
    				<input type="password" name="psw" class="input-lg" placeholder="密码" style="margin:15px;">
    			</td>
    			
    		</tr>
    		
        <tr align="center">
        	<td>
        	設置為：
        	</td>
        	<td>
           <select class="form-control" name="type" style="height: 45px;width: 200px;" style="margin:15px;">
                <option value="0">普通教师</option>
                <option value="1">管理员</option>   
           </select>
          </td>
        </tr>
 
     		<tr style="margin:15px;">
    			<td align="center">
    				<input type="submit" class="btn btn-success" style="margin:15px;" value="保存">
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
      
