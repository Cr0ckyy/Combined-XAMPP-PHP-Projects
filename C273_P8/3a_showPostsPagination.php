<?php
include("dbFunctions.php");

$limit = 5; //the number of rows to display per page

$query = "SELECT count(*) FROM posts";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_row($result);
$totalRows = $row[0];
$numPages = ceil($totalRows / $limit); //round up integer
mysqli_close($link);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script>
            $(document).ready(function () {

                //call getPosts() to load the first page
                getPosts("1");

                //Attach a click listener to all page links in the pagination
                $(".page-link").click(function () {
                    var page = parseInt($(this).html());
                    getPosts(page);
                })

                //retrieve the page number that the user clicked
                //call getPosts() passing in the page number
                //AJAX call to getPostsByPage.php passing in the page and limit as parameters
                function getPosts(page) {
                    $.ajax({
                        type: "GET",
                        url: "getPostsByPage.php",
                        cache: false,
                        data: "page=" + page + "&limit= <?php echo $limit ?>",
                        dataType: "JSON",
                        success: function (response) {
                            
                            var message = "";
                            alert("getPostsByPage.php" + "page=" + page + "&limit= <?php echo $limit ?>");
                            
                            for (i = 0; i < response.length; i++) {
                                message += "<tr>"
                                message += "<td>" + response[i].title + "</td>"
                                message += "<td>" + response[i].content + "</td>";
                                message += "</tr>"
                            }
                            $("tbody").html(message);
                        },
                        error: function (obj, textStatus, errorThrown) {
                            console.log("Error " + textStatus + ": " + errorThrown);
                        }
                    });
                }
            });
        </script>
    </head>
    <body>
        <div class="container">
            <h3>Bootstrap Pagination AJAX Example</h3>
            <table class="table table-striped">
                <thead>
                    <tr><th>Title</th><th>Content</th></tr>
                </thead>
                <tbody></tbody>                   
            </table>
            <nav>
                <ul class="pagination">
                    <?php for ($i = 1; $i <= $numPages; $i++) { ?>
                        <li class="page-item"><a class="page-link" href="#"><?php echo $i ?></a></li>
                        <?php } ?>
                </ul>
            </nav>
        </div>
    </body>
</html>
