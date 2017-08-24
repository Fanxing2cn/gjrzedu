<meta charset="utf8"  />
<?php
require_once 'db.php';
$conn = getconn();

$ac=$_GET["action"];
switch($ac){
	case "update":
		$tid=$_GET["tid"];
		$sql="update teacher set password='123456' where teaID=$tid";
		$ok=mysql_query($sql);
		echo "<h1>修改密码 $tid 成功</h1>";
		gourl("http://127.0.0.1/gjrzsys/teacher.php");
		break;
	case "add":
		$tname=$_GET["tname"];
		$tp=$_GET["tp"];
		$sql="insert into teacher(teacherName,password,phone) values('$tname','123456','$tp')";
		$ok=mysql_query($sql);
	    echo "$ac -- $cname ---$cn--- $ok";
		gourl("http://127.0.0.1/gjrzsys/teacher.php");
		break;
}
 
function gourl($url){
	echo "<script>";  
	echo "window.location.href='$url'";  
	echo "</script >";  
}


?>






