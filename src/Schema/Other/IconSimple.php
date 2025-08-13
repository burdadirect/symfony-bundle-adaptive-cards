<?php

namespace HBM\AdaptiveCardsBundle\Schema\Other;

use HBM\AdaptiveCardsBundle\Schema\Property\IconName;
use HBM\AdaptiveCardsBundle\Schema\Property\Style\StyleIcon;

class IconSimple
{
    public ?IconName $name = null;
    public ?StyleIcon $style = StyleIcon::REGULAR;

    public function __construct(
      ?IconName $name = null,
      ?StyleIcon $style = null
    ) {
        $this->name = $name;
        $this->style = $style;
    }

    public function toString(): ?string
    {
        if ($this->name && $this->style) {
            return $this->name->value.','.$this->style->value;
        }

        return $this->name?->value ?? null;
    }
}
