<?php
namespace Icinga\Module\Puppetreports;
use Icinga\Module\Monitoring\Object\Host;
use Icinga\Module\Monitoring\Object\Service;
use Icinga\Module\Monitoring\Web\Hook\ServiceActionsHook;
use Icinga\Web\Url;
class ServiceActions extends ServiceActionsHook
{
    public function getActionsForService(Service $service)
    {
        $elements = array();
        
        if ($service->getName() == "puppet-agent") {
            
            $elements[mt('puppetreports', 'Puppet Reports')] = array('url'  => Url::fromPath('puppetreports', array('server' => $service->getHost()->getName())),
            'icon' => 'beaker',
            
            );
        } elseif ($service->getName() == "puppet-agent-endpoint") {
            
            $elements[mt('puppetreports', 'Puppet Reports')] = array('url'  => Url::fromPath('puppetreports', array('server' => $service->getHost()->getName())),
            'icon' => 'beaker',
            
            );
        }

        return $this->createNavigation($elements);

    }
}