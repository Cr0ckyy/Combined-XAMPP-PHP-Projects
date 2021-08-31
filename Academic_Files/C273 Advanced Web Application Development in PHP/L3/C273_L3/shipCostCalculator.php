<html>
    <head>
        <title>Shipping Cost Calculator</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>

    </head>
    <body>
        <div class="container">
            <h1>Shipping Cost Calculator</h1>
            <hr>
            <form method="post" action="doShipCostCalculator.php">
                <div class="form-group">
                    <label for="weight">Book weight(in kg):</label>
                    <input type="text" class="form-control" name="weight" id="weight">
                </div>

                <div class="form-group">
                    <label for="number">Number of book to buy:</label>
                    <input type="text" class="form-control" name="number" id="number">
                </div>

                <div class="form-group">
                    <label>Shipping Time</label>:
                    <input type="radio" name="time" id="short" value="1 - 2" checked><label for="short"> 1 - 2 days</label>
                    <input type="radio" name="time" id="medium" value="3 - 5"><label for="medium"> 3 - 5 days</label>
                    <input type="radio" name="time" id="long" value="6 - 9"><label for="long"> 6 - 9 days</label>
                </div>

                <div class="form-group">
                    <label>Shipping method</label>:
                    <select class="form-control" name="method">
                        <option id="methodAir" value="air">Air</option>
                        <option id="methodSea" value="sea">Sea</option>
                    </select>
                </div> 

                <div class="form-group">
                    <label for="id_coke">Extra addition:</label>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input onclick="allSelected()" type="checkbox" id="better_box" name="addition[]" value="better box" class="form-check-input"/>better box
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input onclick="allSelected()" type="checkbox" id="weekend_delivery" name="addition[]" value="weekend delivery" class="form-check-input"/>weekend delivery
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input onclick="allSelected()" type="checkbox" id="gift_wrap" name="addition[]" value="gift wrap" class="form-check-input"/>gift wrap
                        </label>
                    </div>
                </div>

                <input type="submit" id="calculate" class="btn btn-info btn-block" value="Calculate"/>
            </form>
        </div>
    </body>
</html>
