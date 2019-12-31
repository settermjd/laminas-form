<?php

/**
 * @see       https://github.com/laminas/laminas-form for the canonical source repository
 * @copyright https://github.com/laminas/laminas-form/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-form/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\Form\Element;

use Laminas\Form\Element;
use Laminas\Form\ElementPrepareAwareInterface;
use Laminas\Form\FieldsetInterface;

class Password extends Element implements ElementPrepareAwareInterface
{
    /**
     * Seed attributes
     *
     * @var array
     */
    protected $attributes = array(
        'type' => 'password',
    );

    /**
     * Remove the password before rendering if the form fails in order to avoid any security issue
     *
     * @param  FieldsetInterface $form
     * @return mixed
     */
    public function prepareElement(FieldsetInterface $form)
    {
        $this->setValue('');
    }
}
