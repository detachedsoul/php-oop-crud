# php-oop-crud

## CRUD functionlity using PHP's OOP

### Edit your database credentials accordingly in the Config class

For insert (Create), one can do:

```php
$params = array(
 'A new post',
 'detachedsoul',
 'This would be the dummy content of this post'
);

$insert = DB::getInstance()->insert('post', ['title', 'author', 'content'], ...$params);
```

For select (Read), one can do:

```php
 $author = "detachedsoul";

 $select = DB::getInstance()->select('*', 'posts', 'WHERE author = ?', $author);
```

OR

```php
 $select = DB::getInstance()->select('*', 'posts');
```

For update (Update), one can do:

```php
 $params = [
  'Title has changed',
  'detachedsoul'
 ];

 $update = DB::getInstance()->update('post', 'title = ?', 'WHERE author = ?', ...$params);
```

For delete (Delete), one can do:

```php
 $id = 2;

 $delete = DB::getInstance()->delete('post', 'id', $id);
 ```
