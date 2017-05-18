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
<div class="main_menu">
	<h1>Choose type of lessons</h1>
	<ul >
		<?php 
		if($_SESSION['status'] == "admin"){
			$html ='<a href ="./lectures.php"><li class ="choose"><button>Lectures</button></li></a>
			<a href ="./workshops.php"><li class ="choose"><button>Workshops</button></li></a>
			<a href ="./speakers.php"><li class ="choose"><button>Speakers</button></li></a>';
			PRINT $html;}
			elseif($_SESSION['status'] == "moderator"){
				$html ='<a href ="./lectures.php"><li class ="choose"><button>Lectures</button></li></a>
			<a href ="./workshops.php"><li class ="choose"><button>Workshops</button></li></a>
			<a href ="./speakers.php"><li class ="choose"><button>Speakers</button></li></a>';
			PRINT $html;
			}
		// только работа с вопросами, добавть эту страницу
			elseif ($_SESSION['status'] == "speaker") {
				$html='<a href ="./lectures.php"><li class ="choose"><button>Lectures</button></li></a>
			<a href ="./workshops.php"><li class ="choose"><button>Workshops</button></li></a>';
			PRINT $html;
			}
		?>
	</ul>
</div>
</body>
</html>