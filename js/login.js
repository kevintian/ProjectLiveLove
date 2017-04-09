/**
 * Created by yixinsun on 4/2/17.
 */
$(function () {
    $("#loginSubmit").click(function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'ProjectLiveLove/php/login.php',
            data: {
                username: $("#usernamesu").val(),
                firstname: $("#firstname").val(),
                lastname: $("#lastname").val(),
                email: $("#emailsu").val(),
                password: $("#passwordsu").val()
            },
            success: function (data) {
                alert(data);
                console.log(data);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
                console.log(thrownError);
            }
        });
    });
});