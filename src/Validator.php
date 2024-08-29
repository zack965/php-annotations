<?php

namespace Zack\PhpAnnotation;

use ReflectionClass;
use Zack\PhpAnnotation\ValidationRoles\Required;

class Validator
{
    public static function validate(object $object)
    {
        $reflection = new ReflectionClass($object);
        $properties = $reflection->getProperties();
        foreach ($properties as $property) {
            $attributes = $property->getAttributes(Required::class);
            if (!empty($attributes)) {
                $property->setAccessible(true); // Make private properties accessible
                $value = $property->getValue($object);
                // Validate the required property
                if (empty($value)) {
                    throw new \Exception("The property '{$property->getName()}' is required and cannot be empty.");
                }
            }
        }
    }
}
