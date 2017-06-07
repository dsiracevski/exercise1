<?php

App::get('database')->insert('login', [
    'first_name' => $_POST['first_name'],
    'last_name' => $_POST['last_name'],
    'email' => $_POST['email'],
    'user_name' => $_POST['user_name'],
    'date_birth' => $_POST['date_birth'],
    'password' => $_POST['password'],

]);


header('Location: /exercise1');
