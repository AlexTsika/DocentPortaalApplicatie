<div id="map"></div>
<script>
    var latitude = {{ $latitude }};
    var longitude = {{ $longitude }};

    var map = L.map('map').setView([latitude, longitude], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: 'Map data © <a href="https://openstreetmap.org">OpenStreetMap</a> contributors',
        maxZoom: 18,
    }).addTo(map);

    L.marker([latitude, longitude]).addTo(map);
</script>
