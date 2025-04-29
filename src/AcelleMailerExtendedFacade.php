<?php

namespace Muhammad.dev.pro\AcelleMailerExtended;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Muhammad.dev.pro\AcelleMailerExtended\Skeleton\SkeletonClass
 */
class AcelleMailerExtendedFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'acelle-mailer-extended';
    }
}
