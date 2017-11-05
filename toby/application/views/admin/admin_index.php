<!DOCTYPE html>
<html>
  <head>
    <title>管理员页面</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />
    
    <link rel="icon" type="image/ico" href="http://tattek.com/minimal/assets/images/favicon.ico" />
    <!-- Bootstrap -->
    <link href="http://localhost/cems/toby/application/style/assets/css/vendor/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/cems/toby/application/style/assets/css/vendor/animate/animate.min.css">
    <link type="text/css" rel="stylesheet" media="all" href="http://localhost/cems/toby/application/style/assets/js/vendor/mmenu/css/jquery.mmenu.all.css" />
    <link rel="stylesheet" href="http://localhost/cems/toby/application/style/assets/js/vendor/videobackground/css/jquery.videobackground.css">
    <link rel="stylesheet" href="http://localhost/cems/toby/application/style/assets/css/vendor/bootstrap-checkbox.css">

    <link rel="stylesheet" href="http://localhost/cems/toby/application/style/assets/js/vendor/rickshaw/css/rickshaw.min.css">
    <link rel="stylesheet" href="http://localhost/cems/toby/application/style/assets/js/vendor/morris/css/morris.css">
    <link rel="stylesheet" href="http://localhost/cems/toby/application/style/assets/js/vendor/tabdrop/css/tabdrop.css">
    <link rel="stylesheet" href="http://localhost/cems/toby/application/style/assets/js/vendor/summernote/css/summernote.css">
    <link rel="stylesheet" href="http://localhost/cems/toby/application/style/assets/js/vendor/summernote/css/summernote-bs3.css">
    <link rel="stylesheet" href="http://localhost/cems/toby/application/style/assets/js/vendor/chosen/css/chosen.min.css">
    <link rel="stylesheet" href="http://localhost/cems/toby/application/style/assets/js/vendor/chosen/css/chosen-bootstrap.css">

    <link href="http://localhost/cems/toby/application/style/assets/css/minimal.css" rel="stylesheet">
  </head>
  <body class="bg-1">
    <!-- Wrap all page content here -->
    <div id="wrap">
      <!-- Make page fluid -->
      <div class="row">
         <!-- Fixed navbar -->
        <div class="navbar navbar-default navbar-fixed-top navbar-transparent-black mm-fixed-top" role="navigation" id="navbar">
 
          <!-- Branding -->
          <div class="navbar-header col-md-2">
            <a class="navbar-brand" href="teacher-intro.html">
              <strong>admin</strong>
            </a>
            
          </div>
          <!-- Branding end 
          <div class="copyrights">Collect from <a href="http://www.cssmoban.com/"  title="网站模板">网站模板</a></div>
-->

          <!-- .nav-collapse -->
          <div class="navbar-collapse">
                        
            <!-- Page refresh -->
            <ul class="nav navbar-nav refresh">
              <li class="divided">
                <a href="#" class="page-refresh"><i class="fa fa-refresh"></i></a>
              </li>
            </ul>
            <!-- /Page refresh -->

            <!-- Search -->
            <div class="search" id="main-search">
              <i class="fa fa-search"></i> <input type="text" placeholder="Search...">
            </div>
           

            <!-- Sidebar--> <!-- Collapsed search pasting here at 768px -->
            <ul class="nav navbar-nav side-nav" id="sidebar">
              
              <!--<li class="collapsed-content"> 
                <ul>
                  <li class="search"></li>
                </ul>
              </li>-->

              <li class="navigation" id="navigation">
                <a href="#" class="sidebar-toggle" data-toggle="#navigation">系统管理 <i class="fa fa-angle-up"></i></a>
                
                <ul class="menu">
                  
                  <li class="active">
                    <a href="../admin/admin_intro"  target="menuFrame">
                      <i class="fa fa-tachometer"></i> 首页
                      <!--<span class="badge badge-red">1</span>-->
                    </a>
                  </li>

                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-list"></i> 教师管理 <b class="fa fa-plus dropdown-plus"></b>
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="../admin/admin_teacher_add" target="menuFrame">
                          <i class="fa fa-caret-right"></i> 添加教师
                        </a>
                      </li>
                      <li>
                        <a href="../admin/admin_pwd_change" target="menuFrame">
                          <i class="fa fa-caret-right"></i> 修改密码
                        </a>
                      </li>
                      <li>
                        <a href="../admin/admin_teacher_delete" target="menuFrame">
                          <i class="fa fa-caret-right"></i> 删除教师
                        </a>
                      </li>
                      <li>
                        <a href="../admin/admin_teacher_all" target="menuFrame">
                          <i class="fa fa-caret-right"></i> 查看所有教师
                        </a>
                      </li>
                    </ul>
                  </li>

                  <li class="dropdown">
                    <a href="../admin/admin_exam_deal" target="menuFrame" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-pencil"></i> 考试清理 
                    </a>
                   
                  </li>

                  <li>
                    <a href="../admin/admin_system_set" target="menuFrame">
                      <i class="fa fa-tint"></i> 系统配置
                    </a>
                  </li>
                 




          </div>
          <!--/.nav-collapse -->
        </div>
        <!-- Fixed navbar end -->
            
        <!-- Page content -->

        <div id="content" class="col-md-12">
 <div id="page_content" style="margin-top: 10px; margin-bottom: 10px;">
          <iframe id="menuFrame" name="menuFrame" src="../admin/admin_intro" scrolling="auto" allowtransparency="yes" style="width:100%;height:600px;float: left;">
             </iframe>
 </div>
        </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="http://localhost/cems/toby/application/style/assets/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://localhost/cems/toby/application/style/assets/js/vendor/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://localhost/cems/toby/application/style/assets/js/vendor/mmenu/js/jquery.mmenu.min.js"></script>
    <script type="text/javascript" src="http://localhost/cems/toby/application/style/assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="http://localhost/cems/toby/application/style/assets/js/vendor/nicescroll/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="http://localhost/cems/toby/application/style/assets/js/vendor/animate-numbers/jquery.animateNumbers.js"></script>
    <script type="text/javascript" src="http://localhost/cems/toby/application/style/assets/js/vendor/videobackground/jquery.videobackground.js"></script>
    <script type="text/javascript" src="http://localhost/cems/toby/application/style/assets/js/vendor/blockui/jquery.blockUI.js"></script>

    <script src="http://localhost/cems/toby/application/style/assets/js/vendor/flot/jquery.flot.min.js"></script>
    <script src="http://localhost/cems/toby/application/style/assets/js/vendor/flot/jquery.flot.time.min.js"></script>
    <script src="http://localhost/cems/toby/application/style/assets/js/vendor/flot/jquery.flot.selection.min.js"></script>
    <script src="http://localhost/cems/toby/application/style/assets/js/vendor/flot/jquery.flot.animator.min.js"></script>
    <script src="http://localhost/cems/toby/application/style/assets/js/vendor/flot/jquery.flot.orderBars.js"></script>
    <script src="http://localhost/cems/toby/application/style/assets/js/vendor/easypiechart/jquery.easypiechart.min.js"></script>

    <script src="http://localhost/cems/toby/application/style/assets/js/vendor/rickshaw/raphael-min.js"></script> 
    <script src="http://localhost/cems/toby/application/style/assets/js/vendor/rickshaw/d3.v2.js"></script>
    <script src="http://localhost/cems/toby/application/style/assets/js/vendor/rickshaw/rickshaw.min.js"></script>

    <script src="http://localhost/cems/toby/application/style/assets/js/vendor/morris/morris.min.js"></script>

    <script src="http://localhost/cems/toby/application/style/assets/js/vendor/tabdrop/bootstrap-tabdrop.min.js"></script>

    <script src="http://localhost/cems/toby/application/style/assets/js/vendor/summernote/summernote.min.js"></script>

    <script src="http://localhost/cems/toby/application/style/assets/js/vendor/chosen/chosen.jquery.min.js"></script>

    <script src="http://localhost/cems/toby/application/style/assets/js/minimal.min.js"></script>
  </body>
</html>
      
