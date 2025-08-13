<?php

namespace HBM\AdaptiveCardsBundle\Schema\Property\Layout;

enum Size: string
{
    case AUTO = 'Auto';
    case STRETCH = 'Stretch';
    case SMALL = 'Small';
    case MEDIUM = 'Medium';
    case LARGE = 'Large';
}
