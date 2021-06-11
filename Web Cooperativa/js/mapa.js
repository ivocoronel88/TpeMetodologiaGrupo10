document.addEventListener('DOMContentLoaded', () =>{
  
  var latitude = -37.328314;
  var longitude = -59.143717;
  var mymap = L.map('map', {
    center: [latitude, longitude],
    zoom: 12
  });

  L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    maxZoom: 25,
    attribution: 'Datos del mapa de &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a>, ' + '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' + 'Imágenes © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox/streets-v11'
  }).addTo(mymap);

  L.Routing.control({
    waypoints: [
      L.latLng(latitude, longitude),
      L.latLng(-37.328342, -59.135235)
    ],
    language: 'es'
  }).addTo(mymap);
  function medirDistancia() {
    var distance = map.distance(M, secondLatLng);
    document.getElementById('distance').innerHTML = distance;
  }

  L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    maxZoom: 25,
    attribution: 'Datos del mapa de &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a>, ' + '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' + 'Imágenes © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox/streets-v11'
  }).addTo(mymap);


})