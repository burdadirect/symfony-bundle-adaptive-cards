<?php

namespace HBM\AdaptiveCardsBundle\Schema\Element;

use HBM\AdaptiveCardsBundle\Schema\Action\AbstractAction;
use HBM\AdaptiveCardsBundle\Schema\Other\BackgroundImage;
use HBM\AdaptiveCardsBundle\Schema\Property\Layout\Alignment\Horizontal;
use HBM\AdaptiveCardsBundle\Schema\Property\Layout\Alignment\Vertical;
use HBM\AdaptiveCardsBundle\Schema\Property\Layout\HeightContainer;
use HBM\AdaptiveCardsBundle\Schema\Property\Layout\Spacing;
use HBM\AdaptiveCardsBundle\Schema\Property\Style\StyleContainer;
use HBM\AdaptiveCardsBundle\Schema\Property\TypeElement;

class Container extends AbstractElement
{
    protected TypeElement $type = TypeElement::CONTAINER;

    public ?BackgroundImage $backgroundImage = null;

    /** @var AbstractElement[] */
    public array $items = [];

    // Layout
    public ?Spacing $spacing = Spacing::DEFAULT;
    public bool $separator = false;
    public ?Horizontal $horizontal = null;
    public ?Vertical $vertical = null;
    public ?HeightContainer $height = HeightContainer::AUTOMATIC;
    public ?string $minHeightPixel = null;
    public ?bool $rtl = null;

    // Style
    public ?StyleContainer $style = StyleContainer::DEFAULT;
    public ?bool $showBorder = null;
    public ?bool $roundedCorners = null;
    public ?bool $bleed = null;

    // Select action
    public ?AbstractAction $selectAction = null;

    public function toArray(): array
    {
        $data = parent::toArray();

        $data['backgroundImage'] = $this->backgroundImage?->toArray();

        $data['spacing'] = $this->spacing?->value;
        $data['separator'] = $this->separator;
        $data['horizontalAlignment'] = $this->horizontal?->value;
        $data['verticalContentAlignment'] = $this->vertical?->value;
        $data['height'] = $this->height?->value;
        $data['minHeight'] = $this->minHeightPixel;
        $data['rtl'] = $this->rtl;

        $data['style'] = $this->style?->value;
        $data['showBorder'] = $this->showBorder;
        $data['roundedCorners'] = $this->roundedCorners;
        $data['bleed'] = $this->bleed;

        $data['items'] = $this->addCollection($this->items);

        $data['selectAction'] = $this->selectAction?->toArray();

        return $this->normalize($data);
    }
}
