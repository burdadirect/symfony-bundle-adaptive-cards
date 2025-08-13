<?php

namespace HBM\AdaptiveCardsBundle\Schema\Element;

use HBM\AdaptiveCardsBundle\Schema\Action\AbstractAction;
use HBM\AdaptiveCardsBundle\Schema\Property\Layout\Alignment\Horizontal;
use HBM\AdaptiveCardsBundle\Schema\Property\Layout\HeightActionSet;
use HBM\AdaptiveCardsBundle\Schema\Property\Layout\Spacing;
use HBM\AdaptiveCardsBundle\Schema\Property\TypeElement;

class ActionSet extends AbstractElement
{
    protected TypeElement $type = TypeElement::ACTION_SET;

    /** @var AbstractAction[] */
    public array $actions = [];

    // Layout
    public ?Spacing $spacing = Spacing::DEFAULT;
    public bool $separator = false;
    public ?Horizontal $horizontal = null;
    public ?HeightActionSet $height = HeightActionSet::AUTOMATIC;

    public function toArray(): array
    {
        $data = parent::toArray();

        $data['actions'] = $this->addCollection($this->actions);
        $data['spacing'] = $this->spacing?->value;
        $data['separator'] = $this->separator;
        $data['horizontalAlignment'] = $this->horizontal?->value;
        $data['height'] = $this->height?->value;

        return $this->normalize($data);
    }
}
