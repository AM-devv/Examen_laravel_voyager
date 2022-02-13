$(function(){

    let baseUrl = $('body').attr('data-baseURL');
    let offsetCalcule = 6;

    $('#older-works').click(function(e){
        e.preventDefault();
        $.ajax({
            url: baseUrl + '/ajax/older-works',
            data: {
                offset: offsetCalcule
            },
            method: 'get',
            success: function(responsePHP){
                $('#turlututu').append(responsePHP).find('col-md-4 col-sm-6:nth-last-of-type(-n+6)').hide().fadeIn();
                offsetCalcule += 6;
            },
            error: function(){
                alert("Probleme durant la transaction");
            }
        });
    });
});