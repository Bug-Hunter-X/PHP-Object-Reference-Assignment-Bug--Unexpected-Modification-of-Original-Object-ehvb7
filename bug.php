In PHP, a common yet subtle error arises when dealing with object references and assignment.  Consider this scenario:

```php
class MyClass {
    public $value = 0;
}

$object1 = new MyClass();
$object2 = $object1; // Assign by reference

$object2->value = 10;

echo $object1->value; // Outputs 10, not 0!
```

The seemingly innocuous assignment `$object2 = $object1` doesn't create a copy of `$object1`. Instead, `$object2` becomes another reference to the same object in memory. Modifying `$object2` directly alters the original object, `$object1`, leading to unexpected behavior. This often goes unnoticed, especially in larger codebases.