<?php  
@session_start();
//login control
if (!$_SESSION['login_successful']){ session_destroy(); die("cry"); }
?><html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href ="styles.css">
	<title>Lectures</title>
</head>
<body>
	<form>
		<h1>Speaker:</h1>
		<input type="text">
		<br><br>
		<h1>Choose speaker's photo</h1>
		<input type="file">
		<br><br>
		<h1>Workshops/leactures:</h1>
		<input type="text" class="header">
		<br> <br>
		<h1>Description</h1>
		<textarea name="comment" id="comment-field" class="main"></textarea>
		<br><br>
		<input type="submit" value="Ok" class="send">
	</form>
	<a href="./speakers.php"><button class="back">Back</button></a>
</body>
</html>
