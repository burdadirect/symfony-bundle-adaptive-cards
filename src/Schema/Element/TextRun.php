<?php

namespace HBM\AdaptiveCardsBundle\Schema\Element;

use HBM\AdaptiveCardsBundle\Schema\Action\AbstractAction;
use HBM\AdaptiveCardsBundle\Schema\Property\Style\ColorTextBlock;
use HBM\AdaptiveCardsBundle\Schema\Property\Style\FontType;
use HBM\AdaptiveCardsBundle\Schema\Property\Style\SizeTextBlock;
use HBM\AdaptiveCardsBundle\Schema\Property\Style\FontWeight;
use HBM\AdaptiveCardsBundle\Schema\Property\TypeElement;

class TextRun extends AbstractElement
{
    protected TypeElement $type = TypeElement::TEXT_RUN;

    public ?string $text = null;

    // Style
    public ?FontType $fontType = null;
    public ?FontWeight $weight = null;
    public ?SizeTextBlock $size = null;
    public ?ColorTextBlock $color = null;

    public ?bool $isSubtle = null;
    public ?bool $highlight = null;
    public ?bool $italic = null;
    public ?bool $strikethrough = null;
    public ?bool $underline = null;

    // Select action
    public ?AbstractAction $selectAction = null;

    public function toArray(): array
    {
        $data = parent::toArray();

        $data['text'] = $this->text;

        $data['fontType'] = $this->fontType?->value;
        $data['weight'] = $this->weight?->value;
        $data['size'] = $this->size?->value;
        $data['color'] = $this->color?->value;

        $data['isSubtle'] = $this->isSubtle;
        $data['highlight'] = $this->highlight;
        $data['italic'] = $this->italic;
        $data['strikethrough'] = $this->strikethrough;
        $data['underline'] = $this->underline;

        $data['selectAction'] = $this->selectAction?->toArray();

        return $this->normalize($data);
    }
}
