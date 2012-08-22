<?php 
require_once 'include/facebook/facebook.php';

// Your application parameters
$fb_app_id = '334745573285940';
$fb_secret = '0b46a8258727c2519d2a70f807bf1861';


// The page the user should be redirected to
// after logging out
//must be a abusolute url
$logout_redirect_url = 'http://ec2-46-137-230-100.ap-southeast-1.compute.amazonaws.com/travelexpo/index.php';

// Initialise the PHP SDK
$facebook = new Facebook(array(
	'appId' => $fb_app_id,
	'secret' => $fb_secret,
));
$user = $facebook -> getUser();
if($user){
		$logoutUrl = $facebook->getLogoutUrl(array('next' =>$logout_redirect_url));

		// Reset the global $_SESSION array which contains all the session variables
		// This array is used by the PHP SDK
		$_SESSION = array();
		
		// Kill the session cookies (if any)		
		if (ini_get("session.use_cookies")) {
			$params = session_get_cookie_params();			
			setcookie(session_name(), '', time() - 42000,
				$params["path"], $params["domain"],
				$params["secure"], $params["httponly"]
			);
		}

		// Now we destroy the PHP session
		session_destroy();
		
		// Redirect the user to the actual facebook logout URL
		echo "<script> top.location.href='" . $logoutUrl . "'</script>";

		// Stop PHP script execution.
		// Our job here is done, the user will definitely be logged out
		exit();
		}else{
		
		header("Location:".$logout_redirect_url);
		}
?>


