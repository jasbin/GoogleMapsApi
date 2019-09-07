<!DOCTYPE html>
<html>
  <head>
    <title>Google Maps</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    
  </head>
  <body>
    <header>
      <h1>Google Maps</h1>
      <button class="bypass">Load Maps</button>
      <button class="reset">Reset</button>
    </header>
    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 27.7105888, lng: 85.3280281},
          zoom: 8
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDIJ9XX2ZvRKCJcFRrl-lRanEtFUow4piM&callback=initMap"
    async defer></script>
    <script src="scripts.js"></script>
  </body>
</html>