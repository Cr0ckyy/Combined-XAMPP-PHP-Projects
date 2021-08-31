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
        <script src="js/exercise3.js"></script>
    </head>
    <body>
        <div class="container">
            <h1>Exercise 3</h1>
            <form method="post" action="#">
                <div class="form-group">
                    <label for="id_name">Name: </label>
                    <input type="text" name="myName" id="id_name" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="id_age">Age: </label>
                    <input type="text" name="myAge" id="id_age" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="id_coke">Drinks:</label>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" id="id_coke" name="drinks[]" value="COKE" class="form-check-input"/>Coke($1.20)
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" id="id_sprite" name="drinks[]" value="SPRITE" class="form-check-input"/>Sprite($1.30)
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" id="id_pepsi" name="drinks[]" value="PEPSI" class="form-check-input"/>Pepsi($1.40)
                        </label>
                    </div>

                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" id="id_7-up" name="drinks[]" value="7-UP" class="form-check-input"/>7-UP($1.50)
                        </label>
                    </div>
                </div>
                <input class="btn btn-primary" type="submit" value="Calculate" />
            </form>
        </div>
    </body>
</html>
