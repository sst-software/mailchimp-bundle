<?php

namespace Welp\MailchimpBundle;

use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Welp\MailchimpBundle\DependencyInjection\WelpMailchimpExtension;

class WelpMailchimpBundle extends Bundle
{
    public function getContainerExtension(): ?ExtensionInterface
    {
        return new WelpMailchimpExtension();
    }
}
