$(document).ready(function () {
    
    var movies = JSON.parse(localStorage.getItem("movies"));
    
    if (movies === null) {
        movies = [];
    }

    var message = "";
    
    for (var i = 0; i < movies.length; i++) {
        var movie = movies[i];
        message += '<div class="card"><div class="card-header">' + movie.title + '</div>';
        message += '<div class="card-body">' + movie.plot + '</div></div><br/>';
    }

    $("#contents").append(message);
});


