/**
 * Created by kevin on 4/12/2017.
 */
$(function () {
    var source = $('#event-template').html();
    var template = Handlebars.compile(source);
    var html = template(data);
    $('#result').html(html);
});

var data = [
    {
        Event_Name: "Volunteer Opportunity 1",
        Organization_Name: "Animal Shelter",
        Event_description: "Event description"
    },
    {
        Event_Name: "Volunteer Opportunity 2",
        Organization_Name: "Animal Shelter",
        Event_description: "Event description"
    },
    {
        Event_Name: "Volunteer Opportunity 3",
        Organization_Name: "Animal Shelter",
        Event_description: "Event description"
    }
];