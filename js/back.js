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

 function quitPopup(){
      if(QuesCount==0){
        $('#toPopup').hide();
        $("div.loader").show();
        $("div.loader").fadeOut('normal');*/ 
          $("#toPopup1").fadeIn(0500); // fadein popup div
          $("#backgroundPopup").css("opacity", "0.7"); // css opacity, supports IE7, IE8
          $("#backgroundPopup").fadeIn(0001); 
    }
    else{
            $("#toPopup").fadeIn(0500); // fadein popup div
          $("#backgroundPopup").css("opacity", "0.7"); // css opacity, supports IE7, IE8
          $("#backgroundPopup").fadeIn(0001); 
    }

    }