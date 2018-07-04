<?php require_once 'base.php';?>
<?php
// 访问数据库，查询学生表
require_once 'dbconfig.php';
$sql = "select * from tb_student";
$result = mysql_query ( $sql );
?>
<div id="page-wrapper">
	<div id="page-inner">

		<div class="row">
			<div class="col-md-12">
				<!-- Advanced Tables -->
				<div class="panel panel-default">
					<div class="panel-heading">
						<a  class='btn btn-primary btn-sm shiny' href="insertstudent11.php"><i class='fa fa-edit'>&nbsp;添加学生</i></a>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover"
								id="dataTables-example">
								<thead>
									<tr>
										<th>学号
										
										</td>
										<th>姓名
										
										</td>
										<th>性别
										
										</td>
										<th>班级
										
										</td>
										<th>生日
										
										</td>
										
										<th>操作</th>
									</tr>
								</thead>
								<tbody>
								<?php
								$line = 0;
								while ( $row = mysql_fetch_array ( $result ) ) {
								$line++;
								$lineStyle = $line%2==1?"odd gradeX":"even gradeC";
									echo "<tr class='$lineStyle'>";
									echo "<td>" . $row ['xh'] . "</td>";
									echo "<td>" . $row ['name'] . "</td>";
									echo "<td>" . $row ['sex'] . "</td>";
									echo "<td>" . $row ['s_class'] . "</td>";
									echo "<td>" . $row ['birthday'] . "</td>";
									echo "<td><a class='btn btn-primary btn-sm shiny' href=\"edit.php?id='". $row ['id'] ."'\"'><i class='fa fa-edit'>&nbsp;编辑</i></a>&nbsp;&nbsp;<a class='btn btn-danger btn-sm shiny' href=\"delete.php?id='". $row ['id'] ."'\"'><i class='fa fa-trash-o'>&nbsp;删除</i></a></td>";
									echo "</tr>";
								}
								?>
								</tbody>
							</table>
						</div>

					</div>
				</div>
				<!--End Advanced Tables -->
			</div>
		</div>
	</div>

</div>
<!-- /. PAGE INNER  -->
<!-- /. PAGE WRAPPER  -->
<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="dataTables/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="dataTables/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="dataTables/jquery.metisMenu.js"></script>
<!-- DATA TABLE SCRIPTS -->
<script src="dataTables/jquery.dataTables.js"></script>
<script src="dataTables/dataTables.bootstrap.js"></script>
<script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>


</body>
</html>

