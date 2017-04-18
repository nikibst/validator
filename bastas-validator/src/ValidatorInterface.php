<?php

namespace Bastas\Validator;

/**
 * Interface ValidatorInterface
 * @package Bastas\Validator
 */
interface ValidatorInterface
{
    /**
     * ValidatorInterface constructor.
     */
    public function __construct();

    /**
     * @param $input
     * @return bool
     */
    public function isValid($input) : bool;
}