$(document).ready(function () {
    $("form").submit(function () {
        // complete the code here

        var name = $("[name=myName]").val();
        var age = $("[name=myAge]").val();
        var message = "";

        var drinks = [];
        $("[type=checkbox]:checked").each(function () {
            // complete the code here
            drinks.push($(this).val());
        })

        // complete the code here
        message += $("[for=id_name]").html() + name + "\n";
        message += $("[for=id_age]").html() + age + "\n";
        message += "Selected drinks: " + drinks.join(" ") + "\n";

        var total = 0;
        for (i = 0; i < drinks.length; i++) {
            if (drinks[i] === "coke") {
                total += 1.20;
            } else if (drinks[i] === "sprite") {
                total += 1.30;
            } else if (drinks[i] === "fanta") {
                total += 1.40;
            }
        }

        message += "\n The total cost is $" + total;

        alert(message);


        return false;
    })
})