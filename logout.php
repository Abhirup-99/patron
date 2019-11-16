<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('location: index.html');
}
session_destroy();
header('location: index.html');

?>