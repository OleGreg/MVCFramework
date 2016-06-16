<?php
/**
 * Created by PhpStorm.
 * User: greg.crowell
 * Date: 4/19/2016
 * Time: 2:11 PM
 */

echo "<h1>Hello {$this->authenticated_user['username']} </h1>";

echo "<h2>Welcome to " . get_class($this) . "</h2>";

echo "<hr>";
