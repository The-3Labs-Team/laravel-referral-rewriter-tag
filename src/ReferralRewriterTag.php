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
            //            'instant-gaming' => $this->rewriteInstantGamingLink($link, $tag, $subtag),
            default => $link,
        };
    }

    /**
     *  Rewrite amazon link with tag and subtag
     */
    public function rewriteAmazonLink(string $link, ?string $tag, ?string $subtag): string
    {
        if($tag){
            $link = preg_replace('/tag=[^&]*/', 'tag='.$tag, $link);
        }

        //Check if the link already contains a subtag
        if($subtag) {
            if (str_contains($link, 'ascsubtag=')) {
                $link = preg_replace('/ascsubtag=[^&]*/', 'ascsubtag=' . $subtag, $link);
            } else {
                $link = $link . '&ascsubtag=' . $subtag;
            }
        }

        return $link;
    }

    /**
     *  Rewrite instant gaming link with tag and subtag
     */
    //    public function rewriteInstantGamingLink(string $link, ?string $tag, ?string $subtag) : string
    //    {
    //        $link = preg_replace('/igr=[^&]*/', 'igr=' . $tag, $link);
    //        $link = preg_replace('/igr_extra=[^&]*/', 'igr_extra=' . $subtag, $link);
    //        return $link;
    //    }

    /**
     *  Retrieve the domain type
     */
    public function retrieveTheDomainType(string $link): string
    {
        $domain = parse_url($link, PHP_URL_HOST);
        $domain = str_replace('www.', '', $domain);

        return explode('.', $domain)[0];
    }
}
