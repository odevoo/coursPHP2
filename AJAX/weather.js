$(document).ready(function(){
    var key;
    $.ajax({
        url: 'http://apidev.accuweather.com/locations/v1/search',
        method: 'GET',
        data: { q: 'le perray en yvelines', apikey: 'hoArfRosT1215'},
        dataType: 'json',
        success: function(data){
                
                key = data[0].Key;
                $.ajax({
        
                    url: 'http://apidev.accuweather.com/currentconditions/v1/' + key +'.json',
                    method: 'GET',
                    data: {language: 'fr', apikey: 'hoArfRosT1215'},
                    dataType: 'json',
                    success: function(data2){
                        console.log(data2);
                        
                        console.log(data2[0].Temperature.Metric.Value + '°C');
                        $('#weather').html('Temps: ' + data2[0].WeatherText + ' Temperature: ' + data2[0].Temperature.Metric.Value + '°C' );
                        }
                    });
                
        }
    });
    console.log(key);
    
});