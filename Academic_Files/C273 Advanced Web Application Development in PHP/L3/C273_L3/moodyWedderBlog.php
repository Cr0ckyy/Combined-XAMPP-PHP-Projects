<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/all.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/moodyWedderBlog.js" type="text/javascript"></script>
    </head>
    <body >
        <div class="container">
            <h2>MoodyWedderBlog <i class="fa fa-sun"></i><i class="fa fa-tint"></i><i class="fa fa-snowflake"></i><i class="fa fa-bolt"></i></h2>
            <div class="card border-info">
                <div class="card-header bg-info text-white">Blog Entries</div>
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
                <input type="submit" id="submit" class="btn btn-info btn-block" value="Add a blog"/>
            </form>
        </div>
    </body>
</html>

