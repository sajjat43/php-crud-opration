<?php
$con = new mysqli('localhost', 'root', "", 'phpCrud');
if (!$con) {
    die(mysqli_errno($con));
}