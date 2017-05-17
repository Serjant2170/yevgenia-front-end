<?php  
@session_start();
//login control
if (!$_SESSION['login_successful']){ session_destroy(); die("cry"); }
?>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href ="styles.css">
	<title>Speakers</title>
</head>
<body>
	<a href ="./speakers_add.php"><button>Add</button></a>
	<a href ="./menu.php"><button>back</button></a>
	<div class="main_table">
	<?php
		$file = file_get_contents("http://yapp.azurewebsites.net/api/speakers");
		$json = json_decode($file);
		foreach($json as $obj):
	?>
	    ID: <?=$obj->id_speaker?><br>
	    Name: <?=$obj->name?><hr>
	    Photo: <?=$obj->photo?><hr>
	<?php endforeach; 
	?>
	</div>
</body>
</html>