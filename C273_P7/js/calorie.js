$(document).ready(function () {

    $("form").validate({
        rules: {
            age: {
                required: true,
                digits: true
            },
            height: {
                required: true,
                number: true
            },
            weight: {
                required: true,
                number: true
            },
            gender: {
                required: true
            }
        },
        messages: {
            age: {
                required: "Please enter your age",
                digits: "Invalid age"
            },
            height: {
                required: "Please enter your height.",
                number: "Invalid height"
            },
            weight: {
                required: "Please enter your weight.",
                number: "Invalid weight"
            },
            gender: {
                required: "Please select your gender"
            }
        },
        errorPlacement: function (error, element) {
            if (element.is(":radio")) {
                error.appendTo(element.parents('.form-group'));
            } else { // This is the default behavior
                error.insertAfter(element);
            }
        }
        ,
        submitHandler: function () {
            
            var age = $("[name=age]").val();
            var gender = $("[name=gender]").val();
            var weight = $("[name=weight]").val();
            var height = $("[name=height]").val();
            
            $.ajax({
                
                type: "GET",
                url: "1d_getCalorieResults.php",
                data: "age=" + age + "&gender=" + gender + "&weight=" + weight + "&height=" + height,
                cache: false,
                dataType: "JSON",
                
                success: function (response) {
                    console.log(response.result);
                    $(".card-footer").html("Your calorie per day is " + response.result);
                },
                error: function (response) {
                    console.log(response);
                }
            });
            return false;
        }
    });


})
