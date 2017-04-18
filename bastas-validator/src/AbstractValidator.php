<?php

namespace Bastas\Validator;

/**
 * Class AbstractValidator
 * @package Bastas\Validator
 */
class AbstractValidator
{
    /**
     * @var string
     */
    private $errorMessage = '';

    /**
     * AbstractValidator constructor.
     * @param string $errorMessage
     */
    public function __construct(string $errorMessage)
    {
        $this->errorMessage = $errorMessage;
    }

    /**
     * @return string
     */
    public function getErrorMessage() : string
    {
        return $this->errorMessage;
    }
}