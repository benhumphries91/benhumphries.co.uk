<?php 
require_once(getcwd().'/lib/inc/constants.php');
require_once(WEB_ROOT.'/lib/blocks/html-head-block.php');
require_once(WEB_ROOT.'/lib/blocks/header-block.php');
?>

<main>
	<?php 
	require_once(WEB_ROOT.'/lib/blocks/intro-block.php');
	require_once(WEB_ROOT.'/lib/blocks/portfolio-block.php');
	require_once(WEB_ROOT.'/lib/blocks/experience-block.php');
	require_once(WEB_ROOT.'/lib/blocks/process-block.php');
	require_once(WEB_ROOT.'/lib/blocks/contact-block.php');
	?>
</main>
<?php
require_once(WEB_ROOT.'/lib/blocks/footer-block.php');
?>