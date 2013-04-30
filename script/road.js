
function initialize() {
  var mapOptions = {
    center: new google.maps.LatLng(38.248427,-121.760101),
    zoom: 8,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  var map = new google.maps.Map(document.getElementById("map-canvas"),
    mapOptions);
  var trafficLayer = new google.maps.TrafficLayer();
  trafficLayer.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initialize);
