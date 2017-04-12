/**
 * Created by kevin on 4/11/2017.
 */
function logout() {
    $.ajax({
        type: 'POST',
        url: '/ProjectLiveLove/php/logout.php',
        success: function () {
            $(location).attr('href', 'home.php');
        },
        error: function (xhr, ajaxOptions, thrownError) {
            alert(xhr.status);
            alert(thrownError);
        }
    });
}