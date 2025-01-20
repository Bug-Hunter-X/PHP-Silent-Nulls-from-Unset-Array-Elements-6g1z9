# PHP Silent Nulls from Unset Array Elements

This repository demonstrates a subtle bug in PHP related to how it handles accessing unset elements in arrays when using array access notation.  Accessing an unset array element using `$myArray['key']` returns `null` without throwing an error, which can cause unexpected behavior if not handled explicitly.

The `bug.php` file showcases this behavior. The `bugSolution.php` file presents a corrected version.