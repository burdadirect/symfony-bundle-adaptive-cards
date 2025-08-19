<?php

namespace HBM\AdaptiveCardsBundle\Schema\Element;

use HBM\AdaptiveCardsBundle\Schema\AbstractItem;
use HBM\AdaptiveCardsBundle\Schema\Property\Layout\Responsive\Target;
use HBM\AdaptiveCardsBundle\Schema\Property\Layout\Responsive\TargetMatch;
use HBM\AdaptiveCardsBundle\Schema\Property\Layout\Responsive\TargetWidth;
use HBM\AdaptiveCardsBundle\Schema\Property\TypeElement;

abstract class AbstractElement extends AbstractItem
{
    protected TypeElement $type;

    public ?AbstractElement $fallback = null;
    public ?Target $target = null;

    public ?string $id = null;
    public ?string $lang = null;
    public ?string $gridArea = null;

    // Layout
    public bool $isVisible = true;
    public bool $isSortKey = false;

    /**************************************************************************/

    public function setTarget(?Target $target): self
    {
        $this->target = $target;

        return $this;
    }

    public function setTargetValues(
      ?TargetMatch $targetMatch,
      ?TargetWidth $targetWidth
    ): self {
        $this->target = new Target($targetMatch, $targetWidth);

        return $this;
    }

    /**************************************************************************/

    public function toArray(): array
    {
        $data = [];
        $data['type'] = $this->type->value;
        $data['targetWidth'] = $this->target?->toString();
        $data['fallback'] = $this->fallback?->toArray();

        $data['id'] = $this->id;
        $data['lang'] = $this->lang;
        $data['gridArea'] = $this->gridArea;

        if ($this->isVisible !== true) {
            $data['isVisible'] = $this->isVisible;
        }
        if ($this->isSortKey !== false) {
            $data['isSortKey'] = $this->isSortKey;
        }

        return $this->normalize($data);
    }

    /**************************************************************************/

    public function getFallback(): ?AbstractElement
    {
        return $this->fallback;
    }

    public function setFallback(?AbstractElement $fallback): AbstractElement
    {
        $this->fallback = $fallback;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): AbstractElement
    {
        $this->id = $id;

        return $this;
    }

    public function getLang(): ?string
    {
        return $this->lang;
    }

    public function setLang(?string $lang): AbstractElement
    {
        $this->lang = $lang;

        return $this;
    }

    public function getGridArea(): ?string
    {
        return $this->gridArea;
    }

    public function setGridArea(?string $gridArea): AbstractElement
    {
        $this->gridArea = $gridArea;

        return $this;
    }

    public function isVisible(): bool
    {
        return $this->isVisible;
    }

    public function setIsVisible(bool $isVisible): AbstractElement
    {
        $this->isVisible = $isVisible;

        return $this;
    }

    public function isSortKey(): bool
    {
        return $this->isSortKey;
    }

    public function setIsSortKey(bool $isSortKey): AbstractElement
    {
        $this->isSortKey = $isSortKey;

        return $this;
    }

}
