<?php

namespace HBM\AdaptiveCardsBundle\Schema\Other;

use HBM\AdaptiveCardsBundle\Schema\AbstractItem;
use HBM\AdaptiveCardsBundle\Schema\Property\FillMode;
use HBM\AdaptiveCardsBundle\Schema\Property\Layout\Alignment\Horizontal;
use HBM\AdaptiveCardsBundle\Schema\Property\Layout\Alignment\Vertical;

class BackgroundImage extends AbstractItem
{
    public ?FillMode $fill = FillMode::COVER;
    public ?Horizontal $horizontal = Horizontal::LEFT;
    public ?Vertical $vertical = Vertical::TOP;

    public ?string $url = null;

    /** @var ThemedUrl[] */
    public array $themedIconUrls = [];

    protected function toArray(): array
    {
        $data = [];
        $data['fill'] = $this->fill->value;
        $data['horizontalAlignment'] = $this->horizontal->value;
        $data['verticalAlignment'] = $this->vertical->value;
        $data['url'] = $this->url;
        $data['themedUrls'] = $this->addCollection($this->themedIconUrls);

        return $this->normalize($data);
    }
}
