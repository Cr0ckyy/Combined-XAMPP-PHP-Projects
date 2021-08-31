$(document).ready(function () {


    $("#btnSearch").click(function () {
        $("#contents").empty();
        $("#poster").empty();
        var title = $("#sTitle").val();
        var year = $("#sYear").val();
        var plot = $("#sPlot").val();
        $.ajax({
            url: "http://www.omdbapi.com/",
            type: "GET",
            data: "t=" + title + "&y=" + year + "&plot=" + plot + "&apikey=19c0fc0b",
            dataType: 'jsonp',
            success: function (response) {
                var message = "";
                message += "<b>Title:</b> " + response.Title + "<br/>";
                message += "<b>Released:</b> " + response.Released + "<br/>";
                message += "<b>Runtime:</b> " + response.Runtime + "<br/>";
                message += "<b>Genre:</b> " + response.Genre + "<br/>";
                message += "<b>Actors:</b> " + response.Actors + "<br/>";
                message += "<b>Plot:</b> " + response.Plot;
                $("#contents").html(message);
                $("#poster").html("<img src='" + response.Poster + "'/>");

                var myreviews = JSON.parse(localStorage.getItem("myreviews"));
                if (myreviews == null) {
                    myreviews = [];
                }

                myreviews[myreviews.length] = response;
                localStorage.setItem("myreviews", JSON.stringify(myreviews));


            },
            error: function ()
            {
                alert('Error adding data');
            }
        });

    });

});
