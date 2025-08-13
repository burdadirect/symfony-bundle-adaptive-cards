<?php

namespace HBM\AdaptiveCardsBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class HBMAdaptiveCardsBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
