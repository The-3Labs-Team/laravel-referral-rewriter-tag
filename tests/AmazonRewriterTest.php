<?php

use The3LabsTeam\ReferralRewriterTag\Facades\ReferralRewriterTag;

it('can write amazon link with tag', function () {
    $link = 'https://www.amazon.it/dp/B08PC3PGZM';
    $tag = 'mytag-20';

    $rewrittenLink = ReferralRewriterTag::rewrite($link, $tag, null);
    expect($rewrittenLink)->toBe('https://www.amazon.it/dp/B08PC3PGZM?tag=mytag-20');
});

it('can write amazon link with tag and subtag', function () {
    $link = 'https://www.amazon.it/dp/B08PC3PGZM';
    $tag = 'mytag-20';
    $subtag = 'customsub';

    $rewrittenLink = ReferralRewriterTag::rewrite($link, $tag, $subtag);
    expect($rewrittenLink)->toBe('https://www.amazon.it/dp/B08PC3PGZM?tag=mytag-20&ascsubtag=customsub');
});

it('can write amazon link with tag, subtag and additional query', function () {
    $link = 'https://www.amazon.it/dp/B08PC3PGZM';
    $tag = 'mytag-20';
    $subtag = 'customsub';
    $additionalQuery = '&addquery=myogi';

    $rewrittenLink = ReferralRewriterTag::rewrite($link, $tag, $subtag, $additionalQuery);
    expect($rewrittenLink)->toBe('https://www.amazon.it/dp/B08PC3PGZM?tag=mytag-20&ascsubtag=customsub&addquery=myogi');
});

it('can rewrite amazon link with tag', function () {
    $link = 'https://www.amazon.it/dp/B08PC3PGZM?tag=tomshar-21&linkCode=ogi';
    $tag = 'mytag-20';

    $rewrittenLink = ReferralRewriterTag::rewrite($link, $tag, null);
    expect($rewrittenLink)->toBe('https://www.amazon.it/dp/B08PC3PGZM?tag=mytag-20&linkCode=ogi');
});

it('can rewrite amazon link with subtag', function () {
    $link = 'https://www.amazon.it/dp/B08PC3PGZM?tag=tomshar-21&linkCode=ogi';
    $subtag = 'customsub';

    $rewrittenLink = ReferralRewriterTag::rewrite($link, null, $subtag);
    expect($rewrittenLink)->toBe('https://www.amazon.it/dp/B08PC3PGZM?tag=tomshar-21&linkCode=ogi&ascsubtag=customsub');
});

it('can rewrite amazon link with tag and subtag', function () {
    $link = 'https://www.amazon.it/dp/B08PC3PGZM?tag=tomshar-21&linkCode=ogi';
    $tag = 'mytag-20';
    $subtag = 'customsub';

    $rewrittenLink = ReferralRewriterTag::rewrite($link, $tag, $subtag);
    expect($rewrittenLink)->toBe('https://www.amazon.it/dp/B08PC3PGZM?tag=mytag-20&linkCode=ogi&ascsubtag=customsub');
});

it('can rewrite full amazon link with tag ans subtag', function () {
    $link = 'https://www.amazon.it/dp/B08PC3PGZM?tag=tomshar-21&ascsubtag=sub&linkCode=ogi';
    $tag = 'mytag-20';
    $subtag = 'customsub';

    $rewrittenLink = ReferralRewriterTag::rewrite($link, $tag, $subtag);
    expect($rewrittenLink)->toBe('https://www.amazon.it/dp/B08PC3PGZM?tag=mytag-20&ascsubtag=customsub&linkCode=ogi');
});

it('can rewrite amazon link without tag and subtag', function () {
    $link = 'https://www.amazon.it/dp/B08PC3PGZM?tag=tomshar-21&linkCode=ogi';

    $rewrittenLink = ReferralRewriterTag::rewrite($link, null, null);
    expect($rewrittenLink)->toBe('https://www.amazon.it/dp/B08PC3PGZM?tag=tomshar-21&linkCode=ogi');
});
