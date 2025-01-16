To fix this, you should explicitly create a copy of the object using the `clone` keyword:

```php
class MyClass {
    public $value = 0;
}

$object1 = new MyClass();
$object2 = clone $object1; // Create a copy

$object2->value = 10;

echo $object1->value; // Outputs 0
echo $object2->value; // Outputs 10
```

Now, changes to `$object2` won't affect `$object1`, ensuring the intended behavior.  This is particularly important when working with objects within functions or across different parts of your application.