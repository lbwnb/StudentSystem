<?php require_once 'base.php';?>
<?php
require_once 'dbconfig.php';
$sql = "select * from tb_km";
$result = mysql_query ( $sql );
?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
	<div id="page-inner">
		
		<div class="row">
			<div class="col-md-12">
				<!-- Advanced Tables -->
				<div class="panel panel-default">
				
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover"
								id="dataTables-example">
								<thead>
									<tr>
									<th>id</tb>	
										<th>科目</tb>										
										<th>任课老师</tb>																
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
									echo "<td>" . $row ['id'] . "</td>";
									echo "<td>" . $row ['km'] . "</td>";
									echo "<td>" . $row ['teachar'] . "</td>";
								    echo  "<td><a class='btn btn-primary btn-sm shiny' href=\"kmdo.php?id='". $row ['id'] ."'\"'><i class='fa fa-edit'>&nbsp;科目成绩</i></a></td>";
									echo "</tr>";
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
</div>
<!-- /. PAGE WRAPPER  -->
<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="assets/js/jquery.metisMenu.js"></script>
<!-- DATA TABLE SCRIPTS -->
<script src="assets/js/dataTables/jquery.dataTables.js"></script>
<script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
<script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>


</body>
</html>
