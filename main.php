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
	            <li><a href="editStory.php">동화수정</a></li>
	          </ul>
	        </div>
	        <div class="main-content">
	          <div class="swipe-area"></div>
	          <a href="#" data-toggle=".container" id="sidebar-toggle"> 
		          <span class="bar"></span> 
		          <span class="bar"></span> 
		          <span class="bar"></span> 
	          </a>

	          <div class="content">
	            <h1>동화출력</h1>
	            <form>
		            <div id="printing-page">
		            	<div>
		            		<h2>동화선택하기</h2>
		            		<div>
		            			동화제목
		            			<select id="series">
		            				<option>a</option>
		            				<option>b</option>
		            			</select>
		            			<select id="bookName">
		            				<option>a</option>
		            				<option>b</option>
		            			</select>
		            		</div>
		            		<div>
		            			주인공 성별

		            		</div>
		            		<div>
		            			등장인물
		            		</div>

		            	</div>
		            	<div>
		            		<h2>선물하는 사람</h2>
		            		<div>
		            			전하는 메시지
		            			<input type="text" name="message" class="inputs">
		            		</div>
		            		<div>
		            			선물하는 사람
		            			<input type="text" name="sender" class="inputs">            	
		            		</div>
		            		<div>
		            			선물하는 날짜

		            		</div>
		            	</div>
		            	<div>
		            		<h2>선물받는 사람</h2>
		            		<div>
		            			성
		            			<input type="text" name="main_lastName" class="inputs">
		            			이름
		            			<input type="text" name="main_firstName" class="inputs">
		            		</div>
		            		<div>
		            			주소
		            			<input type="text" name="address" class="inputs">
		            		</div>
		            		<div>
		            			성별
		            			<input type="radio" name="sex" value="m">남
		            			<input type="radio" name="sex" value="f">여
		            		</div>
		            	</div>
		            	<div>
		            		<h2>등장인물</h2>
		            		<div>
		            			관계
		            			<input type="text" name="support1_relationship" class="inputs">
		            			성
		            			<input type="text" name="support1_lastName" class="inputs">
		            			이름
		            			<input type="text" name="support1_firstName" class="inputs">
		            		</div>
		            		<div>
		            			관계
		            			<input type="text" name="support2_relationship"  class="inputs">
		            			성
		            			<input type="text" name="support2_lastName" class="inputs">
		            			이름
		            			<input type="text" name="support2_firstName" class="inputs">
		            		</div>
		            	</div>
		            </div>
		            <input type="button" name="print" value="출력">
		            <input type="button" name="deleteAll" value="모두 지우기" onclick="clearAll()">
		        </form>
		      
	     	  </div>
	     	</div>
	    </div>
	      <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script> 
	      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js"></script> 
	
	</body>

</HTML>