window.init_map = function () {

    var map = new google.maps.Map(document.getElementById("map"));
    var markers = [];

    $.ajax({
        url: '/petition/map-points',
        type: 'GET',
        dataType: 'json',
    })
    .done(function(data) {
        var points = data.points;
        var markers = [];
        for (var i = 0; i < points.length; i++) {
            var point = points[i];
            var position = new google.maps.LatLng(point['geo_lat'], point['geo_lng']);
            var marker = new google.maps.Marker({
                position: position
            });
            markers.push(marker);
        }
        var markerCluster = new MarkerClusterer(
            map,
            markers,
            { imagePath: 'https://cdn.rawgit.com/googlemaps/js-marker-clusterer/gh-pages/images/m' }
        );
        markerCluster.fitMapToMarkers();
        map.fitBounds(bounds);
        $( window ).resize(function() {
            map.fitBounds(bounds);
        });
    })

}
