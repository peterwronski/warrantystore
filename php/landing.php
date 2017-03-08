<?php
/**
 * Created by PhpStorm.
 * User: offormachukwunonso
 * Date: 2/26/17
 * Time: 5:33 PM
 */
session_start();

if (isset($_SESSION['userSession'])&&(($_SESSION['userSession']) == true)){
    include('header_loggedin.html');
}
else {
    include('header.html');
};
echo "<h1>welcome " .$_SESSION['userSession']."</h1>";

echo '<a href="logout.php" >logout</a>';