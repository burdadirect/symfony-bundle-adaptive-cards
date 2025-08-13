<?php

namespace HBM\AdaptiveCardsBundle\Schema\Action;

use HBM\AdaptiveCardsBundle\Schema\Property\Layout\Mode;
use HBM\AdaptiveCardsBundle\Schema\Property\Style\StyleAction;
use HBM\AdaptiveCardsBundle\Schema\Property\TypeAction;

class OpenUrl extends AbstractAction
{
    protected TypeAction $type = TypeAction::OPEN_URL;

    public ?string $url = null;

    public Mode $mode = Mode::PRIMARY;
    public StyleAction $style = StyleAction::DEFAULT;

    public function toArray(): array
    {
        $data = parent::toArray();

        $data['url'] = $this->url;
        $data['mode'] = $this->mode->value;
        $data['style'] = $this->style->value;

        return $this->normalize($data);
    }
}
