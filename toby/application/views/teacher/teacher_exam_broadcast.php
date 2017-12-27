<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>		
		<link href="../application/style/assets/css/vendor/bootstrap/bootstrap.min.css" rel="stylesheet">
	</head>
    <body style="background:background-color;background-color: transparent;">
    	
 <div class="panel panel-danger" style="margin-top:20px">   	
<form class="form-horizontal" method="post" action="../teacher/broadcast_add">
    		
  <div class="form-group" style="width:80%;margin: 0 auto;margin-top: 70px;">
    <label style="margin-left: 0px;" class="col-sm-1 control-label">通知消息</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="content" id="tongzhi" placeholder="通知消息内容">
    </div>
  </div>
  <div class="col-sm-offset-2 col-sm-10"  style="width:80%;margin: 0 auto;margin-top: 20px;">
      <button type="submit" style="float: right;" class="btn btn-default">发布</button>
  </div>
</form>
  <div style="width:80%;margin: 0 auto;margin-top: 100px;">
<table class="table table-bordered" >
      <thead>
        <tr>
          <th width="45px" scope="row">序号</th>
          <th>通知消息内容</th>
		  <th width="150px">发布时间</th>
          <th width="50px">操作</th>
        </tr>
      </thead>
      <tbody>
        {% for v in data %}
        <tr>
          <th scope="row">{{ v.id }}</th>
          <td>{{ v.content }}</td>
          <td>{{ v.time }}</td>
          <td><a href="../teacher/broadcast_delete/{{ v.id }}">删除</a></td>
        </tr>
        {% endfor %}
      </tbody>
    </table>		
			<ul class="pagination" style="float: right;">
    <li><a href="#">&laquo;</a></li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#">&raquo;</a></li>
</ul>
</div>
</div>
 
	</body>
</html>
