<?php
/**
 * Created by PhpStorm.
 * User: offormachukwunonso
 * Date: 2/26/17
 * Time: 5:33 PM
 */


header('header.html');
echo "<h1>welcome " .$_SESSION['userSession']."</h1>";

echo '<a href="logout.php" >logout</a>';