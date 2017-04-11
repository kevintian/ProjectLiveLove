/**
 * Created by yixinsun on 4/2/17.
 */
$(function () {
    $("#loginForm").on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/ProjectLiveLove/php/login.php',
            data: {
                username: $("#username").val(),
                password: $("#password").val()
            },
            success: function (data) {
                alert(data);
                $(location).attr('href', 'user-profile.html');
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
    });
});