<?php
/**
 * Created by PhpStorm.
 * User: offormachukwunonso
 * Date: 2/26/17
 * Time: 7:41 PM
 */

include('header.html');

session_start();
session_unset();
header("Location: index.php");