<?php
// return a font awesome icon
function i($code)
{
    $icon = '<i class="fa fa-' . $code . '  " ></i>';
    return $icon;
}

//formats the date to look nice
function date_nice($date)
{
    return date('M j Y h:i A', $date);
}

function time_nice($seconds)
{
    $h  = floor($seconds / 60) / 60;
    $m = round(($seconds / 60) - ($h * 60));
    return $h . 'hrs: ' . $m . 'mins';
}

function save($data)
{
    $json = json_encode($data);
    $file = fopen('data.json', 'w');
    fwrite($file, $json);
}
