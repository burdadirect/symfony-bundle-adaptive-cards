<?php

namespace HBM\AdaptiveCardsBundle\Schema\Property\Layout\Responsive;

enum TargetMatch: string
{
    case EXACTLY = 'Exact';
    case AT_LEAST = 'atLeast';
    case AT_MOST = 'atMost';
}
