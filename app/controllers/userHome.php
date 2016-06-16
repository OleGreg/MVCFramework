<?php
/**
 * Created by PhpStorm.
 * User: greg.crowell
 * Date: 4/19/2016
 * Time: 11:14 AM
 */

class userHome extends Controller
{
    function index()
    {
        $this->view('userHome/index');
    }
}