<?php

namespace HBM\AdaptiveCardsBundle\Schema\Other;

use HBM\AdaptiveCardsBundle\Schema\AbstractItem;

class Fact extends AbstractItem
{
    public ?string $title = null;
    public ?string $value = null;

    public function __construct(?string $title, ?string $value)
    {
        $this->title = $title;
        $this->value = $value;
    }

    protected function toArray(): array
    {
        $data = [];
        $data['title'] = $this->title;
        $data['value'] = $this->value;

        return $this->normalize($data);
    }
}
