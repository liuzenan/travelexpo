<?php
require 'include/facebook/facebook.php';

// Create our Application instance (replace this with your appId and secret).
$facebook = new Facebook( array('appId' => '334745573285940', 'secret' => '0b46a8258727c2519d2a70f807bf1861', ));

// Get User ID
$user = $facebook -> getUser();

// We may or may not have this data based on whether the user is logged in.
//
// If we have a $user id here, it means we know the user is logged into
// Facebook, but we don't know if the access token is valid. An access
// token is invalid if the user logged out of Facebook.
// Login or logout url will be needed depending on current user state.
if (!$user) {
    header("Location: index.php");
	exit ;
}
?>

