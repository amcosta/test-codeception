<?php

namespace App\Model;

class ZipCodeModel implements ZipCodeModelInterface
{
    public $zipCode;

    public function getZipCode(): string
    {
        return $this->zipCode;
    }
}