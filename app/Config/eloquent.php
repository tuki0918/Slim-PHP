<?php

use Illuminate\Database\Capsule\Manager as DB;

$config = require CONFIG_PATH . '/database.php';

$db = new DB;
$db->addConnection($config);
$db->setAsGlobal();
$db->bootEloquent();

class_alias('Cartalyst\Sentry\Facades\Native\Sentry', 'Sentry');

// Sentry::register(array(
//     'email'    => 'john.doe@example.com',
//     'password' => 'foobar',
// ));

// $user = Sentry::findUserByLogin('john.doe@example.com');

// var_dump($user->email);

// Sentry::authenticate(array(
//     'email'    => 'john.doe@example.com',
//     'password' => 'foobar',
// ));

// Sentry::createGroup(array(
//     'name'        => 'Subscribers',
//     'permissions' => array(
//         'admin' => 1,
//         'users' => 1,
//     ),
// ));


$credentials = array(
    'email'    => 'john.doe@example.com',
    'password' => 'foobar',
);

// Authenticate the user
$user = Sentry::authenticate($credentials, false);

var_dump($user);

