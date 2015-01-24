<?php

/*
 * This file is part of the Decapsulator package.
 *
 * (c) Katarzyna Krasińska <katheroine@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Decapsulator;

/**
 * ObjectDecapsulator.
 * Decapsulator for object.
 * Provider direct access to non-public properties and methods
 * of the class of the wrapped object.
 *
 * @package Decapsulator
 * @author Katarzyna Krasińska <katheroine@gmail.com>
 * @copyright Copyright (c) 2015 Katarzyna Krasińska
 * @license http://framework.zend.com/license/new-bsd New BSD License
 * @link http://github.com/exorg/decapsulator
 */
class ObjectDecapsulator
{
    /**
     * Decapsulated object.
     *
     * @var mixed
     */
    private $object;

    /**
     * Reflection for decapsulated object.
     *
     * @var \ReflectionClass
     */
    private $reflection;

    /**
     * Set-up reflection for decapsulated object.
     */
    private function setUpReflection()
    {
        $className = get_class($this->object);
        $this->reflection = new \ReflectionClass($className);
    }
}
