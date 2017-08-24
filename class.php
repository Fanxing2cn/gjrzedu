<?
	require_once "db.php";
	$conn = getconn();	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
	</head>
	<body>
		<h1>班级管理</h1>
		<form action="doclass.php">
			班级名<input type="text" name="cname"/>
			人数<input type="text" name="cn" value="20"/>
			 <input type="hidden" name="action" value="add" />
			<input type="submit" value="添加"/>
		</form>
		<hr/>
		<table border="1" width="400">
			<tr>
				<th>序号</th><th>班级名</th><th>人数</th><th>操作
			</tr>
			 <?
				$sql="SELECT * from class";
				// 执行语句  结果放入$rs 
				$rs = mysql_query($sql);
				//如何得到结果集的行数  n 就是行
				$n= mysql_num_rows($rs);
				for($i=0;$i<$n;$i++){
					$row=  mysql_fetch_assoc($rs); // 提取一行
					echo "<tr>";
					echo "<td>". $row['classid'];
					echo "<td>". $row['className'];
					echo "<td>".$row['total'];
					echo "<td><a href=doclass.php?action=del&id=".$row['classid'].">删除</a>";
				}			
			 ?>
		</table>
	</body>
</html>
