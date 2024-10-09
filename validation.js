
        $(document).ready(function () {
            $("#login").submit(function (login) {
                login.preventDefault();
                var email = $("#email").val();
                var password = $("#password").val();
                //remove errror message
                $(".error").remove();

                if (email.length < 30) {
                    $("#email").after('<span class="error">This filed is required</span>');
                }
                if (password.length < 30) {
                    $('#password').after('<span class="error">This filed is required</span>');
                }
            });
        });
    


        

// index page validation

$(document).ready(function () {
    $("#form2").submit(function (login) {
        login.preventDefault();
        var name2 = $("#name2").val();
        var email2 = $("#email2").val();
        var cnum = $("#cnum").val();
        // Remove error messages
        $(".error").remove();

        if (name2.length == 0) {
            $("#name2").after('<span class="error">This field is required</span>');
        }

        if (email2.length == 0) {
            $("#email2").after('<span class="error">This field is required</span>');
        }

        if (cnum.length == 0) {
            $('#cnum').after('<span class="error">This field is required</span>');
        }
    });
});
