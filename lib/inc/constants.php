<?php

define('SITE_MODE', 'Test');

if (SITE_MODE == 'Live' ) {
	define('WEB_ROOT', 'www.benhumphries.co.uk/');
} else {
	define('WEB_ROOT', '/Library/WebServer/Documents/benhumphries.co.uk/');
}

?>