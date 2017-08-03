<?php

use Icinga\Application\Config;

$section = $this->menuSection('Puppet reports', array(
    'url' => 'puppetreports',
    'title' => 'Puppet reports',
    'icon' => 'beaker'
));

$this->provideConfigTab('Configuration', array(
    'title' => $this->translate('Adjust the general configuration of the puppetreports module'),
    'label' => $this->translate('Configuration'),
    'url' => 'config'
));