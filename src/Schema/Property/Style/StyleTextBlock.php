<?php

namespace HBM\AdaptiveCardsBundle\Schema\Property\Style;

enum StyleTextBlock: string
{
    case DEFAULT = 'default';
    case COLUMN_HEADER = 'columnHeader';
    case HEADING = 'heading';
}
