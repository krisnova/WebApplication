$('.lergin').on('click', function(){
    $.ajax({
        url: "10.0.0.228/User/Auth/Login/Facebook",
        data: {},
        method: "GET"
    })
        .done(function( data ) {
            console.log(data);
        });
});