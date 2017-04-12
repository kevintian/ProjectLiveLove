<?php
$arr = array(
    array(
        "Event_Name" => "Volunteer Opportunity 1",
        "Organization_Name" => "Animal Shelter",
        "Event_description" => "Event description"

    ),
    array(
        "Event_Name" => "Volunteer Opportunity 2",
        "Organization_Name" => "Animal Shelter",
        "Event_description" => "Event description"
    ),
    array(
        "Event_Name" => "Volunteer Opportunity 3",
        "Organization_Name" => "Animal Shelter",
        "Event_description" => "Event description"
    )
);

echo json_encode($arr);
?>