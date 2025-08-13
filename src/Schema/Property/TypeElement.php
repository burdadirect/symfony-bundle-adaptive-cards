<?php

namespace HBM\AdaptiveCardsBundle\Schema\Property;

enum TypeElement: string
{
    case ACTION_SET = 'ActionSet';
    case BADGE = 'Badge';
    case CONTAINER = 'Container';
    case COLUMN_SET = 'ColumnSet';
    case COLUMN = 'Column';
    case FACT_SET = 'FactSet';
    case FACT = 'Fact';
    case ICON = 'Icon';
    case IMAGE = 'Image';
    case RICH_TEXT_BLOCK = 'RichTextBlock';
    case TEXT_BLOCK = 'TextBlock';
    case TEXT_RUN = 'TextRun';
}
