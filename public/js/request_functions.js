
function loginRequest() {

    var email = $('#email_field').val();
    var password = $('#password_field').val();


    /*$.post("http://127.0.0.1:8000/login",
    {
        email: email,
        password: password
    })*/
    $.ajax ({
        url: 'http://127.0.0.1:8000/login',
        type: 'POST',
        data: {
            email: email,
            password: password
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(result) {
        },
        error: function(errors) {
        }
    });
}
