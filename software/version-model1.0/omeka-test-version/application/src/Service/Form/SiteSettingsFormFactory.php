<?php
namespace Omeka\Service\Form;

use Omeka\Form\SiteSettingsForm;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;

class SiteSettingsFormFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $services, $requestedName, array $options = null)
    {
        $form = new SiteSettingsForm;
        $form->setSiteSettings($services->get('Omeka\Settings\Site'));
        $form->setBrowseService($services->get('Omeka\Browse'));
        return $form;
    }
}
