<?php

namespace HBM\AdaptiveCardsBundle\Schema\Action;

use HBM\AdaptiveCardsBundle\Schema\Other\TargetElement;
use HBM\AdaptiveCardsBundle\Schema\Property\Layout\Mode;
use HBM\AdaptiveCardsBundle\Schema\Property\Style\StyleAction;
use HBM\AdaptiveCardsBundle\Schema\Property\TypeAction;

class ToggleVisibility extends AbstractAction
{
    protected TypeAction $type = TypeAction::TOGGLE_VISIBILIY;

    /** @var TargetElement[]|string[] */
    public array $targetElements = [];

    public Mode $mode = Mode::PRIMARY;
    public StyleAction $style = StyleAction::DEFAULT;

    public function toArray(): array
    {
        $data = parent::toArray();

        $data['mode'] = $this->mode->value;
        $data['style'] = $this->style->value;

        $data['targetElements'] = $this->addCollection($this->targetElements);

        return $this->normalize($data);
    }
}
