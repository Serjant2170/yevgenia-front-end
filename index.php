<?php
@session_start();
// check user & pwd: 
if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])){ 
	$usr = $_SERVER['PHP_AUTH_USER']; 
	$pwd = $_SERVER['PHP_AUTH_PW']; 
		if ($usr == 'admin' && $pwd == 'admin'){ 
			$_SESSION['login_successful'] = true; 
			$_SESSION['status'] = "admin";
			header("Location: menu.php");
		}
} 

// login panel
if (!$_SESSION['login_successful']){ 
	// send 401 headers: 
	// realm="something" will be shown in the login box 
	header('WWW-Authenticate: Basic realm="Yevgenia admin page'); 
	header('HTTP/1.0 401 Unauthorized'); 
	print "Login failed!";
} 	
	// IF YOU WANT TO LOG OUT, POST "session_destroy();"
?>