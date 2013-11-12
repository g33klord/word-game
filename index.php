<!DOCTYPE html>
<html>
	<head>
	<script src="js/jquery-1.9.1.js"></script>
	<!--<script src="js/jquery-ui-1.10.3.custom.js"></script> -->
	<script type='text/javascript' > 
	window.points = 0; 
	window.QuesCount =0;
	window.AnsCount =0;
	</script>
     <script src='script1.js'></script>
	<title>The Game</title>
	
	</head>

	<body>
		<script language="javascript">
			var max_time = 40;  //Countdown Time 
			var cinterval;
			 var points = 0;
			function countdown_timer(){
			  max_time--;
			  document.getElementById('countdown').innerHTML = max_time;
			  if(max_time == 0) {  //if time = o sec, clear interval.
			    clearInterval(cinterval);
			    alert('Game Over!');
			     alert('Points:' + window.points + '| Ques Count:' + window.QuesCount);
			    document.location = 'home.html';
			  }
			}
			cinterval = setInterval('countdown_timer()', 1000);
		</script> 
		<div id="content">
		Seconds:<div id="countdown">40</div>
		Score: <div id="score">0<div>
		
		<?php include_once("con.php");  //connect to database
			$result = mysqli_query($con,"SELECT count(*) FROM questions"); 
			$re=mysqli_fetch_row($result); //No of rows = re
			$random=rand(1,$re[0]);	 //random number between 1 and re.
		 ?>
		<script>
			var qid=<?php echo $random; ?>;
			var request = $.ajax({
			url: "question.php",
			type: "POST",
			data: { id : qid },
			dataType: "html"
			});
			request.done(function( msg ) {
			$( "#question" ).html( msg );
			});
		</script>

		<div id="question"></div>
		<div class="wordBox">
			<input type="text"/>
			<button>skip</button>
			<hr>
			<div class="definitionBox">	</div>
		</div>
		
		<div id="recentWords"> </div>		

	</div>
	</body>
</html>
