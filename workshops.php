<?php  
@session_start();
//login control
if (!$_SESSION['login_successful']){ session_destroy(); die("cry"); }
?>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href ="styles.css">
	<title>Workshops</title>
</head>
<body>
	<a href ="./workshops_add.php"><button>Add</button></a>
	<a href ="./menu.php"><button>Back</button></a>
	<br><br>
	<div class="main_table">
	<?php
		$file = file_get_contents("http://yapp.azurewebsites.net/api/lectures?typeOfEvents=workshops");
		$json = json_decode($file);
		foreach($json as $obj):
	?>
	    Topic: <?=$obj->topic?><br>
	    Description: <?=$obj->description?><br>
	    Date start: <?=$obj->date_start?><br>
	    Date end: <?=$obj->date_end?><br>
	    Place: <?=$obj->place?><br>
	    Speaker: <?=$obj->id_speaker?><br>
	    Photo: <?=$obj->photo?><hr>
	    <br>
	<?php endforeach; 
	?>
	</div>
</body>
</html>