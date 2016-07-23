window.init_map = function () {

    var map = new google.maps.Map(document.getElementById("map"));
    var markers = [];
    var bounds = new google.maps.LatLngBounds();

    $.ajax({
        url: '/petition/map-points',
        type: 'GET',
        dataType: 'json',
    })
    .done(function(data) {
        var points = data.points;
        for (var i = 0; i < points.length; i++) {
            var point = points[i];
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(point['geo_lat'], point['geo_lng']),
                map: map
            });

            bounds.extend(marker.position);
        }

        map.fitBounds(bounds);
        $( window ).resize(function() {
            map.fitBounds(bounds);
        });
    })

}
