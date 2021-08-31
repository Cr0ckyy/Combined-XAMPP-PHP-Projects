$(document).ready(function () {

    var data = [10, 20, 30, 40, 50];
    var labels = ["Singapore", "Malaysia", "Thailand", "Vietnam", "Myanmar"];

    var barChart = new Chart($("#barChart"), {
        type: 'horizontalBar',
        data: {
            datasets: [{
                    data: data,
                    backgroundColor: "lightblue",
                    label: 'Population'
                }],
            labels: labels
        },
        options: {
            responsive: true
        }
    });

});
