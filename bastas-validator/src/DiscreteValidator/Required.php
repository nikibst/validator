<?php

namespace Bastas\Validator\DiscreteValidator;

use Bastas\Validator\AbstractValidator;
use Bastas\Validator\ValidatorInterface;

/**
 * Class Required
 * @package Bastas\Validator\DiscreteValidator
 */
class Required extends AbstractValidator implements ValidatorInterface
{
    /**
     *
     */
    const REQUIRED_INPUT = 'Input is required';

    /**
     * Required constructor.
     */
    public function __construct()
    {
        parent::__construct(self::REQUIRED_INPUT);
    }

    /**
     * @param $input
     * @return bool
     */
    public function isValid($input) : bool
    {
        if ($input === '') {
            return false;
        }

        return true;
    }
}
