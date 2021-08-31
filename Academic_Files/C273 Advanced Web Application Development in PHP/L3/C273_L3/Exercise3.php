<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Exercise 3</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/exercise3.js" type="text/javascript"></script>
        
        
        
        
    </head>
    <body>
        <div class="container">
            <h1>Exercise 3</h1>
            <form method="post" action="#">
                <div class="form-group">
                    <label for="id_name">Name:</label>
                    <input type="text" name="myName" id="id_name" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="id_age">Age</label>
                    <input type="text" name="myAge" id="id_age" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="id_coke">Drinks:</label>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" id="id_coke" name="drinks[]" value="coke" class="form-check-input"/>Coke($1.20)
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" id="id_sprite" name="drinks[]" value="sprite" class="form-check-input"/>Sprite($1.30)
                        </label>
                    </div>
                    
                </div>
                <input class="btn btn-primary" type="submit" value="Calculate" />
            </form>
        </div>
    </body>
</html>
