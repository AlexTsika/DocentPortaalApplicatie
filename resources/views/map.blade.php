<!DOCTYPE html>
<html>
<head>
    <title>OpenStreetMap</title>
    <style>
        #map {
            width: 100%;
            height: 400px;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/ol.css') }}" />
</head>
<body>
    <div id="map"></div>

    <script src="{{ asset('js/ol.js') }}"></script>
    <script>
        var map = new ol.Map({
            target: 'map',
            layers: [
                new ol.layer.Tile({
                    source: new ol.source.OSM()
                })
            ],
            view: new ol.View({
                center: ol.proj.fromLonLat([0, 0]),
                zoom: 2
            })
        });
    </script>
</body>
</html>