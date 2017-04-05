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
                username: $("#username").val(),
                firstname: $("")
            }
        })
    }
}