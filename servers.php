<?php

$url = 'https://revelcw.com/serversdat/download';

$server = $_GET["server"];
$ip = $_GET["ip"];

$data = ['servers' => '[]'];
if (isset($server) && isset($ip)) {
    $data = ['servers' => '[{"id":1,"ipAddress":"' . $ip . '","name":"' . $server . '"}]'];
}

// Get the binary data from the server
$options = [
    'http' => [
        'header' => "Content-type: application/x-www-form-urlencoded\r\n",
        'method' => 'POST',
        'content' => http_build_query($data)
    ]
];

$context = stream_context_create($options);
$result = file_get_contents($url, false, $context);

header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: Binary");
header("Content-disposition: attachment; filename=\"servers.dat\"");

echo $result;
