<?php

namespace Maslosoft\Guides\Signals\Models;

use Maslosoft\Addendum\Interfaces\AnnotatedInterface;
use Maslosoft\Guides\Signals\Signals\Collect;

class Door implements AnnotatedInterface
{

	/**
	 * @SlotFor(Collect)
	 */
	public function reactOn(Collect $signal)
	{
		$signal->name = 'Doors model';
		$signal->model = $this;
	}

}
