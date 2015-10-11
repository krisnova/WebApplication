$('.lergin').on('click', function(){
    $.ajax({
        url: "http://10.0.0.86/User/Auth/Login/Facebook",
        method: "GET"
    })
        .done(function( data ) {
            console.log(data);
        });
});