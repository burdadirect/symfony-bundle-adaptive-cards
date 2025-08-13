<?php

namespace HBM\AdaptiveCardsBundle\Schema\Element;

use HBM\AdaptiveCardsBundle\Schema\Property\Layout\Alignment\Horizontal;
use HBM\AdaptiveCardsBundle\Schema\Property\Layout\HeightTextBlock;
use HBM\AdaptiveCardsBundle\Schema\Property\Layout\Spacing;
use HBM\AdaptiveCardsBundle\Schema\Property\Style\ColorTextBlock;
use HBM\AdaptiveCardsBundle\Schema\Property\Style\FontType;
use HBM\AdaptiveCardsBundle\Schema\Property\Style\SizeTextBlock;
use HBM\AdaptiveCardsBundle\Schema\Property\Style\StyleTextBlock;
use HBM\AdaptiveCardsBundle\Schema\Property\Style\FontWeight;
use HBM\AdaptiveCardsBundle\Schema\Property\TypeElement;

class TextBlock extends AbstractElement
{
    protected TypeElement $type = TypeElement::TEXT_BLOCK;

    public ?string $text = null;

    // Layout
    public ?Spacing $spacing = Spacing::DEFAULT;
    public bool $separator = false;
    public ?Horizontal $horizontal = null;
    public ?HeightTextBlock $height = HeightTextBlock::AUTOMATIC;
    public bool $wrap = false;
    public ?int $maxLines = null;

    // Style
    public ?StyleTextBlock $style = null;
    public ?FontType $fontType = null;
    public ?FontWeight $weight = null;
    public ?SizeTextBlock $size = null;
    public ?ColorTextBlock $color = null;
    public ?bool $isSubtle = null;

    public function toArray(): array
    {
        $data = parent::toArray();

        $data['text'] = $this->text;

        $data['spacing'] = $this->spacing?->value;
        $data['separator'] = $this->separator;
        $data['horizontalAlignment'] = $this->horizontal?->value;
        $data['height'] = $this->height?->value;
        $data['wrap'] = $this->wrap;
        $data['maxLines'] = $this->maxLines;

        $data['style'] = $this->style?->value;
        $data['fontType'] = $this->fontType?->value;
        $data['size'] = $this->size?->value;
        $data['weight'] = $this->weight?->value;
        $data['color'] = $this->color?->value;
        $data['isSubtle'] = $this->isSubtle;

        return $this->normalize($data);
    }
}
