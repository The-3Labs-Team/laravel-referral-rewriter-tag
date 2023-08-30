<?php

namespace The3LabsTeam\ReferralRewriterTag;

class ReferralRewriterTag
{
    /**
     *  Start function
     */
    public function rewrite(string $link, ?string $tag, ?string $subtag, string $additionalQuery = null): string
    {
        return match ($this->retrieveTheDomainType($link)) {
            'amazon' => $this->rewriteAmazonLink($link, $tag, $subtag, $additionalQuery),
            'instant-gaming' => $this->rewriteInstantGamingLink($link, $tag, $subtag, $additionalQuery),
            default => $link,
        };
    }

    /**
     *  Rewrite amazon link with tag and subtag
     */
    public function rewriteAmazonLink(string $link, ?string $tag, ?string $subtag, ?string $additionalQuery): string
    {
        return $this->rewriteLink($tag, $link, $subtag, 'tag', 'ascsubtag', $additionalQuery);
    }

    /**
     *  Rewrite instant gaming link with tag and subtag
     */
    public function rewriteInstantGamingLink(string $link, ?string $tag, ?string $subtag, ?string $additionalQuery): string
    {
        return $this->rewriteLink($tag, $link, $subtag, 'igr', 'igr_extra', $additionalQuery);
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
    public function rewriteLink(?string $tag, string $link, ?string $subtag, string $tagRegexName, string $subTagRegexName, ?string $additionalQuery): string|array|null
    {

        $urlComponents = parse_url($link);
        $queryParams = [];

        //Get URL query params
        if (isset($urlComponents['query'])) {
            parse_str($urlComponents['query'], $queryParams);
        }

        if ($tag) {
            $queryParams[$tagRegexName] = $tag;
        }

        if ($subtag) {
            $queryParams[$subTagRegexName] = $subtag;
        }

        //        if($linkCode != null){
        //            $queryParams['linkCode'] = $linkCode;
        //        }

        //Rewrite Params
        $newQueryParams = http_build_query($queryParams);
        $additionalQuery = $additionalQuery ? '&'.$additionalQuery : '';

        //Make URL
        return $urlComponents['scheme'].'://'.$urlComponents['host'].$urlComponents['path'].'?'.$newQueryParams.$additionalQuery;
    }
}
