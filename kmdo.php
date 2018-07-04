<?php require_once 'base.php';?>
<?php
	include('dbconfig.php');
	$sql = 'select distinct(km) from tb_score';
	$r = mysql_query($sql);
	
?>
<form action="kmdo.php" method="post">
    请选择要查询成绩的科目：
	<select name="sel">
      <?php
	  		while($row = mysql_fetch_array($r)){
				echo '<option value="'.$row['km'].'">';
				echo $row['km'];
				echo '</option>';
			}
	  ?>
    		
    </select>
    <input type="submit" value="查询" name="sub"/>
</form>
<?php
	if(isset($_POST['sub'])){
		echo "<img src='kmdodo.php?sel=".$_POST["sel"]."' />";
	}
?>

</body>
</html>