<?php

namespace HBM\AdaptiveCardsBundle\Schema\Element;

use HBM\AdaptiveCardsBundle\Schema\Action\AbstractAction;
use HBM\AdaptiveCardsBundle\Schema\Property\IconName;
use HBM\AdaptiveCardsBundle\Schema\Property\Layout\Alignment\Horizontal;
use HBM\AdaptiveCardsBundle\Schema\Property\Layout\Spacing;
use HBM\AdaptiveCardsBundle\Schema\Property\Style\ColorIcon;
use HBM\AdaptiveCardsBundle\Schema\Property\Style\SizeIcon;
use HBM\AdaptiveCardsBundle\Schema\Property\Style\StyleIcon;
use HBM\AdaptiveCardsBundle\Schema\Property\TypeElement;

class Icon extends AbstractElement
{
    protected TypeElement $type = TypeElement::ICON;

    public ?IconName $iconName = null;

    // Layout
    public ?Spacing $spacing = Spacing::DEFAULT;
    public bool $separator = false;
    public ?Horizontal $horizontal = null;

    // Style
    public ?ColorIcon $color = ColorIcon::DEFAULT;
    public ?SizeIcon $size = SizeIcon::STANDARD;
    public ?StyleIcon $style = StyleIcon::REGULAR;

    // Select action
    public ?AbstractAction $selectAction = null;

    public function toArray(): array
    {
        $data = parent::toArray();

        $data['icon'] = $this->iconName?->value;

        $data['spacing'] = $this->spacing?->value;
        $data['separator'] = $this->separator;
        $data['horizontalAlignment'] = $this->horizontal?->value;

        $data['size'] = $this->size?->value;
        $data['style'] = $this->style?->value;
        $data['color'] = $this->color?->value;

        $data['selectAction'] = $this->selectAction->toArray();

        return $this->normalize($data);
    }
}
