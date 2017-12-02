<?php

/** 
 * @example
 *  echo Calculator::startFrom(10)
 *      ->add(5)
 *      ->sub(10)
 *      ->get(); // return 5
 */
class Calculator
{
    private static $_var = 0;

    public static function startFrom($var)
    {
        self::$_var = $var;
        return new static();
    }

    public static function add($var)
    {
        self::$_var += $var;
        return new static();
    }

    public static function sub($var)
    {
        self::$_var -= $var;
        return new static();
    }

    public static function get()
    {
        return self::$_var;
    }
}