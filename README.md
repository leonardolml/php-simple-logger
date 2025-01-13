# php-simple-logger
PHP Simple logger class

Usage:
```
$logger = new Logger;
$logger->info('Simple Logger info message.'); // Append to app.log: [2025-01-13 22:23:24] [INFO]: Simple Logger info message.
$logger->error('Simple Logger error message.'); // Append to app.log: [2025-01-13 22:23:24] [ERROR]: Simple Logger error message.
$logger->debug('Simple Logger debug message.'); // Append to app.log: [2025-01-13 22:23:24] [DEBUG]: Simple Logger debug message.
```
