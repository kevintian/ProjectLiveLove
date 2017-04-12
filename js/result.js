$(function () {
    var source = $('#event-template').html();
    var template = Handlebars.compile(source);
    var html = template(data);
    $('#result').html(html);
});

var data = [
    {
        Event_Name: "Volunteer Organization 1",
        Organization_Name: "Animal Shelter",
        Event_description: "this is an opportunity to..."
    },
    {
        Event_Name: "Volunteer Organization 1",
        Organization_Name: "Animal Shelter",
        Event_description: "this is an opportunity to..."
    },
    {
        Event_Name: "Volunteer Organization 1",
        Organization_Name: "Animal Shelter",
        Event_description: "this is an opportunity to..."
    }
];