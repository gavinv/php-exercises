<?php

function logMessage($logLevel, $message)
{
	$date = date('Y-m-d');
	$time = date('Y-m-d H:i:s');
	$fileName = 'log-' . $date . '.log';
	$handle = fopen($fileName, 'a');
	fwrite($handle, $time . " [$logLevel] $message" . PHP_EOL);
	fclose($handle);
}
function logInfo($message) {
	logMessage('INFO', $message);
}
function logError($message) {
	logMessage('ERROR', $message);
}
logInfo('This is an info message!');
logError('This is an error message!');
