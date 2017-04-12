/**
 * Created by kevin on 3/6/2017.
 */
$(document).ready(function () {

    //Initializes the youtube player
    $(".player").mb_YTPlayer();
    $('.player').on("YTPReady",function(e){
        //Once video is ready remove the filler image
        $('.imageOverlay').fadeOut('slow');
    });

    //Initializes the autocomplete
    var input = $(".typeahead");
    input.typeahead({
        source: [
            "Test1", "Test2", "Test3", "asdasd"
        ],
        autoSelect: true,
        fitToElement:true,
    });

    // catch enter code in search form in front page
    $('#search').keyup(function (e) {
        var str = $('#search').val();
        var url = "result.php?search=" + str;
        if (e.keyCode == 13) {
            $(location).attr('href', url);
        }
    });


});