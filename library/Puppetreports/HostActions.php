<?php
namespace Icinga\Module\Puppetreports;
use Icinga\Module\Monitoring\Web\Hook\HostActionsHook;
use Icinga\Module\Monitoring\Object\Host;
use Icinga\Web\Url;
class HostActions extends HostActionsHook
{
    public function getActionsForHost(Host $host)
    {
        return $this->createNavigation(array(
            mt('puppetreports', 'Puppet Reports') => array(
                'url'  => Url::fromPath('puppetreports', array('server' => $host->getName())),
                'icon' => 'beaker',
                
            )
        ));
    }
}