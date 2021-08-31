<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap 4 Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>^
        <script>

            $(document).ready(function () {

                $("#bg").attr("src", "images/thesopranos.jpg");
                $("#bg").css({"object-fit": "scale-down", "width": "100%", "height": "100%"});
                $("img").css('display', 'inline-block');




                // when the checkbox is clicked
                $("[type=checkbox]").click(function () {

                    var message = "";

                    // those checkboxs that have been checked
                    $("[type=checkbox]:checked").each(function () {

                        message += $(this).val() + "\n";
                    })

                    $("#results").val(message);
                });


                // When id-pizzaform The submit button is clicked
                $("#pizzaform").submit(function () {


                    // get the value of element id-results 
                    var message = $("#results").val();

                    var tmp = confirm("Are you sure you wish to have the following  toppings? \n\n" + message);



                    if (tmp) {
                        alert("Order submitted");
                        return true
                    } else {
                        return false;
                    }
                })


                $("#b4").click(function () {
                    var audio = document.getElementById('audio');
                    audio.currentTime = 0;
                    audio.play();
                });
            });
        </script>
        <style>

            .checkbox { 
                font-weight: bold;
            } 

        </style>
    </head>
    
    <body>
        
    <body style="color: white; background-image: url('images/naples.jpeg'); background-size: 50% 50%; ">
        <div class="row">
            <div class="text-center">
                <h1>Napolizz Pizza</h1>
                <h3>Neapolitan pizza also known as Naples-style pizza, 
                    is a style of pizza made with tomatoes and mozzarella cheese</h3>
                <img id="bg"/><br>
            </div>     
        </div>
    </div>

    <h1></h1>
    <div class="container">
        <br/>
        <br><form id="pizzaform">
            <div class="form-group">
                <label>Pick your pizza toppings:</label>
            </div>
            <div class="checkbox">
                <label><input type="checkbox" value="Tomatoes"> Tomatoes</label><br/>
                <label><input type="checkbox" value="Salami"> Salami</label><br/>
                <label><input type="checkbox" value="Pineapple"> Pineapple</label><br/>
                <label><input type="checkbox" value="Canadian bacon"> Canadian bacon</label><br/>
                <label><input type="checkbox" value="Anchovies"> Anchovies</label><br/>
                <label><input type="checkbox" value="Extra Cheese"> Extra Cheese</label>
            </div>
            <div class="form-group">
                <label for="results">Pizza Toppings:</label>
                <textarea id="results" rows="10" cols="20" class="form-control"></textarea>
            </div>   
            <img src="images/PizzaMan.gif" alt=""/><br/><br/>
            <input type="submit" class="btn btn-default" value="Submit"/>
        </form>
    </div>

    <audio id="audio" src="audio/Tarantella_Napoletana.mp3"></audio>

    <button id="b4">The Pizza Song</button>
    
</body>
</html>
