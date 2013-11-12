<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>The Word Game</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="word game">
    <meta name="Kumar Vimal" content="word game">

    <!-- CSS -->
    <script src="js/jquery-1.9.1.js"> </script>
    <link href="css/popup.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="js/popup.js"></script>
    <script type="text/javascript">
    var points = 0; 
    var QuesCount =0;
    var AnsCount =0;
    // var wordsArray=[];
    // var scoreArray=[];
    </script>
    <script src='js/script.js'></script>
    <!--<script>
      function onChangeTest(changeVal) {
        var wl=changeVal.value.length;
        return wl;
      }
      function preventBackspace(e) {
      var wl=onChangeTest(document.getElementById("recentw"));
      //document.getElementById('test').innerHTML = wl;
      
          var evt = e || window.event;
          if (evt) {
            var keyCode = evt.charCode || evt.keyCode;
      if (keyCode === 8 && wl<=1) {
                if (evt.preventDefault) {
                    evt.preventDefault();
                } else {
                    evt.returnValue = false;
                }
            }
        }
    }
    </script> -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <style type="text/css">

      /* Sticky footer styles
      -------------------------------------------------- */

      html,
      body {
        height: 100%;
        /* The html and body elements cannot have any padding or margin. */
      }

      /* Wrapper for page content to push down footer */
      #wrap {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto -60px;
      }

      /* Set the fixed height of the footer here */
      #push,
      #footer {
        height: 60px;
      }
      #footer {
        background-color: #f5f5f5;
      }

      /* Lastly, apply responsive CSS fixes as necessary */
      @media (max-width: 767px) {
        #footer {
          margin-left: -20px;
          margin-right: -20px;
          padding-left: 20px;
          padding-right: 20px;
        }
      }



      /* Custom page CSS
      -------------------------------------------------- */
      /* Not required for template or sticky footer method. */

      #wrap > .container {
        padding-top: 60px;
      }
      .container .credit {
        margin: 20px 0;
      }

      /*code {
        font-size: 80%;
      }*/

      #scorebar{
        padding-top: .2%;
        padding-bottom: .2%;
        margin: 0px;
        /*background-color: #F0F0F0;*/
        border-bottom: 1px solid;
      }
      span#time{
        float: left;
      }
      span#score{
        margin-left: 10%;
      }
      span#streak{
        margin-left: 20%;
      }
      span#quit{
        margin-bottom: 5%;
      }
      #gamearea{
        padding-top: 5.5%;

      }
      #recentWords{
        height: 400px;
        /*color: transparent;
        text-shadow: 0 0 5px rgba(0,0,0,0.5);*/
        overflow: hidden;
      }
      p:nth-child(4){
      /*background-color: red;*/
      color: transparent;
      text-shadow: 0 0 5px rgba(0,0,0,0.5);
      }
      #question{
        /*padding-top: 10px;*/
        /*border-right: 1px solid*/
       /* margin-top: -5%;*/
      }
      #qin{
        width: 80%;
        /*padding-bottom: 23px;*/
        font-size: 300%;
        height: inherit;
      }
      button#skip{
        padding-left: 30px;
        margin-left: 20px;
        margin-bottom: 2%; 
        font-size: 120%;
      }
      #sidebar{
        height: 400px;
        border-left: 1px solid;
      }
      a#play{
        margin-top: 2%;
        margin-left: 34%;
      }
      div#performance{
        padding-left: 12%;
        font-size: 100%;
      }
      div#performance strong {
        font-size: 150%;
      }
      td#poptable{
        padding: 0px 16px 0px 46px;
        /*text-align:center;*/
        border-right: 1px solid;
      }
    div#about{
      background-color: #FAF8F8;
      /*border-radius: 4px 4px 4px 4px;*/
      margin: 0px 0px 0px 10px;
    }
    .icon-remove{
    color: red;
    text-shadow: 1px 1px 1px #ccc;
    font-size: 2.5em;
    }
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <!-- <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
      <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png"> -->
      <link rel="shortcut icon" href="assets/ico/favicon.png">
  </head>

  <body>


    <!-- Part 1: Wrap all page content here -->
    <div id="wrap">

      <!-- Fixed navbar -->
      <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">The Word Game</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">Game</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
<!-- COUNT DOWN-->
<script language="javascript">
      var max_time = 10;  //Countdown Time 
      var cinterval;
       var points = 0;
      function countdown_timer(){
        max_time--;
        document.getElementById('countdown').innerHTML = max_time;
        if(max_time == 0) {  //if time = o sec, clear interval.
          clearInterval(cinterval);
          $("#toPopup").fadeIn(0500); // fadein popup div
          $("#backgroundPopup").css("opacity", "0.7"); // css opacity, supports IE7, IE8
          $("#backgroundPopup").fadeIn(0001); 
          document.getElementById('anspopup').innerHTML = AnsCount;
          document.getElementById('qnpopup').innerHTML = QuesCount;
          document.getElementById('scorepopup').innerHTML = points;
          document.getElementById('scorespan').innerHTML = points;
          var accuracy =0;
          accuracy = ((QuesCount-AnsCount)/(QuesCount*100));
          if(QuesCount==0){
          $('#toPopup').hide();
          $("#toPopup1").fadeIn(0500); // fadein popup div
          $("#backgroundPopup").css("opacity", "0.7"); // css opacity, supports IE7, IE8
          $("#backgroundPopup").fadeIn(0001); 
          }else{
          document.getElementById('accurspan').innerHTML = accuracy.toFixed(2);
          document.getElementById('corrspan').innerHTML = QuesCount;
          }
           //alert('Game Over!');
          //alert('Game Over! <br> Points:' + points + '| Ques Count:' + QuesCount);
          //document.location = 'index.html';
        }
      }
      cinterval = setInterval('countdown_timer()', 1000);
    </script> 

    <div id="toPopup"> 
      <div id="popup_content">
        <p> 
           <h4 style ="text-align:center;">Good game!</h4>
          <p style ="text-align:center;">You got&nbsp; <strong><span id ="anspopup"> </span></strong> &nbsp;word right out of&nbsp;<span id="qnpopup"></span>
          &nbsp;for a total of&nbsp; <span id ="scorepopup"></span> &nbsp;points.</p>
          <div id ="performance">
            <table style="margin-left:-32px;">
              <tbody>
                <tr>
            <td id="poptable"><span id="scorep"> Score <br/><strong id="scorespan"></strong> </span></td>
            <td id="poptable"><span id="accur"> Accuracy<br/><strong id="accurspan"></strong>%  </span></td>
            <td style="border:none;"><span id="corr"> Correct Answer <br/><strong id ="corrspan"></strong> </span></td>
          </tr>
        </tbody>
      </table>
        
       </div>
      <a href="index.html" id="play" class="btn btn-primary">Play Again<i class="icon-repeat"></i></i></i></a>

      </p>
      </div>
    </div>
    <div id="toPopup1">
      <div id="popup_contents1">
        <p>
          <h4 style ="text-align:center;">Better luck next time!</h4>
          You didn't answer any words. Is something wrong?
          <a href="index.html" id="play" class="btn btn-primary">Play Again<i class="icon-repeat"></i></i></a>

        </p>
      </div>
    </div>

    <div id="backgroundPopup"></div>
<!-- AJAX and DB Connection-->

    <?php include_once("con.php");  //connect to database
      $result = mysqli_query($con,"SELECT count(*) FROM questions"); 
      $re=mysqli_fetch_row($result); //No of rows = re
      $random=rand(1,$re[0]);  //random number between 1 and re.
      //echo $re;
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

  <!-- Begin page content -->
<div class="container">
    <div class="row">
      <div id ="scorebar" class="span12">
        <div class="row">
          <div class="span9">
            <span id ="time">Time Remaining: <strong id="countdown">10</strong>Seconds</span>
            <span id="score">Score: <strong id="scores">0</strong> </span>
            <span id="streak">Current Streaks:<strong id="words">0</strong></span>
          </div>
          <div class="span3">
            <span id="quit" class="btn btn-primary" >Quit<i class="icon-eject"></i></span>
          </div>
        </div>
    </div> 
    <div id ="gamearea" class="row">
          <div id="questionarea" class="span9">
            <input id="qin" class="input-xxlarge" type="text" autofocus onkeydown="preventBackspace(event);" onkeypress="onChangeTest(this)"/> 
            <button id ="skip" class="btn btn-primary">Skip<i class="icon-random"></i></button>
            <p id="question"></p>
            <script type="text/javascript">
            if($('#recentw').length>4){
            $('#recentw:gt(3)').remove();
            }
            </script>
            <div id="recentWords"> </div>
          </div>          
          <div id="sidebar" class="span3">
            <div id="about"><strong>The Word Game</strong>
              <h4><i class="icon-time">&nbsp;</i>Recent Words</h4>
              <table class="table">
                  <tbody id="recw">
                    <tr id ="recwRow">

                    </tr>
                  </tbody>
                </table>
            </id>
          </div>
      </div>
  </div>

</div>

      <div id="push"></div>
    </div>

    <div id="footer">
      <div class="container">
        <p class="muted credit">kumar Vimal <a href="http://kumarvimal.in"></p>
      </div>
    </div>

      <script>
      function onChangeTest(changeVal) {
        var wl=changeVal.value.length;
        return wl;
      }
      function preventBackspace(e) {
      var wl=onChangeTest(document.getElementById("qin"));
          var evt = e || window.event;
          if (evt) {
            var keyCode = evt.charCode || evt.keyCode;
      if (keyCode === 8 && wl<=1) {
                if (evt.preventDefault) {
                    evt.preventDefault();
                } else {
                    evt.returnValue = false;
                }
            }
        }
    }

   /* for(i=wordsArray.length;i<0;i--)
    {
  $('<td/>').prepend(wordsArray[i]).prependTo('tr#recentw');
  $('<td/>').prepend('('scoreArray[i]+'points)').prependTo('tr#recentw');

    }*/
    </script>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <!-- <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script> -->

  </body>
</html>
