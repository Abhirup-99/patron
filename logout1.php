<?php
session_start();
if (!isset($_SESSION['idMaster'])) {
    header('location: index.html');
}
session_destroy();
header('location: index.html');

?>