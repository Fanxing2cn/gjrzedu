<meta charset="utf8"  />
<?php
require_once 'db.php';
$conn = getconn();

$ac=$_GET["action"];
switch($ac){
	case "del":
		$cid=$_GET["id"];
		$sql="delete from class where classid=$cid";
		$ok=mysql_query($sql);
		echo "<h1>删除 $cid 成功</h1>";
		gourl("http://127.0.0.1/gjrzsys/class.php");
		break;
	case "add":
		$cname=$_GET["cname"];
		$cn=$_GET["cn"];
		$sql="insert into class(className,total) values('$cname','$cn')";
		$ok=mysql_query($sql);
	    echo "$ac -- $cname ---$cn--- $ok";
		gourl("http://127.0.0.1/gjrzsys/class.php");
		break;
}
 
function gourl($url){
	echo "<script>";  
	echo "window.location.href='$url'";  
	echo "</script >";  
}


?>






