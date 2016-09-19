<?php

use Icinga\Application\Config;

$section = $this->menuSection('Puppet reports', array(
    'url' => 'puppetreports',
    'title' => 'Puppet reports',
    'icon' => 'beaker'
));

$this->provideConfigTab('general', array(
    'title' => $this->translate('Adjust the general configuration of the puppetreports module'),
    'label' => $this->translate('General'),
    'url' => 'config'
));