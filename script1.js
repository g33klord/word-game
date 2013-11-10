$(document).ready(function(){
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


var points =0;
$('input').on('inputchange', function() {
    var ans = this.value;
    $('.definitionBox').text(ans);
    
    if(ans == a) {
     $('#recentWords').prepend("<p> &#10004; " + q + "</br> <h1> " + a + "</h1> </p>"); 
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
            points++; 
  }
});
$('button').click(function(){
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
    $('#recentWords').prepend("<p> &#10008; " + q + "</br> <h1> " + a + "</h1> </p>");

})
});