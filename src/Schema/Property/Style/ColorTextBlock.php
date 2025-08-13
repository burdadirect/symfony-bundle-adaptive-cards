<?php

namespace HBM\AdaptiveCardsBundle\Schema\Property\Style;

enum ColorTextBlock: string
{
    case DEFAULT = 'Default';
    case DARK = 'Dark';
    case LIGHT = 'Light';
    case ACCENT = 'Accent';
    case GOOD = 'Good';
    case WARNING = 'Warning';
    case ATTENTION = 'Attention';
}
