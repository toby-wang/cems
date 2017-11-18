<!DOCTYPE html>
<html>
<<<<<<< HEAD
  <head>
    <meta charset="UTF-8">
    <link href="../application/style/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../application/style/bootstrap-3.3.7-dist/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <script src="../application/style/bootstrap-3.3.7-dist/js/jquery-3.2.1.min.js"></script>  
    <script src="../application/style/bootstrap-3.3.7-dist/js/bootstrap-datetimepicker.min.js"></script>  
    <script src="../application/style/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>  
  
  

    <title></title>
  </head>
    <body style="background:background-color;background-color: transparent;">
      
<div style="width:80%;margin: 0 auto;margin-top: 70px;">
      <h3 align="center">添加考试</h3>  
      <form class="form-horizontal" role="form" style="margin-top:50px;">
        <div class="form-group">
          <label for="firstname" class="col-sm-2 control-label">班级名称</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" id="firstname" placeholder="请输入班级">
          </div>
        </div>
        <div class="form-group">
           <label for="lastname" class="col-sm-2 control-label">考试内容</label>
           <div class="col-sm-10">
             <input type="text" class="form-control" id="lastname" placeholder="请输入科目">
           </div>
        </div>
  <div class="form-group">
    <label for="firstname" class="col-sm-2 control-label">开始时间</label>
    <div class="col-sm-10">
    <input  type="text" value="2017-11-10 18:00" readonly class="form_datetime form-control">    
=======
	<head>
		<meta charset="UTF-8">
		<link href="../application/style/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="../application/style/bootstrap-3.3.7-dist/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
		<script src="../application/style/bootstrap-3.3.7-dist/js/jquery-3.2.1.min.js"></script>  
		<script src="../application/style/bootstrap-3.3.7-dist/js/bootstrap-datetimepicker.min.js"></script>  
		<script src="../application/style/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>  
  
  

		<title></title>
	</head>
    <body style="background:background-color;background-color: transparent;">
    	
<div style="width:80%;margin: 0 auto;margin-top: 70px;">
	<h3 align="center">添加	考试</h3>	
<form class="form-horizontal" role="form" style="margin-top:50px;" method="post" action="../teacher/exam_add_cate" enctype="multipart/form-data">
  <div class="form-group">
    <label for="firstname" class="col-sm-2 control-label">班级名称</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="class" id="firstname" placeholder="请输入班级">
    </div>
  </div>
  <div class="form-group">
    <label for="lastname" class="col-sm-2 control-label">考试科目</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="lastname" name="subject" placeholder="请输入科目">
    </div>
  </div>
  <div class="form-group">
    <label for="firstname" class="col-sm-2 control-label">开始时间</label>
    <div class="col-sm-10">
		<input  type="text" value="2017-11-10 18:00" name="begin_time" readonly class="form_datetime form-control">    
>>>>>>> 8befc4552dd4253f220040749e8ab9c6924bb36f
    </div>
  </div>  

  <div class="form-group">
    <label for="lastname" class="col-sm-2 control-label">结束时间</label>
    <div class="col-sm-10">
<<<<<<< HEAD
      <input  type="text" value="2017-11-10 18:00" readonly class="form_datetime form-control">
=======
      <input  type="text" value="2017-11-10 18:00" name="end_time" readonly class="form_datetime form-control">
>>>>>>> 8befc4552dd4253f220040749e8ab9c6924bb36f
    </div>
  </div>
  <div class="form-group">
    <label for="firstname" class="col-sm-2 control-label">自动开启</label>
    <div class="col-sm-10">
<<<<<<< HEAD
      <input type="radio" id="inlineCheckbox2" value="1" checked="checked"> 是
      <input type="radio" id="inlineCheckbox2" value="0"> 否
=======
      <input type="radio" id="inlineCheckbox2" name="auto" value="1" checked="checked"> 是
      <input type="radio" id="inlineCheckbox2" name="auto" value="0"> 否
>>>>>>> 8befc4552dd4253f220040749e8ab9c6924bb36f
    </div>
  </div>
  <div class="form-group">
    <label for="firstname" class="col-sm-2 control-label">考试文件</label>
    <div class="col-sm-10">
<<<<<<< HEAD
    <input type="file" id="exampleInputFile">    
=======
 		<input type="file" name="file" id="exampleInputFile">    
>>>>>>> 8befc4552dd4253f220040749e8ab9c6924bb36f
    </div>
  </div>

  <div class="form-group right">
<<<<<<< HEAD
    <div style="float:right;">
      <button type="submit" class="btn btn-default">添加</button>
    </div>
  </div>
</form>
  
</div>         
     
    <script type="text/javascript">
      $(".form_datetime").datetimepicker({

    　　    format: "yyyy-mm-dd hh:ii", //选择日期后，文本框显示的日期格式
    　　    language: 'zh-CN', //汉化
    　　    autoclose:true, //选择日期后自动关闭
        pickerPosition: "bottom-right"
      });
=======
    <div class="col-sm-offset-11 col-sm-10">
      <button type="submit" class="btn btn-default">SUBMIT</button>
    </div>
  </div>
</form>
	
</div>         
     
    <script type="text/javascript">
    	$(".form_datetime").datetimepicker({
    　　		format: "yyyy-mm-dd hh:ii", //选择日期后，文本框显示的日期格式
    　　		language: 'zh-CN', //汉化
    　　		autoclose:true, //选择日期后自动关闭
     		pickerPosition: "bottom-right"
    	});
>>>>>>> 8befc4552dd4253f220040749e8ab9c6924bb36f
       
    </script>               
    </body>
</html>
