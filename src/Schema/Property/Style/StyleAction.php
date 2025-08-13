<?php

namespace HBM\AdaptiveCardsBundle\Schema\Property\Style;

enum StyleAction: string
{
    case DEFAULT = 'default';
    case POSITIVE = 'positive';
    case DESTRUCTIVE = 'destructive';
}
