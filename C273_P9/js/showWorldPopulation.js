$(document).ready(function () {

    $.ajax({
        type: "GET",
        url: "getStatistics.php",
        cache: false,
        dataType: "JSON",
        success: function (response) {

             var data = [];
            var labels = [];
            for (i = 0; i < response.length; i++) {
                data.push(parseInt(response[i].population));
                labels.push(response[i].country);
            }

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
        }
    });

});
