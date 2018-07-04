<?php  require_once 'base.php';?>
<?php
if (! isset ( $_SESSION )) {
	session_start ();
}
if (! isset ( $_SESSION ['userName'] )) {
	header ( "location:login.php" );
}
$userName = $_SESSION ['userName'];

// 访问数据库，查询学生表指定学号的学生

require_once 'dbconfig.php';
if (! isset ( $_REQUEST ['id'] )) {
	header ( "location:index.php" );
}
$id = $_REQUEST ['id'];
$sql = "select * from tb_score where id = $id";
$result = mysql_query ( $sql );
$row = mysql_fetch_array ( $result )?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
	<div id="page-inner">
		
		<!-- /. ROW  -->
		<hr />
		<div class="row">
			<div class="col-md-6 col-md-offset-1">
				<!-- class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1"> -->
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong> 编辑成绩信息 </strong>
					</div>
					<div class="panel-body">
						<form role="form" action="score_editdo.php" method='post'>
							<br /> <input type='hidden' name='id' value='<?=$row ['id']?>' />
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-tag">&nbsp;学号</i></span>
								<input type="text" class="form-control" placeholder="学号"
									name='studentId' value="<?=$row ['xh']?>" />
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-birthday-cake">&nbsp;科目</i></span>
								<input type="text" class="form-control" placeholder="科目"
								name='subject' value="<?=$row ['km']?>" />
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="fa fa-files-o">&nbsp;成绩</i></span>
								<div align='left'>&nbsp;&nbsp;
									<input type="text" placeholder="成绩" name='mark' value="<?=$row ['cj']?>" />
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