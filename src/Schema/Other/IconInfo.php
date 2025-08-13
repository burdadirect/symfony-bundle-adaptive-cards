<?php

namespace HBM\AdaptiveCardsBundle\Schema\Other;

use HBM\AdaptiveCardsBundle\Schema\AbstractItem;
use HBM\AdaptiveCardsBundle\Schema\Property\IconName;
use HBM\AdaptiveCardsBundle\Schema\Property\Style\ColorIcon;
use HBM\AdaptiveCardsBundle\Schema\Property\Style\SizeIcon;
use HBM\AdaptiveCardsBundle\Schema\Property\Style\StyleIcon;

class IconInfo extends AbstractItem
{
    public ?IconName $name = null;
    public ?ColorIcon $color = ColorIcon::DEFAULT;
    public ?SizeIcon $size = SizeIcon::X_SMALL;
    public ?StyleIcon $style = StyleIcon::REGULAR;

    protected function toArray(): array
    {
        $data = [];
        $data['name'] = $this->name->value;
        $data['color'] = $this->color->value;
        $data['size'] = $this->size->value;
        $data['style'] = $this->style->value;

        return $this->normalize($data);
    }
}
