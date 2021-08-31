var map;
$(document).ready(function () {
    var myOptions = {
        zoom: 11,
        center: {lat: 1.3521, lng: 103.8198},
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById('map_canvas'),
            myOptions);

    loadRestaurants();

    listenAddMarker();

    listenCurrLoc();

    listenSaveRestaurant();

});

function loadRestaurants() {
    $.ajax({
        url: "getRestaurants.php",
        type: "GET",
        dataType: "JSON",
        success: function (response) {
            for (i = 0; i < response.length; i++) {
                var marker = new google.maps.Marker({
                    position: {lat: response[i].latitude, lng: response[i].longitude},
                    map: map,
                    title: response[i].name
                });

                marker.infowindow = new google.maps.InfoWindow({
                    content: "<p>" + response[i].name + "</p><p>Description: " + response[i].description + "</p>"
                })
                google.maps.event.addListener(marker, "click", function (event) {
                    this.infowindow.open(map, this);
                });
            }
        },
        error: function (obj, textStatus, errorThrown) {
            console.log("Error" + textStatus + ":" + errorThrown);
            alert("Error" + textStatus + ":" + errorThrown);
            return false;
        }
    });
}

function listenAddMarker() {
    google.maps.event.addListener(map, 'click', function (event) {
        var marker = new google.maps.Marker({
            position: {lat: event.latLng.lat(), lng: event.latLng.lng()},
            map: map,
            title: "here"
        });
        marker.setIcon('http://maps.google.com/mapfiles/ms/icons/green-dot.png');
        $('#lat').val(marker.position.lat());
        $('#long').val(marker.position.lng());
    });
}

function listenCurrLoc() {
    $("#img").click(function () {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                var userMarker = new google.maps.Marker({
                    position: {lat: position.coords.latitude, lng: position.coords.longitude},
                    map: map,
                    title: "Current Position"
                });
                userMarker.setIcon('http://maps.google.com/mapfiles/ms/icons/blue-dot.png');
                $('#lat').val(userMarker.position.lat());
                $('#long').val(userMarker.position.lng());
            });

        }
    });
}

function listenSaveRestaurant() {
    $("#btnAddRes").click(function () {
        var name = $("#name").val();
        var des = $("#des").val();
        var lat = $("#lat").val();
        var long = $("#long").val();
        $.ajax({
            url: "addRestaurant.php",
            type: "POST",
            dataType: "JSON",
            data: "name=" + name + "&description=" + des + "&lat=" + lat + "&lng=" + long,
            success: function (response) {
                if (response.success === '1') {
                    $('#success').modal('show');
                } else {
                    $('#fail').modal('show');
                }
            },
            error: function (obj, textStatus, errorThrown) {
                console.log("Error" + textStatus + ":" + errorThrown);
                alert("Error" + textStatus + ":" + errorThrown);
                return false;
            }
        });
    });
}