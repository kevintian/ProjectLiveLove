$(function () {
    var source = $('#event-template').html();
    var template = Handlebars.compile(source);
    var html = template(data);
    $('#result').html(html);
});

var data = [
    {
        Event_Name: "volunteer opportunity 1",
        Organization_Name: "Animal Shelter",
        Event_description: "this is an opportunity to..."
    },
    {
        Event_Name: "volunteer opportunity 2",
        Organization_Name: "Animal Shelter",
        Event_description: "this is an opportunity to..."
    },
    {
        Event_Name: "volunteer opportunity 3",
        Organization_Name: "Animal Shelter",
        Event_description: "this is an opportunity to..."
    }
];