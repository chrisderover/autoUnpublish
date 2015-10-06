<?php
// only run this code for the template with the ID of 8
if ($resource->get('template') != 8) {
    return;
}
// get the Event Start and End date
$event_start_date = $resource->getTVValue('eventBeginDate');
$event_end_date = $resource->getTVValue('eventEndDate');

if (!$event_end_date) {
    $event_date = $event_start_date;
} else {
    $event_date = $event_end_date;
}

// number of days after event date to set unpublish date
$unpublish_days = 1;
 
// calculate unpublish date
$event_date = strtotime($event_date);
$offset = 86400 * $unpublish_days;
$new_unpublish_date = $event_date + $offset;

// save new unpublish date into field
$resource->set('unpub_date', $new_unpublish_date);
