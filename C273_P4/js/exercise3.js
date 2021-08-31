$(document).ready(function () {
    $("form").submit(function () {
        var message = "";
        if (!$("#idName").val()) {
            message += "Name is required.<br>";
        }
        if (!$("#selCountry").val()) {
            message += "Country is required.<br>";
        }
        if (!$("#idPostal").val()) {
            message += "Postal code is required.<br>";
        }
        if (!$("input[type='radio']:checked").val()) {
            message += "Gender is required.<br>";
        }
        if (!$("input[type='checkbox']:checked")) {
            message += "At least one color is required.<br>";
        }
        if (!$("#idPhone").val()) {
            message += "Phone is required.<br>";
        } else {
            let regex = new RegExp("[8-9][0-9]{7}");
            if (!regex.test($("#idPhone").val())) {
                message += "Phone number must be starting with 8 or 9 and containing a total of 8 digits.<br>";
            }
        }
        if (!$("#idEmail").val()) {
            message += "Email is required.<br>";
        } else {
            let re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if (!re.test($("#idEmail").val())) {
                message += "Email must be entered correctly.<br>"
            }
        }
        if (!$("#idPassword").val()) {
            message += "Password is required.<br>";
        } else {
            let regex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,10}$");
            if (!regex.test($("#idPassword").val())) {
                message += "Password must be minimum eight and maximum 10 characters, at least one uppercase letter, one lowercase letter, one number and one special character.<br>";
            }
        }
        if ($("#idVerifyPassword").val() != $("#idPassword").val()) {
            message += "Password must be the same.<br>"
        }

        $("#alertBox").html(message);
        return false;
    });
});