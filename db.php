<?php
function getconn(){
	//连接数据库
	$conn=@mysql_connect("127.0.0.1","root","root");
	// php 支持中文
	mysql_query("set names utf8");
	//选择数据库
	mysql_select_db("gjrzedu");
	return  $conn;
}	
	
?>