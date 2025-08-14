<?php

namespace HBM\AdaptiveCardsBundle\Schema\Element;

use HBM\AdaptiveCardsBundle\Schema\Action\AbstractAction;
use HBM\AdaptiveCardsBundle\Schema\Property\Layout\Alignment\Horizontal;
use HBM\AdaptiveCardsBundle\Schema\Property\Layout\Alignment\Vertical;
use HBM\AdaptiveCardsBundle\Schema\Property\Layout\HeightImage;
use HBM\AdaptiveCardsBundle\Schema\Property\Layout\Size;
use HBM\AdaptiveCardsBundle\Schema\Property\Layout\Spacing;
use HBM\AdaptiveCardsBundle\Schema\Property\Style\StyleImage;
use HBM\AdaptiveCardsBundle\Schema\Property\TypeElement;

class Image extends AbstractElement
{
    protected TypeElement $type = TypeElement::IMAGE;

    public ?string $url = null;
    public ?string $altText = null;

    // Layout
    public ?Spacing $spacing = Spacing::DEFAULT;
    public bool $separator = false;
    public ?Horizontal $horizontal = Horizontal::LEFT;
    public ?Vertical $vertical = Vertical::TOP;
    public ?HeightImage $height = HeightImage::AUTOMATIC;
    public ?Size $size = Size::AUTO;

    public ?string $widthPixel = null;
    public ?string $heightPixel = null;

    // Style
    public ?StyleImage $style = StyleImage::DEFAULT;

    public ?string $backgroundColor = null;

    // Select action
    public ?AbstractAction $selectAction = null;

    public function toArray(): array
    {
        $data = parent::toArray();

        $data['url'] = $this->url;
        $data['altText'] = $this->altText;

        $data['spacing'] = $this->spacing?->value;
        $data['separator'] = $this->separator;
        $data['horizontalAlignment'] = $this->horizontal?->value;
        $data['verticalContentAlignment'] = $this->vertical?->value;
        $data['height'] = $this->heightPixel ?? $this->height?->value;
        $data['width'] = $this->widthPixel;
        $data['size'] = $this->size?->value;

        $data['style'] = $this->style?->value;
        $data['backgroundColor'] = $this->backgroundColor;

        $data['selectAction'] = $this->selectAction->toArray();

        return $this->normalize($data);
    }
}
