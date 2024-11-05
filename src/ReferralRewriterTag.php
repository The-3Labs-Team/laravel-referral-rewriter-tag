<?php

namespace The3LabsTeam\ReferralRewriterTag;

class ReferralRewriterTag
{
    protected string $link = '';

    protected ?string $tag;

    protected ?string $subtag;

    protected ?string $additionalQuery;

    /**
     *  Start function
     */
    public function rewrite(string $link, ?string $tag, ?string $subtag, ?string $additionalQuery = null): string
    {
        $this->link = $link;
        $this->tag = $tag;
        $this->subtag = $subtag;
        $this->additionalQuery = $additionalQuery;

        return match ($this->retrieveTheDomainType()) {
            'amazon' => $this->rewriteAmazonLink(),
            'instant-gaming' => $this->rewriteInstantGamingLink(),
            'ebay' => $this->rewriteEbayLink(),
            default => $this->link,
        };
    }

    /**
     *  Rewrite amazon link with tag and subtag
     */
    public function rewriteAmazonLink(): string
    {
        if (! $this->tag) {
            $this->tag = config('referral-rewriter-tag.amazon.tag');
        }

        if (! $this->subtag) {
            $this->subtag = config('referral-rewriter-tag.amazon.subtag');
        }

        return $this->rewriteLink(tagKey: 'tag', subTagKey: 'ascsubtag');
    }

    /**
     *  Rewrite instant gaming link with tag and subtag
     */
    public function rewriteInstantGamingLink(): string
    {
        if (! $this->tag) {
            $this->tag = config('referral-rewriter-tag.instantgaming.tag');
        }

        if (! $this->subtag) {
            $this->subtag = config('referral-rewriter-tag.instantgaming.subtag');
        }

        return $this->rewriteLink(tagKey: 'igr', subTagKey: 'igr_extra');
    }

    /**
     *  Rewrite ebay link with tag and subtag
     */
    public function rewriteEbayLink(): string
    {
        if (! $this->tag) {
            $this->tag = config('referral-rewriter-tag.ebay.tag');
        }

        if (! $this->subtag) {
            $this->subtag = config('referral-rewriter-tag.ebay.subtag');
        }

        return $this->rewriteLink(tagKey: 'campid', subTagKey: 'customid');
    }

    /**
     *  Retrieve the domain type
     */
    public function retrieveTheDomainType(): string
    {
        $domain = parse_url($this->link, PHP_URL_HOST);
        $domain = str_replace('www.', '', $domain);

        return explode('.', $domain)[0];
    }

    /**
     *  Rewrite link with new tag and/or subtag
     */
    public function rewriteLink(string $tagKey, string $subTagKey): string|array|null
    {

        $urlComponents = parse_url($this->link);
        $queryParams = [];

        if (isset($urlComponents['query'])) {
            parse_str($urlComponents['query'], $queryParams);
        }

        if ($this->tag) {
            $queryParams[$tagKey] = $this->tag;
        }

        if ($this->subtag) {
            $queryParams[$subTagKey] = $this->subtag;
        }

        $newQueryParams = http_build_query($queryParams);

        return $urlComponents['scheme'].'://'.$urlComponents['host'].$urlComponents['path'].'?'.$newQueryParams.$this->additionalQuery;
    }
}
