<?php

namespace HBM\AdaptiveCardsBundle\Schema\Property\Style;

enum StyleContainer: string
{
    case DEFAULT = 'default';
    case EMPHASIS = 'emphasis';
    case ACCENT = 'accent';
    case GOOD = 'good';
    case ATTENTION = 'attention';
    case WARNING = 'warning';
}
