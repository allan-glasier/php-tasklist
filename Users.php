<?php
require __DIR__ . './vendor/autoload.php';

use Kreait\Firebase\Factory;

class Users
{
  protected $database;
  protected $dbname = 'users';
  public function __construct()
  {
    $firebase = (new Factory)->withServiceAccount('./secret/task-list-288919-fb74fc557a0f.json');
    $database = $firebase->createDatabase();
  }
}
