<?php


use Icinga\Web\Controller\ModuleActionController;
use Icinga\Application\Icinga;
use Icinga\Web\Controller;
use Icinga\Web\Widget;

class PuppetReports_IndexController extends ModuleActionController
{
    public function indexAction()
    {
        $this->view->tabs = $this->tabs()->activate('index');

    }

    public function factsAction()
    {
        $this->view->tabs = $this->tabs()->activate('facts');
    }

    protected function tabs()
    {
        return Widget::create('tabs')->add(
            'index',
            array(
                'label' => $this->translate('Reports'),
                'url'   => 'puppetreports'
            )
        )->add(
            'facts',
            array(
                'label' => $this->translate('Facts'),
                'title' => $this->translate('List all available facts'),
                'url'   => 'puppetreports/index/facts'
            )
        );
    }


}
