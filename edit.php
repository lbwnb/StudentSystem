<?php require_once 'base.php';?>
<?php

if (! isset ( $_SESSION )) {
	session_start ();
}
if (! isset ( $_SESSION ['userName'] )) {
	header ( "location:login.php" );
}
$userName = $_SESSION ['userName'];

require_once 'dbconfig.php';
// 访问student中指定的id
$id = $_REQUEST ['id'];
$query = "select * from tb_student where id=$id";
$result = mysql_query ( $query );
$row = mysql_fetch_array ( $result );
?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-6 col-md-offset-1">
				<!-- class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1"> -->
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong> 编辑学生信息 </strong>
					</div>
					<div class="panel-body">
						<form role="form" action="editdo.php" method='post'>
							<br /> <input type='hidden' name='id' value='<?=$row ['id']?>' />
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-circle-o-notch">
										学号</i></span> <input type="text" class="form-control"
									placeholder="学号 " name='studentId'
									value="<?=$row ['xh']?>" />
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-tag"> 姓名</i></span>
								<input type="text" class="form-control" placeholder=" 姓名"
									name='name' value="<?=$row ['name']?>" />
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-flag"> 班级</i></span>
								<input type="text" class="form-control" placeholder="班级"
									name='className' value="<?=$row ['s_class']?>" />
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-birthday-cake"> 生日</i></span>
								<input type="text" class="form-control" placeholder="生日"
									id='birthday' name='birthday' value="<?=$row ['birthday']?>" />
							</div>			
			              	<div class="form-group input-group">              
                               <span class="input-group-addon"><i class="fa fa-female">性别</i></span>     
                                  <div class="margin-right-15 templatemo-inline-block">&nbsp;&nbsp;&nbsp;&nbsp;
                                  <input type="radio" name="sex" id="r4"  placeholder="性别" value="男" <?=$row ['sex']=='男'?' checked':''?>>
                                   <label for="r4" class="font-weight-400"><span></span>男</label>
                                </div>
                                  <div class="margin-right-15 templatemo-inline-block">
                                      <input type="radio" name="sex" id="r5" placeholder="性别" value="女" <?=$row ['sex']=='女'?'checked':''?>>
                                 <label for="r5" class="font-weight-400"><span></span>女</label>
                               </div>      
                               </div>
             
							<input type='submit' class="btn btn-success" value='确认修改' />
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
!function(){
	laydate.skin('molv');//切换皮肤，请查看skins下面皮肤库
	laydate({elem: '#birthday'});//绑定元素
}();
</script>
</body>
</html>