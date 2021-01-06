# Session
### A PHP Session Package
Small library where you can manage the PHP session either with the `session` helper or instantiating the `MDP\Session` class
#### Instalation
```
composer require marcosdipaolo/session
```
#### Usage
```php
$session = new \MDP\Session();
$session->put('someKey', 'someValue');
$session->get(); // ["someKey" => "someValue"]
$session->get('someKey') // "someValue"
```

#### The `session` helper method
The `session` helper method equals a `MDP\Session` instance. You can then chain any of its methods. 

```php
session()->destroy();
```
#### Methods
| Method        | Purpose       |
| ------------- | ------------- |
| `get`         | You get the session instance. It receives an optional argument, in case of its existence the method returns the element on that key of the session content.|
| `put`  | Store a value into the session. It receives 2 arguments. The first is the key where the value is going to be stored. The second is the value itself. |
|`has`|It receives a key as a string parameter and it returns whether the session contains that key or not.|
|`forget`|It receive a key as only argument and unsets it.|
|`destroy`|It performs a `session_destroy()`|
|`unset`|It performs a `session_unset()`|