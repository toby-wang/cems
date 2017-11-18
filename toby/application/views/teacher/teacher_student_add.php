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
<div align="center" id="add">
    	<table>
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
    			<tr>
    			<td align="right" colspan="2">
    				<span class="glyphicon glyphicon-lock" class="label"></span> Major
    			</td>
    			<td colspan="2">
    				
    				<input type="text" class="input-lg" placeholder="专业" style="margin:10px;">
    			</td>
    		</tr>
     		<tr>
    			<td align="right" colspan="2">
    				<button type="submit" class="btn btn-success" style="margin:10px;">保存</button>
    			</td>
    			
    			<td align="center" colspan="2">
    				
    				<button type="button" class="btn btn-danger" style="margin:10px;">重置</button>
    			</td>
    			
    		</tr>
        </form>
    	<br />
    	<br />
    	<br />
    	<br />
        <form action="../teacher/student_add" method="post" enctype="multipart/form-data">
        <tr>
          <td></td>
        	<td align="right" colspan="2">
        		   <input id="showFile" type="text" style="height: 30px;width:300px;margin:10px;"/>
        	</td>
        	<td >
        		<input onchange="handleFile()" id="chooseFile" type="file" align="center" name="file" style="height: 30px;width:55px;margin:10px;"/>
        	</td>
        </tr>
       
       <tr>
    			<td align="right" colspan="2">
    				<button type="submit" class="btn btn-success" style="margin:10px;">保存</button>
    			</td>
    			
    			<td align="center" colspan="2">
    				
    				<button type="button" class="btn btn-danger" style="margin:10px;">重置</button>
    			</td>
    			
    		</tr>
        </form>
       </table>
</div>	


  </body>

  <script type="text/javascript">
      function handleFile(){
        var c = document.getElementById("chooseFile");
        var s = document.getElementById("showFile");
        s.value = c.value;
      }

  </script>
</html>
      
