$(document).ready(function () {
    $("form").submit(function () {
        let weight = $("[name=weight]").val();
        let number = $("[name=number]").val();
        var time = $(":radio:checked").val();
        var method = $("select").val();
        var message = "";
        var addition = [];
        var total = 0;

        if (time == "1-2")
            total += 40;
        else if (time == "3-5")
            total += 25
        else if (time == "6-9")
            total += 10

        if (method == "sea")
            total += 40;
        else if (method == "air")
            total += 30;

        total += (0.5 * weight);

        $("[type=checkbox]:checked").each(function () {
            // complete the code here
            addition.push($(this).val());
        });

        for (i in addition) {
            if (addition[i] == "better box")
                total += 10;
            else if (addition[i] == "weekend delivery")
                total += 15;
            else if (addition[i] == "gift wrap")
                total += 15;
        }

        if (number > 3) {
            if (addition.length == 3) {
                total *= 0.85;
            } else {
                total *= 0.9;
            }
        }

        message += $("[for=weight]").html() + " " + weight + " \n";
        message += $("[for=number]").html() + ": " + number + " \n";
        message += "Method: " + method + " \n";
        message += " \n";
        message += "Shipping options (days): " + time + " \n";
        message += "Extra additions: " + addition.join(", ") + " \n";
        message += "Total cost: $" + total;
        if (confirm(message) == false) {
            $("form").trigger("reset");
            return false;
        }
        return true;
    });
});
function allSelected() {
    var allChecked = $('[type=checkbox]:checked').length;
    if (allChecked == 3) {
        alert("You have selected all extra services");
    }
}