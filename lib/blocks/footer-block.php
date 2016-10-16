	<footer>
		<p class="copyright small">&copy;<?php echo date('Y');?> BenHumphries.co.uk</p>
		<a class="contact" onclick="showForm('.contact-form')">
			<img src="<?php echo WEB_ROOT; ?>/lib/img/icons/mail.svg" alt="Email me">
		</a>
		<a class="top" href="#intro">
			<img src="<?php echo WEB_ROOT; ?>/lib/img/icons/up-arrow.svg" alt="Back to top">
		</a>
	</footer>

	<script async src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="crossorigin="anonymous"></script>
	<!-- // <script async src="http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script> -->
	<script async src="lib/js/main.min.js?<?php echo JS_VERSION; ?>"></script>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-64137901-1', 'auto');
		ga('send', 'pageview');

	</script>

</body>
</html>