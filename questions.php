<?php  
@session_start();
//login control
if (!$_SESSION['login_successful']){ session_destroy(); die("cry"); }
?>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href ="styles.css">
	<title>admin</title>
</head>
<body>
	<h1>Choose questions</h1>
	<a href ="./menu.php"><button>back</button></a>
	<br><br>
	<div class="main_table">
	<?php
		$file = file_get_contents("http://yapp.azurewebsites.net/api/lectures/1/questions?lastId=0");
		$json = json_decode($file);
		foreach($json as $obj):
	?>
	    ID: <?=$obj->id_question?><br>
	    Text: <?=$obj->text?><hr>
	    Sent Time: <?=$obj->sent_time?><hr>
	    Status: <?=$obj->status?><hr>
	<?php endforeach; 
	?>
	</div>
</body>
</html>