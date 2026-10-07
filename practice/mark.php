<?php

$me = 'そら';

$messages = [
    ['name' => 'はな', 'body' => 'こんばんは'],
    ['name' => 'そら', 'body' => 'こんばんは。いま練習しています'],
    ['name' => 'はな', 'body' => 'わたしもです'],
];

foreach ($messages as $message) {
    if ($message['name'] === $me) {
        echo '自分: ' . $message['body'] . "\n";
    } else {
        echo $message['name'] . 'さん: ' . $message['body'] . "\n";
    }
}