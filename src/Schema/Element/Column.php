<?php

namespace HBM\AdaptiveCardsBundle\Schema\Element;

use HBM\AdaptiveCardsBundle\Schema\Action\AbstractAction;
use HBM\AdaptiveCardsBundle\Schema\Other\BackgroundImage;
use HBM\AdaptiveCardsBundle\Schema\Property\Layout\Alignment\Horizontal;
use HBM\AdaptiveCardsBundle\Schema\Property\Layout\Alignment\Vertical;
use HBM\AdaptiveCardsBundle\Schema\Property\Layout\HeightColumn;
use HBM\AdaptiveCardsBundle\Schema\Property\Layout\Spacing;
use HBM\AdaptiveCardsBundle\Schema\Property\Layout\WidthColumn;
use HBM\AdaptiveCardsBundle\Schema\Property\Style\StyleColumn;
use HBM\AdaptiveCardsBundle\Schema\Property\TypeElement;

class Column extends AbstractElement
{
    protected TypeElement $type = TypeElement::COLUMN;

    public ?BackgroundImage $backgroundImage = null;

    /** @var AbstractElement[] */
    public array $items = [];

    // Layout
    public ?Spacing $spacing = Spacing::DEFAULT;
    public bool $separator = false;
    public ?Horizontal $horizontal = null;
    public ?Vertical $vertical = null;
    public ?HeightColumn $height = HeightColumn::AUTOMATIC;
    public ?WidthColumn $width = WidthColumn::STRETCH;
    public ?string $minHeightPixel = null;
    public ?bool $rtl = null;

    // Style
    public ?StyleColumn $style = StyleColumn::DEFAULT;
    public ?bool $showBorder = null;
    public ?bool $roundedCorners = null;
    public ?bool $bleed = null;

    // Select action
    public ?AbstractAction $selectAction = null;

    /****************************************************************************/

    public function toArray(): array
    {
        $data = parent::toArray();

        $data['backgroundImage'] = $this->backgroundImage?->toArray();

        $data['spacing'] = $this->spacing?->value;
        $data['separator'] = $this->separator;
        $data['horizontalAlignment'] = $this->horizontal?->value;
        $data['verticalContentAlignment'] = $this->vertical?->value;
        $data['height'] = $this->height?->value;
        $data['width'] = $this->width?->value;
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

    /****************************************************************************/

    public function getBackgroundImage(): ?BackgroundImage
    {
        return $this->backgroundImage;
    }

    public function setBackgroundImage(?BackgroundImage $backgroundImage
    ): Column {
        $this->backgroundImage = $backgroundImage;

        return $this;
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function setItems(array $items): Column
    {
        $this->items = $items;

        return $this;
    }

    public function getSpacing(): ?Spacing
    {
        return $this->spacing;
    }

    public function setSpacing(?Spacing $spacing): Column
    {
        $this->spacing = $spacing;

        return $this;
    }

    public function isSeparator(): bool
    {
        return $this->separator;
    }

    public function setSeparator(bool $separator): Column
    {
        $this->separator = $separator;

        return $this;
    }

    public function getHorizontal(): ?Horizontal
    {
        return $this->horizontal;
    }

    public function setHorizontal(?Horizontal $horizontal): Column
    {
        $this->horizontal = $horizontal;

        return $this;
    }

    public function getVertical(): ?Vertical
    {
        return $this->vertical;
    }

    public function setVertical(?Vertical $vertical): Column
    {
        $this->vertical = $vertical;

        return $this;
    }

    public function getHeight(): ?HeightColumn
    {
        return $this->height;
    }

    public function setHeight(?HeightColumn $height): Column
    {
        $this->height = $height;

        return $this;
    }

    public function getWidth(): ?WidthColumn
    {
        return $this->width;
    }

    public function setWidth(?WidthColumn $width): Column
    {
        $this->width = $width;

        return $this;
    }

    public function getMinHeightPixel(): ?string
    {
        return $this->minHeightPixel;
    }

    public function setMinHeightPixel(?string $minHeightPixel): Column
    {
        $this->minHeightPixel = $minHeightPixel;

        return $this;
    }

    public function getRtl(): ?bool
    {
        return $this->rtl;
    }

    public function setRtl(?bool $rtl): Column
    {
        $this->rtl = $rtl;

        return $this;
    }

    public function getStyle(): ?StyleColumn
    {
        return $this->style;
    }

    public function setStyle(?StyleColumn $style): Column
    {
        $this->style = $style;

        return $this;
    }

    public function getShowBorder(): ?bool
    {
        return $this->showBorder;
    }

    public function setShowBorder(?bool $showBorder): Column
    {
        $this->showBorder = $showBorder;

        return $this;
    }

    public function getRoundedCorners(): ?bool
    {
        return $this->roundedCorners;
    }

    public function setRoundedCorners(?bool $roundedCorners): Column
    {
        $this->roundedCorners = $roundedCorners;

        return $this;
    }

    public function getBleed(): ?bool
    {
        return $this->bleed;
    }

    public function setBleed(?bool $bleed): Column
    {
        $this->bleed = $bleed;

        return $this;
    }

    public function getSelectAction(): ?AbstractAction
    {
        return $this->selectAction;
    }

    public function setSelectAction(?AbstractAction $selectAction): Column
    {
        $this->selectAction = $selectAction;

        return $this;
    }

}
