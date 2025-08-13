<?php

namespace HBM\AdaptiveCardsBundle\Schema\Other;

use HBM\AdaptiveCardsBundle\Schema\AbstractItem;
use HBM\AdaptiveCardsBundle\Schema\Property\Theme;

class ThemedUrl extends AbstractItem
{
    public ?Theme $theme = Theme::LIGHT;
    public ?string $url = null;

    protected function toArray(): array
    {
        $data = [];
        $data['theme'] = $this->theme?->value;
        $data['url'] = $this->url;

        return $this->normalize($data);
    }
}
