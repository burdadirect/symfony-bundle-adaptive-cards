<?php

namespace HBM\AdaptiveCardsBundle\Schema\Property\Style;

enum StyleBadge: string
{
    case DEFAULT = 'Default';
    case SUBTLE = 'Subtle';
    case INFORMATIVE = 'Informative';
    case ACCENT = 'Accent';
    case GOOD = 'Good';
    case ATTENTION = 'Attention';
    case WARNING = 'Warning';
}
