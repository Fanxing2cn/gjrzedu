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
		<h1>老师管理</h1>
		<form action="doteacher.php">
			老师姓名<input type="text" name="tname"/>
			电话<input type="text" name="tp" value="15570768080"/>
			 <input type="hidden" name="action" value="add" />
			<input type="submit" value="添加"/>
		</form>
		<hr/>
		<table border="1" width="400">
			<tr>
				<th>序号</th><th>姓名</th><th>密码</th><th>电话</th><th>操作
			</tr>
			 <?
				$sql="SELECT * from teacher";
				// 执行语句  结果放入$rs 
				$rs = mysql_query($sql);
				//如何得到结果集的行数  n 就是行
				$n= mysql_num_rows($rs);
				for($i=0;$i<$n;$i++){
					$row=  mysql_fetch_assoc($rs); // 提取一行
					$tid=$row['teaID'];
					echo "<tr>";
					echo "<td>".$tid;
					echo "<td>".$row['teacherName'];
					echo "<td>".$row['password'];
					echo "<td>".$row['phone'];
					
					echo "<td><a href=doteacher.php?action=update&tid=$tid>重置密码</a>";
				}			
			 ?>
		</table>
	</body>
</html>
