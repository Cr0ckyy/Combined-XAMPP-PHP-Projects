$(document).ready(function () {
    $("form").submit(function () {
        // complete the code here


        //The submit event occurs when  a form is submitted. 
        // This  event can only be used on<form> elements
        var name = $("[name=myName]").val();
        var age = $("[name=myAge]").val();
        var message = "";
        var drinks = [];
        
        
        // This selector retrieves all selected checkboxes.
        //The each() function is used  
        //to iterate every selected checkbox

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
            if (drinks[i] === "COKE") {
                total += 1.20;
            } else if (drinks[i] === "SPRITE") {
                total += 1.30;
            } else if (drinks[i] === "PEPSI") {
                total += 1.40;
            } else if (drinks[i] === "7-UP") {
                total += 1.50;
            }
        }
            // The toFixed() method converts a 
            // number into a string, 
            // keeping a specified number of decimals.
        message += "\n The total cost is $" + total.toFixed(2);  
        alert(message);
        return false;
    })
})