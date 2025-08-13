<?php

namespace HBM\AdaptiveCardsBundle\Schema\Property\Style;

enum SizeIcon: string
{
    case XX_SMALL = 'xxSmall';
    case X_SMALL = 'xSmall';
    case SMALL = 'Small';

    case STANDARD = 'Standard';
    case MEDIUM = 'Medium';

    case LARGE = 'Large';
    case X_LARGE = 'xLarge';
    case XX_LARGE = 'xxLarge';
}
