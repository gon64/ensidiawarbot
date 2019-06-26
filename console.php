#!/usr/bin/env php
<?php
require_once __DIR__ . '/vendor/autoload.php';
use Symfony\Component\Console\Application;
$app = new Application();
use Console\EnsidiaCommand;
/**
* Author: Gon <gonzaloventura@outlook.com>
*/
$app = new Application('Console App', 'v1.0.0');
$app -> add(new EnsidiaCommand());
$app -> run();