<?php

namespace App\Helpers;

use Spatie\Valuestore\ValueStore;

final class FilamentSettingsHelper
{
    static function get(string $name)
    {
        $valueStore = ValueStore::make(config('filament-settings.path'));

        return $valueStore->get($name);
    }
}
