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

// LinkedIn API configuration
define('LIN_CLIENT_ID', '865ot8yrscixc8');
define('LIN_CLIENT_SECRET', 'iPJzzBqJdI4RdG8F');
define('LIN_REDIRECT_URL', 'https://wooble.org/onboarding/linkedin_SSO/index.php');
define('LIN_SCOPE', 'r_liteprofile r_emailaddress'); //API permissions

// Start session
if(!session_id()){
    session_start();
}

// Include the oauth client library
require_once 'linkedin-oauth-client-php/http.php';
require_once 'linkedin-oauth-client-php/oauth_client.php';