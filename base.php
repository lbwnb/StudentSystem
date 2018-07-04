<?php
if (! isset ( $_SESSION )) {
  session_start ();
}
if (! isset ( $_SESSION ['userName'] )) {
  header ( "location:login.php" );
}
   $userName = $_SESSION ['userName'];
  //根据当前文件名计算菜单名
$url = $_SERVER['PHP_SELF'];
$start = strrpos($url,'/');
$end = strrpos($url,'.');
$menuName = substr($url,$start+1,$end-$start-1);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>学生信息管理系统</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">

  </head>
  <body>  
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
          <h1>学生信息管理</h1>
        </header>
        <div class="profile-photo-container">
          <img src="images/profile-photo.jpg" alt="Profile Photo" class="img-responsive">  
          <div class="profile-photo-overlay"></div>
        </div>      
        <!-- Search box -->
        <form class="templatemo-search-form" role="search">
          <div class="input-group">
              <button type="submit" class="fa fa-search"></button>
              <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">           
          </div>
        </form>
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
        </div>
        <nav class="templatemo-left-nav">          
          <ul>
            <li><a href="index.php" <?="index"==$menuName?" class='active'":""?> ><i class="fa fa-users fa-fw"></i>学生信息</a></li>
            <li><a href="studentscore.php" <?="studentscore"==$menuName?" class='active'":""?> ><i class="fa fa-bar-chart fa-fw"></i>学生成绩</a></li>
              <li><a href="km.php" <?="km"==$menuName?" class='active'":""?> ><i class="fa fa-book fa-fw"></i>科目信息</a></li>

          </ul>  
        </nav>
      </div>
      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container" align="right">
          <div class="row" >
            <nav class="templatemo-top-nav col-lg-12 col-md-12" style="align:right">
              <ul class="text-uppercase">
                <li><a href="#" class="active">用户名：<?= $userName?></a></li>
                <li><a href="newpassword.php">修改密码</a></li>
                <li><a href="loginout.php">退出登录</a></li>
              </ul>  
            </nav> 
          </div>
        </div>
