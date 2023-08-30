<?php

use The3LabsTeam\ReferralRewriterTag\Facades\ReferralRewriterTag;

it('can write ebay link with tag', function () {
    $link = 'https://www.ebay.it/itm/172031349215';
    $tag = 'mytag-20';

    $rewrittenLink = ReferralRewriterTag::rewrite($link, $tag, null);
    expect($rewrittenLink)->toBe('https://www.ebay.it/itm/172031349215?campid=mytag-20');
});

it('can write ebay link with tag and subtag', function () {
    $link = 'https://www.ebay.it/itm/172031349215';
    $tag = 'mytag-20';
    $subtag = 'customsub';

    $rewrittenLink = ReferralRewriterTag::rewrite($link, $tag, $subtag);
    expect($rewrittenLink)->toBe('https://www.ebay.it/itm/172031349215?campid=mytag-20&customid=customsub');
});

it('can write ebay link with tag, subtag and additional query', function () {
    $link = 'https://www.ebay.it/itm/172031349215';
    $tag = 'mytag-20';
    $subtag = 'customsub';
    $additionalQuery = '&addquery=myogi';

    $rewrittenLink = ReferralRewriterTag::rewrite($link, $tag, $subtag, $additionalQuery);
    expect($rewrittenLink)->toBe('https://www.ebay.it/itm/172031349215?campid=mytag-20&customid=customsub&addquery=myogi');
});

it('can rewrite ebay link with tag', function () {
    $link = 'https://www.ebay.it/itm/172031349215?campid=5337692837&customid=11994';
    $tag = 'mytag-20';

    $rewrittenLink = ReferralRewriterTag::rewrite($link, $tag, null);
    expect($rewrittenLink)->toBe('https://www.ebay.it/itm/172031349215?campid=mytag-20&customid=11994');
});

it('can rewrite ebay link with subtag', function () {
    $link = 'https://www.ebay.it/itm/172031349215?campid=5337692837&customid=11994';
    $subtag = 'customsub';

    $rewrittenLink = ReferralRewriterTag::rewrite($link, null, $subtag);
    expect($rewrittenLink)->toBe('https://www.ebay.it/itm/172031349215?campid=5337692837&customid=customsub');
});

it('can rewrite ebay link with tag and subtag', function () {
    $link = 'https://www.ebay.it/itm/172031349215?campid=5337692837&customid=11994';
    $tag = 'mytag-20';
    $subtag = 'customsub';

    $rewrittenLink = ReferralRewriterTag::rewrite($link, $tag, $subtag);
    expect($rewrittenLink)->toBe('https://www.ebay.it/itm/172031349215?campid=mytag-20&customid=customsub');
});

it('can rewrite full ebay link with tag ans subtag', function () {
    $link = 'https://www.ebay.it/itm/172031349215?mkevt=1&mkcid=1&mkrid=724-53478-19255-0&campid=5337692837&customid=11994&toolid=10050';
    $tag = 'mytag-20';
    $subtag = 'customsub';

    $rewrittenLink = ReferralRewriterTag::rewrite($link, $tag, $subtag);
    expect($rewrittenLink)->toBe('https://www.ebay.it/itm/172031349215?mkevt=1&mkcid=1&mkrid=724-53478-19255-0&campid=mytag-20&customid=customsub&toolid=10050');
});

it('can rewrite ebay link without tag and subtag', function () {
    $link = 'https://www.ebay.it/itm/172031349215?campid=5337692837&customid=11994';

    $rewrittenLink = ReferralRewriterTag::rewrite($link, null, null);
    expect($rewrittenLink)->toBe('https://www.ebay.it/itm/172031349215?campid=5337692837&customid=11994');
});
