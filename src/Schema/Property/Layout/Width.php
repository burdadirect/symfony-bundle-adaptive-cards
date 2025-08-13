<?php

namespace HBM\AdaptiveCardsBundle\Schema\Property\Layout;

enum Width: string
{
    case AUTOMATIC = 'Automatic';
    case STRETCH = 'Stretch';
    case WEIGHTED = 'Weighted';
    case PIXELS = 'Pixels';
}
