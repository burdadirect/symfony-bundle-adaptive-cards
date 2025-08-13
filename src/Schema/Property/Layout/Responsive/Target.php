<?php

namespace HBM\AdaptiveCardsBundle\Schema\Property\Layout\Responsive;

class Target
{
    public ?TargetMatch $targetMatch = null;
    public ?TargetWidth $targetWidth = null;

    public function __construct(
      ?TargetMatch $targetMatch,
      ?TargetWidth $targetWidth
    ) {
        $this->targetMatch = $targetMatch;
        $this->targetWidth = $targetWidth;
    }

    public function toString(): ?string
    {
        if ($this->targetMatch === null) {
            return null;
        }
        if ($this->targetMatch === TargetMatch::EXACTLY) {
            return $this->targetWidth->value;
        }

        return $this->targetMatch->value.':'.$this->targetWidth->value;
    }
}
