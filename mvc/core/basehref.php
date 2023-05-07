<?php
function getUrl()
{
    $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
    echo "<h1>$home_url</h1>";
    return $home_url;
}
