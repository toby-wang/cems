<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link href="../application/style/assets/css/vendor/bootstrap/bootstrap.min.css" rel="stylesheet">
		<title></title>
	</head>
    <body style="background:background-color;background-color: transparent;">
    	
    	<form class="form-inline" style="width:80%;margin: 0 auto;" method="post" action="" enctype="multipart/form-data">
    <h3 align="left">开启考试</h3>	

		
		<div class="form-group" style="float:right; ">
      <div class="form-group">
        <label class="sr-only" for="exampleInputEmail3">考试名称</label>
        <input class="form-control" name="exam_name" id="exampleInputEmail3" placeholder="考试名称" >
      </div>
      <button type="submit" class="btn btn-default">启动</button>
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
				<th >已清理</th>
				<th >编辑</th>
        </tr>
      </thead>
      <tbody>
        {% for v in data %}
        <tr>
          <th scope="row">{{ v.subject }}</th>
          <td>{{ v.BeginTime }}</td>
          <td>{{ v.creater }}</td>
          <td>{{ v.examnation }}</td>
          <td>
          {% if v.IsAuto == '1' %}
                 是
          {% elseif v.IsAuto == '0' %}
                 否
          {% endif %} 
          </td>
          <td>
          {% if v.IsBegin == '1' %}
                 是
          {% elseif v.IsBegin == '0' %}
                 否
          {% endif %} 
          </td>
          <td>true</td>
          <td>true</td>
<<<<<<< HEAD
          <td>true</td>
          <td><a href="../teacher/teacher_exam_edit">编辑</a></td>
          <td><a href="#">删除</a></td>       
        </tr>


        <tr>
          <th scope="row">Java</th>
          <td>2017/11/17</td>
          <td>李老师</td>
          <td>Java考试</td>
          <td>true</td>
          <td>true</td>
          <td>true</td>
          <td>true</td>
          <td><a href="#">编辑</a></td>
          <td><a href="#">删除</a></td>       
        </tr>
       
=======
          <td><a href="../teacher/teacher_exam_edit/{{ v.id }}">编辑</a></td>
          <td><a href="../teacher/exam_delete/{{ v.id }}">删除</a></td>
        </tr>
        {% endfor %}
>>>>>>> 8befc4552dd4253f220040749e8ab9c6924bb36f
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
