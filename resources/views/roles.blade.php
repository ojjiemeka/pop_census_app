<!-- resources/views/map.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>LGA Map</title>
    <style>
         
         #map { height: 500px; }
    </style>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
crossorigin=""></script>


</head>
<body>
    <div id="map"></div>
    
    <script>
        var map = L.map('map').setView([9.0820, 8.6753], 6);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
    maxZoom: 18,
}).addTo(map);

// Add markers or polygons to represent each state in Nigeria
var abujaMarker = L.marker([9.0765, 7.3986]).addTo(map);
abujaMarker.bindPopup("Abuja");

// You can customize the markers or polygons based on your requirements

// Example marker for Lagos State
var lagosMarker = L.marker([6.5244, 3.3792]).addTo(map);
lagosMarker.bindPopup("Lagos State");

// Add more markers or polygons for other states in Nigeria

    </script>
    
</body>
</html>

