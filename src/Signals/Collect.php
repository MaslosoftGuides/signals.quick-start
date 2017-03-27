<?php

namespace Maslosoft\Guides\Signals\Signals;

use Maslosoft\Signals\Interfaces\SignalInterface;

class Collect implements SignalInterface
{
    public $name;
    public $model;
}