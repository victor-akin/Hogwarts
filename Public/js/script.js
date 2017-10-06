/**
 * Created by GBADEBO on 26/09/2017.
 */



$('#text-search').keyup(function () {
    let input = $('#text-search').val();
    $.get("http://localhost/Hogwarts/Api", {'data': input}, function (data) {
        $('#display').html(data)

    }).fail(function() {
            alert('error')
        });

});

