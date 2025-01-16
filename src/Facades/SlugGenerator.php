<?php
namespace Monirujjaman27\UniqueSlugGenerator\Facades;
use Illuminate\Support\Facades\Facade;

/**
 * Get the registered name of the component.
 * @see \Monirujjaman27\UniqueSlugGenerator\SlugGenerator
 *
 */

class SlugGenerator extends Facade
{
    /**
     * Get the registered name of the component.
     * @return string
     *
     */
    protected static function getFacadeAccessor(): string
    {
        return 'slug-generator';
    }
}
