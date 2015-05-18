$(document).ready(function (){

  // create a LatLng object containing the coordinate for the center of the map
  var latlng = new google.maps.LatLng(42.605651,-71.564248);

  // prepare the map properties
  var options = {
    zoom: 16,
    center: latlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    navigationControl: true,
    mapTypeControl: false,
    scrollwheel: false,
    disableDoubleClickZoom: true
  };

  // initialize the map object
  var map = new google.maps.Map(document.getElementById('google_map'), options);

  // add Marker
  var marker1 = new google.maps.Marker({
    position: latlng, map: map
  });

  // add listener for a click on the pin
  google.maps.event.addListener(marker1, 'click', function() {
    infowindow.open(map, marker1);
  });

  google.maps.event.addListener(map, 'center_changed', function() {
                // 0.1 seconds after the center of the map has changed,
                // set back the marker position.
                window.setTimeout(function() {
                  var center = map.getCenter();
                  marker1.setPosition(center);
                }, 100);
  });

  // add information window
  var infowindow = new google.maps.InfoWindow({
    content:  '<div class="info"><a href="https://www.google.com/maps/place/Barn+at+Gibbet+Hill+Groton/@42.605651,-71.564248,17z/data=!3m1!4b1!4m2!3m1!1s0x89e3bff3b005c61b:0xd7b6f6739ae5cf91" target="_blank"><strong>The Barn at Gibbet Hill</strong><br><br>61 Lowell Rd Groton, MA 01450</a></div>'
  });
});
