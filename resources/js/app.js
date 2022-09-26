require('./bootstrap');

$('#Generate').click(() => {
    $.ajax({
        url: '/generate',
        method: 'post',
        headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
        dataType: 'html',
        data: {
            symbols_type: $('#SymbolsType').val(),
            length: $('#Length').val(),
        },
        success: (data) => {
            $('#Result').text(data);
        }
    });
})
