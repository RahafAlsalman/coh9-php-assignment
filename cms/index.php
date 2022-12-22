<?php
session_start();
use Core\Router;

spl_autoload_register(function ($class_name) {
  if (strpos($class_name, 'Core') === false)//to not incloud faker to the spl autolod
      return;
  $class_name = str_replace("\\", '/', $class_name); // \\ = \
  $file_path = __DIR__ . "/" . $class_name . ".php";
  require_once $file_path;
});

//difine the route 

///=====================this for public user=======================



//======================login for  web administrators============================
Router::get('/', 'authentication.login'); // Display home.php 
Router::get('/logout', "authentication.logout"); // Logs the user out
Router::post('/authenticate', "authentication.validate"); // Displays the login form

Router::get('/dashboard', "dashboards.index"); // Displays the login form

// //====================this web administrators==========================

// //athenticated + permissions [item:read]
// Router::get('/stockmangment', "items.index"); // list of items (HTML)
// Router::get('/item', "items.single"); // Displays single post (HTML)
// // athenticated + permissions [post:create]
// Router::get('/items/create', "items.create"); // Display the creation form (HTML)
// Router::post('/items/store', "items.store"); // Creates the items (PHP)
// // athenticated + permissions [post:read, post:create]
// Router::get('/items/edit', "items.edit"); // Display the edit form (HTML)
// Router::post('/items/update', "items.update"); // Updates the items (PHP)
// // athenticated + permissions [post:read, post:detele]
// Router::get('/items/delete', "items.delete"); // Delete the post (PHP)
// //automtically it macke instense to class

// // athenticated + permissions [item:read]
// Router::get('/sillingdashboard', "transactions.index"); // list of transactions (HTML)
// Router::get('/transaction', "transactions.single"); // Displays single post (HTML)
// // athenticated + permissions [post:create]
// Router::get('/transactions/create', "transactions.create"); // Display the creation form (HTML)
// Router::post('/transactions/store', "transactions.store"); // Creates the transactions (PHP)
// // athenticated + permissions [post:read, post:create]
// Router::get('/transactions/edit', "transactions.edit"); // Display the edit form (HTML)
// Router::post('/transactions/update', "transactions.update"); // Updates the transactions (PHP)
// // athenticated + permissions [post:read, post:detele]
// Router::get('/transactions/delete', "transactions.delete"); // Delete the post (PHP)
// //automtically it macke instense to class

// Router::get('/profiles', "profiles.index"); 
// // Router::post('/profiles/edit', "profiles.edit");


// // athenticated + permissions [user:read]
// Router::get('/tags', "tags.index"); // list of tags (HTML)
// Router::get('/tag', "tags.single"); // Displays single post (HTML)
// // athenticated + permissions [user:create]
// Router::get('/tags/create', "tags.create"); // Display the creation form (HTML)
// Router::post('/tags/store', "tags.store"); // Creates the tags (PHP)
// // athenticated + permissions [user:read, user:create]
// Router::get('/tags/edit', "tags.edit"); // Display the edit form (HTML)
// Router::post('/tags/update', "tags.update"); // Updates the tags (PHP)
// // athenticated + permissions [user:read, user:delete]
// Router::get('/tags/delete', "tags.delete"); // Delete the post (PHP)

// // athenticated + permissions [user:read]
// Router::get('/users', "users.index"); // list of users (HTML)
// Router::get('/user', "users.single"); // Displays single post (HTML)
// // athenticated + permissions [user:create]
// Router::get('/users/create', "users.create"); // Display the creation form (HTML)
// Router::post('/users/store', "users.store"); // Creates the users (PHP)
// // athenticated + permissions [user:read, user:create]
// Router::get('/users/edit', "users.edit"); // Display the edit form (HTML)
// Router::post('/users/update', "users.update"); // Updates the users (PHP)
// // athenticated + permissions [user:read, user:delete]
// Router::get('/users/delete', "users.delete"); // Delete the post (PHP)

// //api requests
// Router::get('/api/items', 'endpoints.items');
// Router::post('/api/items/create', 'endpoints.items_create');

// //this route is just for text the ajax
// Router::get('/ajax/test_ajax', 'ajax.test_ajax');

//automtically it macke instense to class
Router::redirect();
