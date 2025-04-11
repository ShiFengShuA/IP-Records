<?php

function get_ip_city_New($ip)
{
    $ch = curl_init();
    $url = 'https://www.inte.net/tool/ip/api.ashx?ip='.$ip.'&datatype=json';

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

    $location = trim(curl_exec($ch));
    curl_close($ch);
    return $location;
}
