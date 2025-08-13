<?php

namespace HBM\AdaptiveCardsBundle\Schema\Other;

use HBM\AdaptiveCardsBundle\Schema\AbstractItem;

class TargetElement extends AbstractItem
{
    public ?string $elementId = null;
    public ?bool $isVisible = null;

    public function __construct(?string $elementId, ?bool $isVisible)
    {
        $this->elementId = $elementId;
        $this->isVisible = $isVisible;
    }

    protected function toArray(): array
    {
        $data = [];
        $data['elementId'] = $this->elementId;
        $data['isVisible'] = $this->isVisible;

        return $this->normalize($data);
    }
}
