var map;
initMap();
$.post("GeoTwitter.php",{},function(respuesta) {
 /*bueno para que accedan a cada una de las filas de las tablas es así:*/
    //var prueba1 = JSON.parse(respuesta);
    console.log(respuesta);
  });
function initMap() {
   map = new google.maps.Map(document.getElementById('map'), {
     center: {lat: 10.984463, lng: -74.800978},
     zoom: 10
   });
//var script = document.createElement('script');

// This example uses a local copy of the GeoJSON stored at
// http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/2.5_week.geojsonp
/*script.src = 'https://developers.google.com/maps/documentation/javascript/examples/json/earthquake_GeoJSONP.js';
document.getElementsByTagName('head')[0].appendChild(script);
}
function eqfeed_callback(results) {
var heatmapData = [];
for (var i = 0; i < results.features.length; i++) {
 var coords = results.features[i].geometry.coordinates;
 var latLng = new google.maps.LatLng(coords[1], coords[0]);
 heatmapData.push(latLng);
}
 var heatmap = new google.maps.visualization.HeatmapLayer({
 data: heatmapData,
 dissipating: false,
 map: map
});*/

}
