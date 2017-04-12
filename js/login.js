$(function () {
    $("#loginForm").on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/ProjectLiveLove/php/loginValidation.php',
            data: {
                username: $("#username").val(),
                password: $("#password").val()
            },
            success: function (data) {
                /* Expected Returns:
                 0:  exact match
                 -1:  string_a < string_b
                 1:  string_a > string_b
                 */
                if(data.localeCompare("USER") == 0) {
                    $(location).attr('href', 'user-profile.php');
                } else if (data.localeCompare("COMPANY") == 0){
                    $(location).attr('href', 'company-profile.php');
                } else {
                    alert(data); //Gives popup warning message
                }

            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
    });
});