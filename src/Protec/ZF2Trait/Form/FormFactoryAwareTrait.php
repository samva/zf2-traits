<?php

namespace Protec\ZF2Trait\Form;

use \Zend\Form\Factory;

/**
 * FormFactoryAwareTrait
 *
 * @package   Protec\ZF2Trait\Form
 * @author    Protec Innovations <support@protecinnovations.co.uk>
 * @copyright 2012 Protec Innovations
 */
trait FormFactoryAwareTrait
{
    /**
     * @var \Zend\Form\Factory
     */
    protected $form_factory = null;

    /**
     * setFormFactory
     *
     * @param \Zend\Form\Factory $factory
     * @return
     */
    public function setFormFactory(Factory $factory)
    {
        $this->form_factory = $factory;

        return $this;
    }
}
