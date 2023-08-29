<?php

namespace The3LabsTeam\ReferralRewriterTag\Commands;

use Illuminate\Console\Command;

class ReferralRewriterTagCommand extends Command
{
    public $signature = 'laravel-referral-rewriter-tag';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
