PHP Shorthand Overview
======================

Assignment Operators
--------------------

```php
$foo = ($bar) ? true : false;
$foo = ($bar) ? $bar : $baz;
$foo = $bar ? $bar : $baz;
```

### Null Coalesce Operator:

```php
$foo = $bar ?: $baz;
$foo = $bar ? $bar : $baz;
```

> `?:` is similar to PHP 7 `??`
