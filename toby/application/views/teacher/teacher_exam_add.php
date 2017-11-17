<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link href="../application/style/assets/css/vendor/bootstrap/bootstrap.min.css" rel="stylesheet">
		<title></title>
	</head>
    <body style="background:background-color;background-color: transparent;">
    	
    	<form class="form-inline" style="width:80%;margin: 0 auto;" method="post" action="../teacher/exam_add_cate" enctype="multipart/form-data">
    <h3 align="left">添加考试</h3>	

		
		<div class="form-group" style="float:right; ">
      <div class="form-group">
        <label class="sr-only" for="exampleInputEmail3">考试名称</label>
        <input class="form-control" name="exam_name" id="exampleInputEmail3" placeholder="考试名称" >
      </div>
      <div class="form-group">
        <label class="sr-only" for="exampleInputPassword3">考试时间</label>
        <input class="form-control" name="begin_time" id="exampleInputPassword3" placeholder="考试时间">
        <input type="file" name="file" id="">
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" name="auto_start"> 自动开始
        </label>
      </div>
      <button type="submit" class="btn btn-default">添加</button>
    </div> 
  </form>  


		
<div style="width:80%;margin: 0 auto;margin-top: 100px;">
<table class="table table-striped" >
      <thead>
        <tr>
        <th>考试名称</th>
				<th >考试时间</th>
				<th >创建人</th>
				<th >上传试卷</th>
				<th >自动开始</th>
				<th >进行中</th>
				<th >已结束</th>
				<th >已归档</th>
				<th >已清理</th>
				<th >编辑</th>
        </tr>
      </thead>
      <tbody>
        {% for v in data %}
        <tr>
          <th scope="row">{{ v.examnation }}</th>
          <td>{{ v.BeginTime }}</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
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
			
</body>
</html>
