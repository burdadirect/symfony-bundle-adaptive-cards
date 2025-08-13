<?php

namespace HBM\AdaptiveCardsBundle\Schema\Element;

use HBM\AdaptiveCardsBundle\Schema\Other\Fact;
use HBM\AdaptiveCardsBundle\Schema\Property\Layout\HeightFactSet;
use HBM\AdaptiveCardsBundle\Schema\Property\Layout\Spacing;
use HBM\AdaptiveCardsBundle\Schema\Property\TypeElement;

class FactSet extends AbstractElement
{
    protected TypeElement $type = TypeElement::FACT_SET;

    /** @var Fact[] */
    public array $facts = [];

    // Layout
    public ?Spacing $spacing = Spacing::DEFAULT;
    public bool $separator = false;
    public ?HeightFactSet $height = HeightFactSet::AUTOMATIC;

    public function toArray(): array
    {
        $data = parent::toArray();

        $data['spacing'] = $this->spacing?->value;
        $data['separator'] = $this->separator;
        $data['height'] = $this->height?->value;

        $data['facts'] = $this->addCollection($this->facts);

        return $this->normalize($data);
    }
}
