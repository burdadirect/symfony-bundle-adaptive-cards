<?php

namespace HBM\AdaptiveCardsBundle\Schema\Property\Style;

enum SizeTextBlock: string
{
    case SMALL = 'Small';
    case DEFAULT = 'Default';
    case MEDIUM = 'Medium';
    case LARGE = 'Large';
    case EXTRA_LARGE = 'ExtraLarge';
}
