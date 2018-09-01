PHP Shorthand Overview
======================

Assignment Operators (Ternary Operator)
---------------------------------------

```php
$foo = ($bar) ? true : false;
$foo = ($bar) ? $bar : $baz;
$foo = $bar ? $bar : $baz;
```

### Null Coalesce Operator:

```php
// Equal to $foo = $bar ? $bar : $baz;
$foo = $bar ?: $baz; 
```

> `?:` is similar to PHP 7 `??`

> [Comparison Operators - Ternary Operator](http://php.net/manual/en/language.operators.comparison.php#language.operators.comparison.ternary)
