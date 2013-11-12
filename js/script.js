$(document).ready(function(){
    //var points = 0;
    var wl;
  $.event.special.inputchange = {
    setup: function() {
        var self = this, val;
        $.data(this, 'timer', window.setInterval(function() {
            val = self.value;
            if ( $.data( self, 'cache') != val ) {
                $.data( self, 'cache', val );
                $( self ).trigger( 'inputchange' );
            }
        }, 20));
    },
    teardown: function() {
        window.clearInterval( $.data(this, 'timer') );
    },
    add: function() {
        $.data(this, 'cache', this.value);
    }
};
            
 function onChangeTest(changeVal) {
   var wl=changeVal.value.length;
    return wl;
}
            function preventBackspace(e) {
            var wl=onChangeTest(document.getElementById('qin'));
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

$('input').on('inputchange', function() {
    var ans = this.value;
    ///WARNING///
    //var wl=this.value.length;
    //$('.definitionBox').text(ans);
    
    if(ans == a) { 
     // $('#recentWords').prepend('<p id="recentW" <h2>&#10004; ' + a + '</h2></br>  ' + q + ' </p>');
     // $('#recentWords').children('p id = "recentW"').text('<h2>&#10004;; ' + a + '</h2> </br> ' + q ); 
     // $('#recentWords').prepend(document.createTextNode('<p id="recentW" > <h2> &#10004; ' + a + '</h2> </br> ' + q + ' </p>');
    $('<p/ id="recentW">').prepend('<h2> <span style="color:green;">&#10004;</span> ' + a + '</h2> </br> ' + q ).prependTo('#recentWords');
            var qid=random;
            var request = $.ajax({
            url: "question.php",
            type: "POST",
            data: { id : qid },
            dataType: "html"
            });
            request.done(function( msg ) {
            $( "#question" ).html( msg );
            });
            max_time=max_time+5;
            points+=10;
            document.getElementById('scores').innerHTML = points;
            //alert(points);
            QuesCount++;
            AnsCount++;
            document.getElementById('words').innerHTML = AnsCount;
                $('<tr/>').prepend('<td> '+ a + '</td><td>(+10 points)</td> ').prependTo('tbody#recw');
                // $('<td/>').prepend(a).prependTo('tr#recw');
                
            // wordsArray.push(a);
            // scoreArray.push(+10);

  }
});
$('button#skip').click(function(){
     var qid=random;
            var request = $.ajax({
            url: "question.php",
            type: "POST",
            data: { id : qid },
            dataType: "html"
            });
            request.done(function( msg ) {
            $( "#question" ).html( msg );
            });
            $('input').focus();
            QuesCount++;
            points-=10;
            document.getElementById('scores').innerHTML = points;
    // $('#recentWords').prepend('<p id="recentW" > <h2> &#10008; ' + a + '</h2> </br> ' + q + ' </p>');
    // $('#recentWords').children('p id = "recentW"').text('&#10008; ' + a + '</h2> </br> ' + q );
    // $('#recentWords').prepend(document.createTextNode('<p id="recentW" > <h2> &#10008; ' + a + '</h2> </br> ' + q + ' </p>');
    $('<p/ id="recentW">').prepend('<h2><span style="color:red;">&#10008;</span> ' + a + '</h2> </br> ' + q ).prependTo('#recentWords');
    // $('<td/>').prepend('(-10 points)').prependTo('tr#recw');
    // $('<td/>').prepend(a).prependTo('tr#recw');
     $('<tr/>').prepend('<td> '+ a + '</td><td>(-10 points)</td>').prependTo('tbody#recw');
    
            // wordsArray.push(a);
            // scoreArray.push(-10);
})
$('#quit').click(function(){
    if(QuesCount==0){
        $('#toPopup').hide();
          $("#toPopup1").fadeIn(0500); // fadein popup div
          $("#backgroundPopup").css("opacity", "0.7"); // css opacity, supports IE7, IE8
          $("#backgroundPopup").fadeIn(0001); 
    }
    else{
            $("#toPopup").fadeIn(0500); // fadein popup div
          $("#backgroundPopup").css("opacity", "0.7"); // css opacity, supports IE7, IE8
          $("#backgroundPopup").fadeIn(0001); 
    }
});
//$('#score').text(window.points);
//document.getElementById('score').innerHTML = window.points;
});