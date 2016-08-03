<!doctype html>
<HTML>
	<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

		<link rel="stylesheet" type="text/css" href="styles.css">
		<script type="text/javascript" src="script.js"></script>
		
	</head>
	<body>
	<div class="container">
		<div id="sidebar">
	        <ul>
	            <li><a href="#">Home</a></li>
	            <li><img src="manager.png" id="userImage"></li>
	            <li><a href="main.php">동화출력</a></li>
	            <li><a href="EnrollStory.php">동화등록</a></li>
	            <li><a href="EditStory.php">동화수정</a></li>
	          </ul>
	    </div>
	    <div id="contents">
	    	<div>
	    		동화종류
	    		<input type="text" name="storyType">
	    		<select id="storyType">
		            <option>a</option>
		            <option>b</option>
		        </select>
	    	</div>
	    	<div>
	    		동화제목
	    		<input type="text" name="storyName">
	    	</div>
	    	//select file function
	    	<input type="button" name="enroll" value="등록">
	    	<input type="button" name="cancel" value="취소">
	    </div>

	</div>
	</body>
</HTML>