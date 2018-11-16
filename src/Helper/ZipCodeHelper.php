<?php

namespace App\Helper;

class ZipCodeHelper
{
    static public function sanitize(string $zipCode): string
    {
        return preg_replace('/[^0-9]/', '', $zipCode);
    }

    static public function validate(string $zipCode, $sanitize = false): bool
    {
        if ($sanitize) {
            $zipCode = self::sanitize($zipCode);
        }

        return preg_match('/\d{8}/', $zipCode);
    }
}