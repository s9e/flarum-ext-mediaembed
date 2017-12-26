<?php

/**
* @package   s9e\mediaembed
* @copyright Copyright (c) 2015-2016 The s9e Authors
* @license   http://www.opensource.org/licenses/mit-license.php The MIT License
*/
namespace s9e\Flarum\MediaEmbed;

use Flarum\Formatter\Event\Configuring;
use Illuminate\Events\Dispatcher;
use s9e\TextFormatter\Configurator\Bundles\MediaPack;

function subscribe(Dispatcher $events)
{
	$events->listen(
		Configuring::class,
		function (Configuring $event)
		{
			(new MediaPack)->configure($event->configurator);
		}
	);
};

return __NAMESPACE__ . '\\subscribe';
