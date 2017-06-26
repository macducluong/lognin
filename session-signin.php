<?php
session_start();
if (!isset($SESSION['name'])) {
    $_SESSION['name'] = "";
}
?>