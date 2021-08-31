$(document).ready(function() {
    $("form").submit(function() {
        var name = $("[name=myName]").val();
        var age = $("[name=myAge]").val();
        var drinks = [];
        var message = "";
        var total = 0;
        
        $("[type=checkbox]:checked").each(function () {
            // complete the code here
            drinks.push($(this).val());
        });

        for(i in drinks) {
            if (drinks[i] == "coke") total += 1.20;
            else if (drinks[i] == "sprite") total += 1.30;
        }

        message += $("[for=id_name]").html() + " " + name + " \n";
        message += $("[for=id_age]").html() + ": " + age + " \n";
        message += "Selected drinks: " + drinks.join(" ") + " \n";
        message += " \n";
        message += "Total cost: $" + total;
        alert(message);
        return false;
    });
});
