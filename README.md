# php-oop-crud

-CRUD functionlity using PHP's OOP.

--Edit your database credentials accordingly in the Config class.

```html
<h2>For insert <strong>(Create)</strong>, one can do:</h2>
```

```php
$params = array(
 'A new post',
 'detachedsoul',
 'This would be the dummy content of this post'
);

$insert = DB::getInstance()->insert('post', ['title', 'author', 'content'], ...$params);
```

```html
<h2>For select <strong>(Read)</strong>, one can do:</h2>
```

```php
 $author = "detachedsoul";

 $select = DB::getInstance()->select('*', 'posts', 'WHERE author = ?', $author);
```

OR

```php
 $select = DB::getInstance()->select('*', 'posts');
```

```html
<h2>For update <strong>(Update)</strong>, one can do:</h2>
```

```php
 $params = [
  'Title has changed',
  'detachedsoul'
 ];

 $update = DB::getInstance()->update('post', 'SET title = ?', 'WHERE author = ?', ...$params);
```

```html
<h2>For delete <strong>(Delete)</strong>, one can do:</h2>
```

```php
 $id = 2;

 $delete = DB::getInstance()->delete('post', 'id', $id);
 ```
