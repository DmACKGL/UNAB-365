<?php

namespace DmACKGL\UNAB;

use SocialiteProviders\Manager\SocialiteWasCalled;

class UNABExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param \SocialiteProviders\Manager\SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('unab', Provider::class);
    }
}
