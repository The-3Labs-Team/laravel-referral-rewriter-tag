<?php

namespace The3LabsTeam\ReferralRewriterTag;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use The3LabsTeam\ReferralRewriterTag\Commands\ReferralRewriterTagCommand;

class ReferralRewriterTagServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-referral-rewriter-tag')
            ->hasConfigFile();
        //            ->hasViews()
        //            ->hasMigration('create_laravel-referral-rewriter-tag_table')
        //            ->hasCommand(ReferralRewriterTagCommand::class);
    }
}
