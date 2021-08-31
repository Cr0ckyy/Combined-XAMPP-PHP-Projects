<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/jquery-3.5.1.min.js"></script> 
        <script src="js/bootstrap.min.js"></script> 
        <script src="js/searchMovie.js"></script>
    </head>
    <body>
        <?php include "navbar.php"; ?>
        <div class="container">
            <h3>Search Movie Review</h3>
            <div class="row">
                <div class="col-md-12">
                    <form class="form-inline">
                        <div class="form-group mr-2">
                            <input type="text" class="form-control" id="sTitle" placeholder="Title">
                        </div>
                        <div class="form-group mr-2">
                            <input type="number" class="form-control" id="sYear" placeholder="Year">
                        </div>
                        <div class="form-group mr-2">
                            <select class="form-control" id="sPlot">
                                <option value="">Select Plot</option>
                                <option value="short">Short</option>
                                <option value="full">Full</option>
                            </select>
                        </div>
                        <input type="button" class="btn btn-default" id="btnSearch" value="Search"/>
                    </form>
                </div>
            </div>
            <br/>
            <br/>
            <div class="row">
                <div class="col-md-8">
                    <div id="contents"></div>
                </div>
                <div class="col-md-4">
                    <div id="poster"></div>
                </div>
            </div>
        </div>
    </body>
</html>
