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
		<h1>Lector:</h1>
		<input type="text">
		<br><br>
		<h1>Choose lector's photo</h1>
		<input type="file">
		<br><br>
		<ul>
			<li class="choose"><h1>Date start</h1></li>
			<li class="choose"><input type="text"></li>
			<li class="choose"><h1>Date end</h1></li>
			<li class="choose"><input type="text"></li>
		</ul>
		<br><br>
		<h1>Write the header</h1>
		<input type="text" class="header">
		<br> <br>
		<h1>WDescription</h1>
		<textarea name="comment" id="comment-field" class="main"></textarea>
		<br><br>
		<input type="submit" value="Ok" class="send">
	</form>
	<a href="./lectures.php"><button class="back">Back</button></a>
</body>
</html>