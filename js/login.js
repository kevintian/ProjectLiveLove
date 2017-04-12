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
                try {
                    var userInfo = JSON.parse(data);
                    var url;
                    if(userInfo["user_type"].localeCompare("USER") == 0 || userInfo["user_type"].localeCompare("COMPANY") == 0) {
                        url = 'profile.php?id=' + userInfo["username"];
                        $(location).attr('href', url);
                    } else {
                        alert(data); //Gives popup warning message
                    }
                } catch (e) {
                    alert(data);
                }
                /* Expected Returns:
                 0:  exact match
                 -1:  string_a < string_b
                 1:  string_a > string_b
                 */

            },
            error: function (xhr, ajaxOptions, thrownError) {
                // alert(xhr.status);
                // alert(thrownError);
            }
        });
    });
});