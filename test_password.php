<?php

$password = 'Layla123';
$hash = '$2y$10$U7ZsPCISMMPGGOESp.h6weSKRGiCkZb4SyCcBOaTUUl6f0OC8dDJe';

if (password_verify($password, $hash)) {
    echo "Password is valid!";
} else {
    echo "Invalid password.";
}
