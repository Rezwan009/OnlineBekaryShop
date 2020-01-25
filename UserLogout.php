<?php
	if(isset($_COOKIE['rm'])){
		setcookie ('rm','valid',time()-1,'/');
		header("location:UserLogin.php");
	}
	else{
	setcookie ('abc','valid',time()-1,'/');
	header("location:UserLogin.php");
	}
?>