<?php
/**
 * @package   s9e\mediaembed
 * @copyright Copyright (c) 2015-2018 The s9e Authors
 * @license   http://www.opensource.org/licenses/mit-license.php The MIT License
 */

namespace s9e\Flarum\MediaEmbed;

use Flarum\Extend;
use s9e\TextFormatter\Configurator;
use s9e\TextFormatter\Configurator\Bundles\MediaPack;

return [
    (new Extend\Formatter())->configure(function (Configurator $configurator){
        (new MediaPack())->configure($configurator);
    }),
];
