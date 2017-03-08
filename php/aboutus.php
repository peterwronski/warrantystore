<?php

if (isset($_SESSION['userSession'])&&(($_SESSION['userSession']) == true)){
    include('header_loggedin.html');
}
else {
    include('header.html');
}
?>