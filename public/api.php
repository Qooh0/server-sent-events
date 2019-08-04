<?php

header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

while (1) {
    echo 'data: Hello from server! ' . date('Y-m-d H:i:s'), "\n\n";
    ob_flush();
    flush();
    sleep(1);
}
