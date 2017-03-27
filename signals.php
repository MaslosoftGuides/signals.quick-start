<?php

use Maslosoft\Guides\Signals\Signals\Collect;
use Maslosoft\Signals\Signal;

require 'vendor/autoload.php';

$results = (new Signal)->emit(new Collect);

var_dump($results);
