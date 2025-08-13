<?php

namespace HBM\AdaptiveCardsBundle\Schema\Property;

enum FillMode: string
{
    case COVER = 'Cover';
    case REPEAT_HORIZONTALLY = 'RepeatHorizontally';
    case REPEAT_VERTICALLY = 'RepeatVertically';
    case Repeat = 'Repeat';
}
