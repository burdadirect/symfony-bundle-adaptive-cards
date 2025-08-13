<?php

namespace HBM\AdaptiveCardsBundle\Schema\Property\Layout\Responsive;

enum TargetWidth: string
{
    case VERY_NARROW = 'VeryNarrow';
    case NARROW = 'Narrow';
    case STANDARD = 'Standard';
    case WIDE = 'Wide';
}
