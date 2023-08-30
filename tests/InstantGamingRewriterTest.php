<?php

use The3LabsTeam\ReferralRewriterTag\Facades\ReferralRewriterTag;

it('can write instant gaming link with tag', function () {
    $link = 'https://www.instant-gaming.com/it/1234-comprare-ket-steam-xxx/';
    $tag = 'mytag-20';

    $rewrittenLink = ReferralRewriterTag::rewrite($link, $tag, null);
    expect($rewrittenLink)->toBe('https://www.instant-gaming.com/it/1234-comprare-ket-steam-xxx/?igr=mytag-20');
});

it('can write instant gaming link with tag and subtag', function () {
    $link = 'https://www.instant-gaming.com/it/1234-comprare-ket-steam-xxx/';
    $tag = 'mytag-20';
    $subtag = 'customsub';

    $rewrittenLink = ReferralRewriterTag::rewrite($link, $tag, $subtag);
    expect($rewrittenLink)->toBe('https://www.instant-gaming.com/it/1234-comprare-ket-steam-xxx/?igr=mytag-20&igr_extra=customsub');
});

it('can write instant gaming link with tag, subtag and additional query', function () {
    $link = 'https://www.instant-gaming.com/it/1234-comprare-ket-steam-xxx/';
    $tag = 'mytag-20';
    $subtag = 'customsub';
    $additionalQuery = '&addquery=myogi';

    $rewrittenLink = ReferralRewriterTag::rewrite($link, $tag, $subtag, $additionalQuery);
    expect($rewrittenLink)->toBe('https://www.instant-gaming.com/it/1234-comprare-ket-steam-xxx/?igr=mytag-20&igr_extra=customsub&addquery=myogi');
});

it('can rewrite instant gaming link with tag', function () {
    $link = 'https://www.instant-gaming.com/it/1234-comprare-ket-steam-xxx/?igr=1234&linkCode=ogi';
    $tag = 'mytag-20';

    $rewrittenLink = ReferralRewriterTag::rewrite($link, $tag, null);
    expect($rewrittenLink)->toBe('https://www.instant-gaming.com/it/1234-comprare-ket-steam-xxx/?igr=mytag-20&linkCode=ogi');
});

it('can rewrite instant gaming link with subtag', function () {
    $link = 'https://www.instant-gaming.com/it/1234-comprare-ket-steam-xxx/?igr=1234&linkCode=ogi';
    $subtag = 'customsub';

    $rewrittenLink = ReferralRewriterTag::rewrite($link, null, $subtag);
    expect($rewrittenLink)->toBe('https://www.instant-gaming.com/it/1234-comprare-ket-steam-xxx/?igr=1234&linkCode=ogi&igr_extra=customsub');
});

it('can rewrite instant gaming link with tag and subtag', function () {
    $link = 'https://www.instant-gaming.com/it/1234-comprare-ket-steam-xxx/?igr=1234&linkCode=ogi';
    $tag = 'mytag-20';
    $subtag = 'customsub';

    $rewrittenLink = ReferralRewriterTag::rewrite($link, $tag, $subtag);
    expect($rewrittenLink)->toBe('https://www.instant-gaming.com/it/1234-comprare-ket-steam-xxx/?igr=mytag-20&linkCode=ogi&igr_extra=customsub');
});

it('can rewrite full instant gaming link with tag ans subtag', function () {
    $link = 'https://www.instant-gaming.com/it/1234-comprare-ket-steam-xxx/?igr=1234&igr_extra=sub&linkCode=ogi';
    $tag = 'mytag-20';
    $subtag = 'customsub';

    $rewrittenLink = ReferralRewriterTag::rewrite($link, $tag, $subtag);
    expect($rewrittenLink)->toBe('https://www.instant-gaming.com/it/1234-comprare-ket-steam-xxx/?igr=mytag-20&igr_extra=customsub&linkCode=ogi');
});

it('can rewrite instant gaming link without tag and subtag', function () {
    $link = 'https://www.instant-gaming.com/it/1234-comprare-ket-steam-xxx/?igr=1234&linkCode=ogi';

    $rewrittenLink = ReferralRewriterTag::rewrite($link, null, null);
    expect($rewrittenLink)->toBe('https://www.instant-gaming.com/it/1234-comprare-ket-steam-xxx/?igr=1234&linkCode=ogi');
});
