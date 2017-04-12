/**
 * Created by kevin on 4/12/2017.
 */
$(function () {
    $.ajax({
        type: 'GET',
        url: '/ProjectLiveLove/php/getEvents.php',
        data: {
            username: $(document).getUrlParam("id")
        },
        success: function (data) {
            console.log(data);
            var jsonData = JSON.parse(data);
            var source = $('#event-template').html();
            var template = Handlebars.compile(source);
            var html = template(jsonData);
            $('#result').html(html);
        },
        error: function (xhr, ajaxOptions, thrownError) {
            alert(xhr.status);
            alert(thrownError);
        }
    });


});

// var data = [
//     {
//         Event_Name: "Volunteer Opportunity 1",
//         Organization_Name: "Animal Shelter",
//         Event_description: "Event description"
//     },
//     {
//         Event_Name: "Volunteer Opportunity 2",
//         Organization_Name: "Animal Shelter",
//         Event_description: "Event description"
//     },
//     {
//         Event_Name: "Volunteer Opportunity 3",
//         Organization_Name: "Animal Shelter",
//         Event_description: "Event description"
//     }
// ];