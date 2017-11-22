<!DOCTYPE html>
<html>
  <head>
    <title>管理员页面</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />

<link href="../application/style/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">



</style>
    
    </head>
    <body style="background:background-color;background-color: transparent;">
    


<!--<button type="button" class="btn btn-primary btn-lg">
  <span class="glyphicon glyphicon-user"></span> User
</button>-->


<div align="center" id="add">
    	<table>
    		<h4 align="center">添加单个学生</h4>
    		 <form class="bs-example bs-example-form" role="form" action="../teacher/student_add_one" method="post">
            <tr>
                <td align="right" colspan="2">
                    <span class="glyphicon glyphicon-star" class="label"></span> ID
                </td>
                
                <td colspan="2">
                    
                    <input type="text" class="input-lg" placeholder="学号" name="sid"style="margin:10px;">
                </td>
                
            </tr>
            <tr>
                <td align="right" colspan="2">
                     <span class="glyphicon glyphicon-user" class="label"></span> Name
                </td>
                
                <td colspan="2">
                    
                    <input type="text" class="input-lg" placeholder="姓名" name="sname" style="margin:10px;">
                </td>
                
            </tr>
            <tr>
                <td align="right" colspan="2">
                    <span class="glyphicon glyphicon-home" class="label"></span> Class
                </td>
                <td colspan="2">
                    <input type="text" class="input-lg" placeholder="班级" style="margin:10px;">
                </td>
            </tr>
            <tr>
                <td align="right" colspan="2">
                    <span class="glyphicon glyphicon-lock" class="label"></span> subject
                </td>
                <td colspan="2">
                    <input type="text" class="input-lg" name="subject" placeholder="科目" style="margin:10px;">
                </td>
            </tr>
            <tr>
                <td align="right" colspan="2">
                    <button type="submit" class="btn btn-success" style="margin:10px;">添加</button>
                </td>
                
                <td align="center" colspan="2">
                    
                    <button type="button" class="btn btn-danger" style="margin:10px;">重置</button>
                </td>
                
            </tr>
        </form>
    		
        <tr>
        	<td>学生ID：</td>
        	<td><span></span></td>
        </tr>
       
            <tr>
    			<td align="right" colspan="2">
    				<button type="button" class="btn btn-success" style="margin:10px;">查找</button>
    			</td>
    			
    			<td align="center" colspan="2">
    				
    				<button type="button" class="btn btn-danger" style="margin:10px;">重置</button>
    			</td>
    			
    		</tr>
       </table>
</div>	

  </body>
</html>
      
