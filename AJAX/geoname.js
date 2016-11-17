$(document).ready(function(){
// click sur le bounton
    $('#btnSub').on('click', function(){
        cp = $('#cp').val();
        if (cp === '') {
            $('#contenu').html('la recherche ne peut être vide');
            return false;
        }

        $.ajax({
            url: "http://api.geonames.org/postalCodeSearchJSON",
            method: 'GET',
            data: {postalcode: cp, country: 'FR', username: 'ophois34'},
            dataType: 'json',
            success: function(data){
                var contenu = '';
                $.each(data, function(cle,valeur){
                    contenu = '<h1>' + valeur.length + ' commune(s): </h1>';
                    contenu += '<ul>';
                    $.each(valeur, function(key, val){
                            //placeName contenu
                            contenu += '<li>' + val.placeName;
                            contenu += '('+ val.lat + ', '+ val.lng + ') </li>';
                    });
                    contenu += '</ul>';
                    
                });
                $('#contenu').html(contenu);
            },
            error: function(msg, txt){
                console.log('erreur: ' + txt);
            },
        });
        return false;
    });
});