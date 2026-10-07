<?php

date_default_timezone_set('Asia/Tokyo');

$hour = date('G');

if ($hour < 12) {
	$greeting = 'おはようございます';
} elseif ($hour < 18) {
	$greeting = 'こんにちは';
} else {
	$greeting = 'こんばんは';
}

$messages = [
	['name' => 'はな', 'body' => '今日も練習してます'],
	['name' => 'そら', 'body' => 'いいですね'],
	];

$count = 0;

echo $greeting . '。いまは' . $hour . '時です' . "\n";

foreach ($messages as $message) {
	echo $message['name'] . ': ' . $message['body'] . "\n";
	$count = $count + 1;
}

echo '全部で' . $count . '件のメッセージがあります' . "\n";