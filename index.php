<?php
include('./inc/header.php');

// Connect to firebase
require __DIR__ . '/vendor/autoload.php';

use Kreait\Firebase\Factory;

$firebase = (new Factory)->withServiceAccount('./secret/php-firebase-tasklist-aa2a4ec67302.json');
$database = $firebase->createDatabase();

// Grab Task List
$taskList = $database->getReference('tasklist')->getValue();

include('./inc/newTask.php');

include('./inc/tasklist.php');

include('./inc/footer.php');
