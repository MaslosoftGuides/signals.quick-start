<?php

use Maslosoft\Guides\Signals\Signals\Collect;
use Maslosoft\Signals\Signal;

require 'vendor/autoload.php';


// More information available here:
// https://maslosoft.com/signals/docs/
// 
$results = (new Signal)->emit(new Collect);

var_dump($results);
