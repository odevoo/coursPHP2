$(document).ready(function(){
    $('#cat').on('change', function(){

    var cat = $('#cat').val();

    $.ajax({
        url: 'http://localhost/coursPHP2/webservices/bioforceserv.php',
        method: 'GET',
        data: {cat: cat},
        dataType: 'json',
        success: function(data){
                var contenu = '<ul>';
                $.each(data, function(cle, valeur){
                    contenu += '<li>' + valeur.libProduit + ': ' + valeur.prixProduit + '</li>';
                });
                contenu += '<ul>';
                $('#contenu').html(contenu);
        },
        error: function(msg, txt){
            console.log(txt);
        }
    });


    });
    

});