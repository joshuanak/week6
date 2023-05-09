<?php

/*
 * Joshua Nakatani
 * 5/9/2023
 * 328/week6/index.php
 * Controller for week6 project
 */

// turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once('vendor/autoload.php');

// Create an F3 object
$f3 = Base::instance();
// Base $f3 = new Base();

// Define a default route
$f3->route('GET /', function() {

    // Display a view page
    $view = new Template();
    echo $view->render('views/info.html');
});

$f3->route('GET /page2', function() {
    echo "Page 2";
});

// Run Fat-Free
$f3->run();