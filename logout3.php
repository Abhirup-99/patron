<?php
session_start();
if (!isset($_SESSION['idCustomer'])) {
    header('location: index.html');
}
session_destroy();
header('location: index.html');

?>