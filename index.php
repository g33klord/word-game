<!DOCTYPE html>
<html>
	<head>
	<script src="js/jquery-1.9.1.js"></script>
     <script src='script1.js'></script>
	<title>The Game</title>
	
	</head>
	<body>
		<script language="javascript">
			var max_time = 10;  //Countdown Time Limit
			var cinterval;
			 //var points = 0;  //For score
			function countdown_timer(){
			  max_time--;  //count down
			  document.getElementById('countdown').innerHTML = max_time;
			  if(max_time == 0){   //if time = o sec, clear interval.
			    clearInterval(cinterval);
			    alert('Game Over!');   //you lose
			    document.location = 'home.html'; //redirect to home
			  }
			}
			cinterval = setInterval('countdown_timer()', 1000); //1000 = 1 sec
		</script> 
		<div id="content">
		Seconds:<div id="countdown">10</div>
		Score: <div id="score"><div>
		
		<?php include_once("con.php");  //connect to database
			$result = mysqli_query($con,"SELECT count(*) FROM questions"); //get no of rows
			$re=mysqli_fetch_row($result); //No of rows = re
			$random=rand(1,$re[0]);	 //random number between 1 and re.
		 ?>
		<script>
			var qid=<?php echo $random; ?>;
			var request = $.ajax({ //ajax request
			url: "question.php",  
			type: "POST",  //pass id to qistion.php
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
			<div class="question"></div>
			<button>skip</button>
			<hr>
			<div class="definitionBox">	</div>
		</div>
		
		<div id="recentWords"> </div>		

	</div>
	</body>
</html>
