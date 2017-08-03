<?php


namespace Icinga\Module\Puppetreports\Forms\Config;

use Icinga\Forms\ConfigForm;

class GeneralConfigForm extends ConfigForm
{

    public function init()
    {
        $this->setName('form_config_puppetreports_general');
        $this->setSubmitLabel($this->translate('Save Changes'));
    }

    public function createElements(array $formData)
    {

        $this->addElement(
            'text',
            'reports_dir',
            array(
                'value'         => '/var/lib/puppet/reports',
                'label'         => $this->translate('Reports dir'),
                'description'   => $this->translate('Derictory with puppet reports.'),
                'requirement'   => $this->translate('Example: /var/lib/puppet/reports')
            )
        );

        $this->addElement(
            'text',
            'facts_dir',
            array(
                'value'         => '/var/lib/puppet/yaml/facts',
                'label'         => $this->translate('Facts dir'),
                'description'   => $this->translate('Derictory with puppet facts.'),
                'requirement'   => $this->translate('Exapmle: /var/lib/puppet/yaml/facts')
            )
        );

    }
}
