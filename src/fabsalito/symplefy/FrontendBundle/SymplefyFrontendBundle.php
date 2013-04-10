<?php

namespace fabsalito\symplefy\FrontendBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SymplefyFrontendBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
