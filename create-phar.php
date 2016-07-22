<?php
$phar = new Phar('php-code-coverage.phar');
$phar->startBuffering();
$phar->buildFromDirectory(__DIR__.'/vendor');
$phar->setStub(
	<<<STUB
<?php
Phar::mapPhar('php-code-coverage.phar');
require_once 'phar://php-code-coverage.phar/autoload.php';
__HALT_COMPILER();
STUB
);
$phar->stopBuffering();