<?php
namespace App\Helper;

use Exception;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;

class ValidationHelper
{
    public static function validate(...$values) {
        $invalidValues = [];
        foreach ($values as $value) {
            if (is_array($value)) {
                $invalidValues = array_merge($invalidValues, self::validate(...$value));
            } elseif (!is_float($value) && !is_int($value) && !is_numeric($value)) {
                $invalidValues[] = $value;
            }
        }
        if (!empty($invalidValues)) {
            $message = implode(', ', $invalidValues) . ' must be a float or integer';
            throw new BadRequestException($message);
        }
    }
}