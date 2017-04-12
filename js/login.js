/**
 * Created by yixinsun on 4/2/17.
 */
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
                if(data.localeCompare("USER")) {
                    $(location).attr('href', 'user-profile.html');
                } else if (data.localeCompare("COMPANY")){
                    $(location).attr('href', 'company-profile.html');
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