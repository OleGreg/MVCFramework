<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
      integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<?php
/**
 * Created by PhpStorm.
 * User: greg.crowell
 * Date: 4/19/2016
 * Time: 2:11 PM
 */

echo "<div class ='container'>";

echo "<h1>Hello {$this->authenticated_user['username']} </h1>";

echo "<h2>Welcome to " . get_class($this) . "</h2>";

echo "<hr>";
