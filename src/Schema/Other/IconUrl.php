<?php

namespace HBM\AdaptiveCardsBundle\Schema\Other;

use HBM\AdaptiveCardsBundle\Schema\Property\IconName;

class IconUrl
{
    public ?string $url = null;
    public ?IconSimple $icon = null;

    public function __construct(IconName|IconSimple|string $iconOrUrl = null)
    {
        if ($iconOrUrl instanceof IconName) {
            $this->icon = new IconSimple($iconOrUrl);
        } elseif ($iconOrUrl instanceof IconSimple) {
            $this->icon = $iconOrUrl;
        } elseif (is_string($iconOrUrl)) {
            $this->url = $iconOrUrl;
        }
    }

    public function toString(): ?string
    {
        return $this->icon ? 'icon:'.$this->icon->toString() : $this->url;
    }
}
