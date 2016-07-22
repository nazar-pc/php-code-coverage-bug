<?php
require_once __DIR__.'/php-code-coverage.phar';

$filter = new \SebastianBergmann\CodeCoverage\Filter;
$filter->addFileToWhitelist(__DIR__.'/non-existent-file');

$coverage = new \SebastianBergmann\CodeCoverage\CodeCoverage(null, $filter);
$coverage->start('XYZ');

$coverage->stop();
print_r($coverage->getData(true));