<?php

$messages = [
	['name' => 'はな', 'body' => 'こんばんは'],
	['name' => 'そら', 'body' => 'こんばんは。今練習してます'],
	['name' => 'はな', 'body' => 'わたしもです'],
];

foreach ($messages as $message) {
	echo $message['name'] . ': ' . $message['body'] . "\n";
}