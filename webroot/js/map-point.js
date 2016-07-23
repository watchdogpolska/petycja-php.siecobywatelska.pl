window.init_map = function () {

    var el = document.getElementById("map")
    var lat = el.getAttribute('data-lat');
    var lng = el.getAttribute('data-lng');

    var position = new google.maps.LatLng(lat, lng);

    var map = new google.maps.Map(el, {
        center: position,
        zoom: 6
    });

    var marker = new google.maps.Marker({
        position: position,
        map: map
    });

    $( window ).resize(function() {
        map.fitBounds(bounds);
    });

}
