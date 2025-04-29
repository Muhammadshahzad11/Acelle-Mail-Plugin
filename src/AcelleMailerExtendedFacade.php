<?php

namespace MuhammadAcelleMailerExtended;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MuhammadAcelleMailerExtended\Skeleton\SkeletonClass
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
