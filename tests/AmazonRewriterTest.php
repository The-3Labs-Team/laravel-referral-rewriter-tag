<?php

use The3LabsTeam\ReferralRewriterTag\Facades\ReferralRewriterTag;

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

it('can rewrite amazon link without tag and subtag', function () {
    $link = 'https://www.amazon.it/dp/B08PC3PGZM?tag=tomshar-21&linkCode=ogi';

    $rewrittenLink = ReferralRewriterTag::rewrite($link, null, null);
    expect($rewrittenLink)->toBe('https://www.amazon.it/dp/B08PC3PGZM?tag=tomshar-21&linkCode=ogi');
});
