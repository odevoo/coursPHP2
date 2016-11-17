function maPosition(pos){
    var infosPos =  'Position determinée:<ul>';
        infosPos += '<li>Latitude: ' + pos.coords.latitude + '</li>';
        infosPos += '<li>Longitude: ' + pos.coords.longitude + '</li>';
        infosPos += '<li>Altitude: ' + pos.coords.altitude + '</li>';
        infosPos += '<li>Altitude: ' + pos.coords.accuracy + '</li>';
        infosPos += '<li>Altitude: ' + pos.coords.altitudeAccuracy + '</li>';
        infosPos += '<li>Altitude: ' + pos.coords.heading + '</li>';
        infosPos += '<li>Speed: ' + pos.coords.speed + '</li>';
        infosPos += '<li>Altitude: ' + pos.timestamp + '</li></ul>';
        document.getElementById('position').innerHTML = infosPos;
       }



       if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(maPosition);
       }