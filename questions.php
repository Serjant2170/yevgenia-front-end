<?php  
@session_start();
//login control
if (!$_SESSION['login_successful']){ session_destroy(); die("cry"); }
?>
<html>
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
	<script>
	   function sendRequest(f) {
	   		
	   		var xhr = new XMLHttpRequest();
			var body = 'question=' + encodeURIComponent(f.value);

			xhr.open("POST", 'https://yapp.azurewebsites.net/api/ask', true)
			xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')

			xhr.send(body);
		}
    </script>
</head>
<body>
	<h1>Choose questions</h1>
	<a href ="./menu.php"><button>back</button></a>
	<br><br>
	<div class="main_table">
	<?php
			$file = file_get_contents("http://yapp.azurewebsites.net/api/lectures/{$_POST['lectureId']}/questions?lastId=0");
			$json = json_decode($file);
			foreach($json as $obj):
			?>
			    Sent Time: <?=$obj->sent_time?><hr>
			    Status: <?=$obj->status?><hr>
			    <form onsubmit="sendRequest(question);return false">
			    	<p><input type="text" value="<?=$obj->text?>" name="question"/></p>
			    	<p><input type="submit"/></p>
			    </form>
			<?php endforeach; 		
		?>
	</div>
</body>
</html>