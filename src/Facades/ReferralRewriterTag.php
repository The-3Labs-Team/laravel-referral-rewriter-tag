<?php

namespace The3LabsTeam\ReferralRewriterTag\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \The3LabsTeam\ReferralRewriterTag\ReferralRewriterTag
 */
class ReferralRewriterTag extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \The3LabsTeam\ReferralRewriterTag\ReferralRewriterTag::class;
    }
}
