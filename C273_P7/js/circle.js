$(document).ready(function () {

    $("form").validate({
        rules: {
            radius: {
                required: true,
                pattern: /^\d+(\.\d{1,2})?$/
            },
            type: {
                required: true
            }
        },
        messages: {
            radius: {
                required: "Number is required",
                pattern: "Invalid number"
            },
            type: {
                required: "Type is required"
            }
        },
        submitHandler: function () {
            var radius = parseFloat($("[name=radius]").val());
            var type = $("[name=type]:checked").val();

            $.ajax({
                type: "GET",
                url: "1c_getCircleResults.php",
                data: "radius=" + radius + "&type=" + type,
                cache: false,
                dataType: "JSON",
                success: function (data) {         
                    $("#results").html("Result: "+data.result);
                },
                error: function (obj, textStatus, errorThrown) {
                    console.log("Error " + textStatus + ": " + errorThrown);
                }
            });
            return false;
        }
    });
});

