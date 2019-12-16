<?php
require('connect.php');
 
if(isset($_GET) & !empty($_GET)){
	if((isset($_GET['id']) & !empty($_GET['id'])) & (isset($_GET['status']) & !empty($_GET['status']))){
		$id = $_GET['id'];
		$status = $_GET['status'];
 
		$sql = "UPDATE comments SET status='$status' WHERE id=$id";
		$res = mysqli_query($connection, $sql) or die(mysqli_error($connection));
		if($res){
			header("location: viewcomments.php");
		}else{
			header("location: viewcomments.php");
		}
	}
}else{
	header('location: viewcomments.php');
}
