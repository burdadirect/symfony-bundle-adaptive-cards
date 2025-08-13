<?php

namespace HBM\AdaptiveCardsBundle\Schema\Element;

use HBM\AdaptiveCardsBundle\Schema\Other\IconSimple;
use HBM\AdaptiveCardsBundle\Schema\Property\IconPosition;
use HBM\AdaptiveCardsBundle\Schema\Property\Layout\Alignment\Horizontal;
use HBM\AdaptiveCardsBundle\Schema\Property\Layout\HeightBadge;
use HBM\AdaptiveCardsBundle\Schema\Property\Layout\Spacing;
use HBM\AdaptiveCardsBundle\Schema\Property\Style\AppearanceBadge;
use HBM\AdaptiveCardsBundle\Schema\Property\Style\ShapeBadge;
use HBM\AdaptiveCardsBundle\Schema\Property\Style\SizeBadge;
use HBM\AdaptiveCardsBundle\Schema\Property\Style\StyleBadge;
use HBM\AdaptiveCardsBundle\Schema\Property\TypeElement;

class Badge extends AbstractElement
{
    protected TypeElement $type = TypeElement::BADGE;

    public ?string $text = null;
    public ?string $tooltip = null;

    public ?IconSimple $icon = null;
    public ?IconPosition $iconPosition = IconPosition::BEFORE;

    // Layout
    public ?Spacing $spacing = Spacing::DEFAULT;
    public bool $separator = false;
    public ?Horizontal $horizontal = null;
    public ?HeightBadge $height = HeightBadge::AUTOMATIC;

    // Style
    public ?SizeBadge $size = SizeBadge::MEDIUM;
    public ?StyleBadge $style = StyleBadge::DEFAULT;
    public ?ShapeBadge $shape = ShapeBadge::CIRCULAR;
    public ?AppearanceBadge $appearance = AppearanceBadge::FILLED;

    public function toArray(): array
    {
        $data = parent::toArray();

        $data['text'] = $this->text;
        $data['tooltip'] = $this->tooltip;

        $data['icon'] = $this->icon?->toString();
        $data['iconPosition'] = $this->iconPosition?->value;

        $data['spacing'] = $this->spacing?->value;
        $data['separator'] = $this->separator;
        $data['horizontalAlignment'] = $this->horizontal?->value;
        $data['height'] = $this->height?->value;

        $data['size'] = $this->size?->value;
        $data['style'] = $this->style?->value;
        $data['shape'] = $this->shape?->value;
        $data['appearance'] = $this->appearance?->value;

        return $this->normalize($data);
    }
}
