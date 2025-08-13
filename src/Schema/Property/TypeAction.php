<?php

namespace HBM\AdaptiveCardsBundle\Schema\Property;

enum TypeAction: string
{
    case EXECUTE = 'Action.Execute';
    case INSERT_IMAGE = 'Action.InsertImage';
    case OPEN_URL = 'Action.OpenUrl';
    case OPEN_URL_DIALOG = 'Action.OpenUrlDialog';
    case POPOVER = 'Action.Popover';
    case RESET_INPUTS = 'Action.ResetInputs';
    case SHOW_CARD = 'Action.ShowCard';
    case SUBMIT = 'Action.Submit';
    case TOGGLE_VISIBILIY = 'Action.ToggleVisibility';
}
