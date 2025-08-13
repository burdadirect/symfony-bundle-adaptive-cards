<?php

namespace HBM\AdaptiveCardsBundle\Schema\Property\Layout;

enum Spacing: string
{
    case NONE = 'None';
    case EXTRASMALL = 'ExtraSmall';
    case SMALL = 'Small';
    case DEFAULT = 'Default';
    case MEDIUM = 'Medium';
    case LARGE = 'Large';
    case EXTRALARGE = 'ExtraLarge';
    case PADDING = 'Padding';
}
