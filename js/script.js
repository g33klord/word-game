$(document).ready(function () {
    var e;
    $.event.special.inputchange = {
        setup: function () {
            var e = this,
                t;
            $.data(this, "timer", window.setInterval(function () {
                t = e.value;
                if ($.data(e, "cache") != t) {
                    $.data(e, "cache", t);
                    $(e).trigger("inputchange")
                }
            }, 20))
        },
        teardown: function () {
            window.clearInterval($.data(this, "timer"))
        },
        add: function () {
            $.data(this, "cache", this.value)
        }
    };
    $("input").on("inputchange", function () {
        var e = this.value;
        if (e == a) {
            $('<p/ id="recentW">').prepend('<h2> <span style="color:green;">&#10004;</span> ' + a + "</h2> </br> " + q).prependTo("#recentWords");
            var t = random;
            var n = $.ajax({
                url: "question.php",
                type: "POST",
                data: {
                    id: t
                },
                dataType: "html"
            });
            n.done(function (e) {
                $("#question").html(e)
            });
            max_time = max_time + 5;
            points += 10;
            document.getElementById("scores").innerHTML = points;
            QuesCount++;
            AnsCount++;
            document.getElementById("words").innerHTML = AnsCount;
            $("<tr/>").prepend('<td> <span style="color:green;">&#10004;</span>' + a + "</td><td>(+10 points)</td> ").prependTo("tbody#recw")

        }
        if(QuesCount>4){
            return show();
        }
    });
    $("button#skip").click(function () {
        var e = random;
        var t = $.ajax({
            url: "question.php",
            type: "POST",
            data: {
                id: e
            },
            dataType: "html"
        });
        t.done(function (e) {
            $("#question").html(e)
        });
        $("input").focus();
        QuesCount++;
        points -= 10;
        document.getElementById("scores").innerHTML = points;
        $('<p/ id="recentW">').prepend('<h2><span style="color:red;">&#10008;</span> ' + a + "</h2> </br> " + q).prependTo("#recentWords");
        $("<tr/>").prepend('<td> <span style="color:red;">&#10008;</span> ' + a + "</td><td>(-10 points)</td>").prependTo("tbody#recw")
        if(QuesCount>4){
            return show();
        }
    })
})