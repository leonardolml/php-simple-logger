<?php

class Logger
{
	public function debug($message)
	{
		return $this->log($message, "DEBUG");
	}
    
	public function info($message)
	{
		return $this->log($message, "INFO");
	}

	public function error($message)
	{
		return $this->log($message, "ERROR");
	}

	protected function log($message, $level = "INFO")
	{
		try {
			
			$file = __DIR__ . "\..\app.log";
			$datetime = date( "Y-m-d H:i:s" );
			$message = sprintf( "[%s] [%s]: %s%s", $datetime, $level, $message, PHP_EOL );
			file_put_contents( $file, $message, FILE_APPEND ) === false ? false : true;
			
		} catch (\Exception $exception) {
			exit($exception->getMessage());
		}
	}
}
