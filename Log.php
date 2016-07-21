<?php
class Log 
{
	public $fileName;
	public function logMessage($logLevel, $message) 
	{
		$date = date('Y-m-d');
		$time = date('Y-m-d H:i:s');
		$this->fileName = 'log-' . $date . '.log';
		$handle = fopen($this->fileName, 'a');
		fwrite($handle, $time . " [$logLevel] $message" . PHP_EOL);
		fclose($handle);
	}
	public function info($message)
	{
		$this->logMessage('INFO', $message);
	}
	public function error($message) 
	{
		$this->logMessage('ERROR', $message);
	}
}