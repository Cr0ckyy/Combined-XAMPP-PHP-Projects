<!DOCTYPE html>
<html>
    <head>
        <title>Exercise 3</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script>
            $(document).ready(function () {
                $("#blogform").submit(function (evt) {

                    // Attribute Selectors
                    // - select elements based on the value  of their attributes.

                    // All elements with a id attribute value equal to name/blog
                    // val() - returns the value attribute of the selected elements (for form elements)
                    var name = $("[id=name]").val();
                    var blog = $("[id=blog]").val();

                    var message = "";

                    // retrieve the current date time
                    var currDate = new Date();

                    var options = {weekday: 'short', day: 'numeric', year: 'numeric', month: 'short', hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: false, timeZoneName: 'short'};




                    message += name + " on " + currDate.toUTCString() + "<br>";
                    message += "<b>" + blog + "</b><br><br>";
                    $(".card-body").append(message);

                    // Reset the values of both form fields
                    $("#name").val("")
                    $("#blog").val("")

                    return false;
                })
            })

        </script>
    </head>
    <body>
        <p class=greet>How are you</p>
        <div class="container">
            <h2>MoodyWedderBlog <i class="fa fa-sun"></i><i class="fa fa-tint"></i><i class="fa fa-snowflake"></i><i class="fa fa-bolt"></i></h2>
            <div class="card border-info">
                <div class="card-header bg-success text-white">Blog Entries</div>
                <div class="card-body"></div>
            </div>
            <form id="blogform">
                <div class="form-group">
                    <label for="name">Enter your name (optional):</label>
                    <input type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <textarea id="blog" rows="10" cols="20" class="form-control"></textarea>
                </div>
                <input type="submit" class="btn btn-info btn-block" value="Add a blog"/>
            </form>
        </div>
    </body>
</html>
