<?php namespace Mark07X\BCJS;

use Flarum\Extend;
use Flarum\Extend\Formatter;
use s9e\TextFormatter\Configurator;

return (new Extend\Formatter)
    ->configure(function (Configurator $config) {
        $config->BBCodes->addCustom('[JS]{CODE}[/JS]', '<script>{CODE}</script>');
    })
;
