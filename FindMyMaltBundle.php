<?php

namespace PiouPiou\FindMyMaltBundle;

use PiouPiou\FindMyMaltBundle\DependencyInjection\FindMyMaltExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class FindMyMaltBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new FindMyMaltExtension();
    }
}
