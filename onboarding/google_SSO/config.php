<?php
/*
 * Basic Site Settings and API Configuration
 */

// Database configuration
define('DB_HOST', '217.21.80.10');
define('DB_USERNAME', 'u502039025_h85');
define('DB_PASSWORD', 'Tp9M!o7Vc?');
define('DB_NAME', 'u502039025_h85');
define('DB_USER_TBL', 'users');

// Google API configuration
define('GOOGLE_CLIENT_ID', '509794980887-7iqfjqlbnb12hpssdaakk1oo201ij1ae.apps.googleusercontent.com');
define('GOOGLE_CLIENT_SECRET', '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');
define('GOOGLE_REDIRECT_URL', 'https://wooble.org/onboarding/google_SSO/index.php');

// Start session
if(!session_id()){
    session_start();
}

// Include Google API client library
require_once 'google-api-php-client/Google_Client.php';
require_once 'google-api-php-client/contrib/Google_Oauth2Service.php';

// Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId(GOOGLE_CLIENT_ID);
$gClient->setClientSecret(GOOGLE_CLIENT_SECRET);
$gClient->setRedirectUri(GOOGLE_REDIRECT_URL);

$google_oauthV2 = new Google_Oauth2Service($gClient);