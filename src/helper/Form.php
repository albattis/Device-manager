<?php


namespace helper;


use ReflectionClass;

class Form
{
    public static function dropdown($label,$rows, $key, $value, $selectedKey, $class, $property, $number = false)
    {
        $reflect = new ReflectionClass($class);
        $onlyClassName = mb_strtolower($reflect->getShortName());

        $id = "{$onlyClassName}_{$property}";
        $name = "{$onlyClassName}[{$property}]";

        if($number)
        {
            $id .= "_{$number}";
            $name = "[{$number}]";
        }
        include("src/app/view/helper/form-dropdown.php");
    }

    public static function input($label,$type, $value, $class, $property, $number = false)
    {
        $reflect = new ReflectionClass($class);
        $onlyClassName = mb_strtolower($reflect->getShortName());

        $id = "{$onlyClassName}_{$property}";
        $name = "{$onlyClassName}[{$property}]";

        if($number)
        {
            $id .= "_{$number}";
            $name = "[{$number}]";
        }
        include("src/app/view/helper/form-input.php");
    }
}