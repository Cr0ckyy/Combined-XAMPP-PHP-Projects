$(document).ready(function() {   
    $(".card").css("border", "1px solid black");
    $(".card-header").removeClass("bg-info");
    $(".card-header").addClass("bg-success");

    $("#blogform").submit(function (evt) {
        var message = "";
        var currDate = new Date();
        var days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
        var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        var string = days[currDate.getDay()-1] + ", " + currDate.getDate() + " " + months[(currDate.getMonth())] + " " + currDate.getFullYear() + " " + currDate.getHours() + ":" + currDate.getMinutes() + ":" + currDate.getSeconds();
        var name = $("#name").val();
        var entry = $("#blog").val();
        message = name + " on " + string + " GMT" + "<br/><b>" +entry.bold()+ "</b>";
        
        $(".card-body").append(message);
        $("#name").val("");
        $("#blog").val("");
        return false;
    });
});


