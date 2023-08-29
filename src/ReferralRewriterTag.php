<?php

namespace The3LabsTeam\ReferralRewriterTag;

class ReferralRewriterTag
{
    /**
     *  Start function
     */
    public function rewrite(string $link, ?string $tag, ?string $subtag): string
    {
        return match ($this->retrieveTheDomainType($link)) {
            'amazon' => $this->rewriteAmazonLink($link, $tag, $subtag),
            'instant-gaming' => $this->rewriteInstantGamingLink($link, $tag, $subtag),
            default => $link,
        };
    }

    /**
     *  Rewrite amazon link with tag and subtag
     */
    public function rewriteAmazonLink(string $link, ?string $tag, ?string $subtag): string
    {
        return $this->rewriteLink($tag, $link, $subtag, 'tag', 'ascsubtag');
    }

    /**
     *  Rewrite instant gaming link with tag and subtag
     */
        public function rewriteInstantGamingLink(string $link, ?string $tag, ?string $subtag) : string
        {
            return $this->rewriteLink($tag, $link, $subtag, 'igr', 'igr_extra');
        }

    /**
     *  Retrieve the domain type
     */
    public function retrieveTheDomainType(string $link): string
    {
        $domain = parse_url($link, PHP_URL_HOST);
        $domain = str_replace('www.', '', $domain);

        return explode('.', $domain)[0];
    }

    /**
     *  Rewrite link with new tag and/or subtag
     */
    public function rewriteLink(?string $tag, string $link, ?string $subtag, string $tagRegexName, string $subTagRegexName): string|array|null
    {
        if ($tag) {
            $link = preg_replace('/' . $tagRegexName . '=[^&]*/', $tagRegexName . '=' . $tag, $link);
        }

        //Check if the link already contains a subtag
        if ($subtag) {
            if (str_contains($link, $subTagRegexName . '=')) {
                $link = preg_replace('/' . $subTagRegexName . '=[^&]*/', $subTagRegexName. '=' . $subtag, $link);
            } else {
                $link = $link . '&'. $subTagRegexName .'=' . $subtag;
            }
        }

        return $link;
    }
}
