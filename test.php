<?php
header('Content-Type: application/json; charset=utf-8');
$video_id = "_1bHK6uii7o";
function GetVideoInfo($video_id){
    $content = file_get_contents("https://www.youtube.com/watch?v=$video_id");
    $explode1 = explode('ytInitialPlayerResponse = ', $content);
    $explode2 = explode(';</script>', $explode1[1]);
    return $explode2[0];
}
echo GetVideoInfo($video_id);
?>