/**
 * Created by GBADEBO on 26/09/2017.
 */

function print(data) {
    document.writeln(data + '<br>');
}


$('#text-search').keyup(function () {
    let input = $('#text-search').val();
    $.get("http://localhost/Hogwarts/Api", {'data': input}, function (data) {
        $('tbody').html(data);

    }).fail(function() {
            alert('error')
        });

});





