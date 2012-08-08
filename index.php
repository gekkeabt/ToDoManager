<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>TodoManager</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript"> 
 var user = "<?php echo $_GET["user"]; ?>";
</script>
<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<div id="header">
		ToDoManager<br>
		Select your username (Capitalsensitive) which you maybe used before, or it automatticly creates one.<br>
		Click on the text inside the border press enter after a line to add new Task.<br />
		<form  method="get">
		<input type="text" name="user" placeholder="Your username">
		<input type="Submit" value="Check / Create account">
		</form>
	</div>
  <div class="list">
  <ol id="list" contenteditable="true">
  
    <li>Your first task !</li>
    <li>You can just use backspace to remove task</li>
    <li>You can click me to edit me</li>
    <li>And you can press enter after me to create new task !</li>
    
  </ol>
  </div>
</body>
</html>