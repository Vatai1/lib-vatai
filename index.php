<?php
require __DIR__ . '/vendor/autoload.php';
use Lib\Php\Runner;

require __DIR__ . '/vendor/autoload.php';

// Файл не включается на прямую
// Он загрузится автоматически благодаря автозагрузке

print_r(Runner\run());
