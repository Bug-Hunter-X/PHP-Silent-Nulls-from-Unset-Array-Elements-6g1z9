The best solution is to explicitly check for the existence of array elements using `isset()` before accessing them.  This ensures that you're dealing with a defined value and prevents unexpected `null` values from silently impacting your logic.

```php
<?php
$myArray = ['a' => 1, 'b' => 2];
unset($myArray['b']);
//Safe way to access the element:
if (isset($myArray['b'])) {
    echo $myArray['b'];
} else {
    echo 'Element is not set';
}
// Alternatively, use the null coalescing operator
echo $myArray['b'] ?? 'Element is not set';
?>
```
This revised code explicitly checks if the element exists before attempting to access it.  The null coalescing operator (??), introduced in PHP 7.0, provides a more concise way to handle potentially null values.