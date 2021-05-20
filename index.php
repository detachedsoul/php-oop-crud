<?php
  require_once(__DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php');
  use app\lib\DB;
?>
<?php


// Insert
$params = array(
  'A new post',
  'detachedsoul',
  'This would be the dummy content of this post'
);
$insert = DB::getInstance()->insert('post', ['title', 'author', 'content'], ...$params);



// Select
$author = "detachedsoul";
$select = DB::getInstance()->select('*', 'posts', 'WHERE author = ?', $author);

// OR

$select = DB::getInstance()->select('*', 'posts');


// Update
$params = [
  'Title has changed',
  'detachedsoul'
];
$update = DB::getInstance()->update('post', 'title = ?', 'WHERE author = ', ...$params);


// Delete
$id = 2;
$delete = DB::getInstance()->delete('post', 'id', $id);
