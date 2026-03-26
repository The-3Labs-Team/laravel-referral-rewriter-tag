<?php

use The3LabsTeam\ReferralRewriterTag\ReferralRewriterTag;

it('boots the package and exposes its config', function () {
    expect(app(ReferralRewriterTag::class))
        ->toBeInstanceOf(ReferralRewriterTag::class)
        ->and(config('referral-rewriter-tag.amazon'))
        ->toBeArray()
        ->and(config('referral-rewriter-tag.instantgaming.subtag'))
        ->toBe('');
});
