<?php

namespace HBM\AdaptiveCardsBundle\Schema\Property\Style;

enum StyleColumnSet: string
{
    case DEFAULT = 'default';
    case EMPHASIS = 'emphasis';
    case ACCENT = 'accent';
    case GOOD = 'good';
    case ATTENTION = 'attention';
    case WARNING = 'warning';
}
