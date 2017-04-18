<?php

namespace Bastas\Validator\DiscreteValidator;

use Bastas\Validator\AbstractValidator;
use Bastas\Validator\ValidatorInterface;

/**
 * Class DigitsOnly
 * @package Bastas\Validator\DiscreteValidator
 */
class DigitsOnly extends AbstractValidator implements ValidatorInterface
{
    /**
     *
     */
    const CONTAINS_NON_DIGIT_CHARACTERS = 'Input must contain only digits';

    /**
     * DigitsOnly constructor.
     */
    public function __construct()
    {
        parent::__construct(self::CONTAINS_NON_DIGIT_CHARACTERS);
    }

    /**
     * @param $input
     * @return bool
     */
    public function isValid($input) : bool
    {
        if (!is_numeric($input)) {
            return false;
        }

        return true;
    }
}
