<?php

namespace HBM\AdaptiveCardsBundle\Schema\Element;

use HBM\AdaptiveCardsBundle\Schema\Action\AbstractAction;
use HBM\AdaptiveCardsBundle\Schema\Property\Layout\Alignment\Horizontal;
use HBM\AdaptiveCardsBundle\Schema\Property\Layout\HeightColumnSet;
use HBM\AdaptiveCardsBundle\Schema\Property\Layout\Spacing;
use HBM\AdaptiveCardsBundle\Schema\Property\Style\StyleColumnSet;
use HBM\AdaptiveCardsBundle\Schema\Property\TypeElement;

class ColumnSet extends AbstractElement
{
    protected TypeElement $type = TypeElement::COLUMN_SET;

    /** @var Column[] */
    public array $columns = [];

    // Layout
    public ?Spacing $spacing = Spacing::DEFAULT;
    public bool $separator = false;
    public ?Horizontal $horizontal = null;
    public ?HeightColumnSet $height = HeightColumnSet::AUTOMATIC;
    public ?string $minHeightPixel = null;

    // Style
    public ?StyleColumnSet $style = StyleColumnSet::DEFAULT;
    public ?bool $bleed = null;

    // Select action
    public ?AbstractAction $selectAction = null;

    public function toArray(): array
    {
        $data = parent::toArray();

        $data['spacing'] = $this->spacing?->value;
        $data['separator'] = $this->separator;
        $data['horizontalAlignment'] = $this->horizontal?->value;
        $data['height'] = $this->height?->value;
        $data['minHeight'] = $this->minHeightPixel;

        $data['style'] = $this->style?->value;
        $data['bleed'] = $this->bleed;

        $data['columns'] = $this->addCollection($this->columns);

        $data['selectAction'] = $this->selectAction?->toArray();

        return $this->normalize($data);
    }
}
