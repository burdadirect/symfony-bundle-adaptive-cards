<?php

namespace HBM\AdaptiveCardsBundle\Schema\Element;

use HBM\AdaptiveCardsBundle\Schema\Property\Layout\Alignment\Horizontal;
use HBM\AdaptiveCardsBundle\Schema\Property\Layout\HeightRichTextBlock;
use HBM\AdaptiveCardsBundle\Schema\Property\Layout\Spacing;
use HBM\AdaptiveCardsBundle\Schema\Property\TypeElement;

class RichTextBlock extends AbstractElement
{
    protected TypeElement $type = TypeElement::RICH_TEXT_BLOCK;

    /** @var TextRun[] */
    public array $inlines = [];

    public ?string $labelFor = null;

    // Layout
    public ?Spacing $spacing = Spacing::DEFAULT;
    public bool $separator = false;
    public ?Horizontal $horizontal = null;
    public ?HeightRichTextBlock $height = HeightRichTextBlock::AUTOMATIC;

    public function toArray(): array
    {
        $data = parent::toArray();

        $data['labelFor'] = $this->labelFor;

        $data['spacing'] = $this->spacing?->value;
        $data['separator'] = $this->separator;
        $data['horizontalAlignment'] = $this->horizontal?->value;
        $data['height'] = $this->height?->value;

        $data['inlines'] = $this->addCollection($this->inlines);

        return $this->normalize($data);
    }
}
