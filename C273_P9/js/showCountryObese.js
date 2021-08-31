$(document).ready(function () {

    $("#idCountry").change(function () {
        var id = $(this).val();

        $.ajax({
            type: "GET",
            url: "getCountryDetails.php",
            data: "id=" + id,
            cache: false,
            dataType: "JSON",
            success: function (response) {
                console.log(response);
                var message = "<tbody>";
                    message += "<tr><td>" + response.population + "</td>"
                            + "<td>" + response.obese + "</td></tr>";
                
                message += "</tbody>";
                $("#obeseTable").html(message);
            }
        });
    });
});
