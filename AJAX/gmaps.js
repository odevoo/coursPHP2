var map;

function initMap(){
    var div = document.getElementById('map');
    var latLng = {lat: 48.6971623, lng: 1.8825143000000253};
    var img = 'cat.png';
    var options = {
            center: new google.maps.LatLng(48.6971623, 1.8825143000000253), 
            mapTypeId: google.maps.MapTypeId.HYBRID,
            zoom: 15
        };
    var map = new google.maps.Map(div, options);
    var marker = new google.maps.Marker({
    position: latLng,
    animation: google.maps.Animation.DROP,
    map: map,
    icon: img,
    

});
    var content = '<h1>Bastien</h1>';
    var popup = new google.maps.InfoWindow({ content: content,  maxWidth: 650});
    marker.addListener('click', function() {
    popup.open(map, marker);
  });
}