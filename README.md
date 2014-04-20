PHP Config helper class

Benefits:
- Does not pollute the global space
- Organize global variables into a tree of data


Usage
-----

```php
/**
* Edit $_config variable at the top with information
* $_config = ['admin' => ['name'=>'alex','email'=>'email@mail.com']];
* Creates a two level tree. (Can be as deep as needed.)
*/

//Go to the admin node and return what's in the name node.
$adminName = Config::get('admin/name');

//get the whole array that's in admin
$adminInfo = Config::get('admin');

echo count($adminInfo); //Prints out 2



```

