<section id="process" class="fullscreen skew skew-white">
	<div class="container">
		<div class="row">
			<div class="col s12">
				<h2 class="section-title">How I Create</h2>
				
				<div class="col s12 m4 process-item">
					<img src="<?php echo WEB_ROOT; ?>/lib/img/icons/design.svg" alt="Education">
					<h4>Design</h4>
					<h5>Wireframes to Interactive Mock-ups.</h5>
					<p>Starting with sketches and expanding on these in Photoshop and Illustrator to create a variety of different concepts, Ui elements, icons and graphics. Then taking these concepts to inVision where I can create interactive versions to test the initial design and usability.</p>
				</div>
				<div class="col s12 m4 process-item">
					<img src="<?php echo WEB_ROOT; ?>/lib/img/icons/development.svg" alt="Education">
					<h4>Development</h4>
					<h5>Concept to Code</h5>
					<p>Building begins utilizing SublimeText2 to take the mockups and turning them into a responsive website. Implementing both backend and frontend languages such as PHP, Javascript and HTML5 to develop the features and interactions.</p>
				</div>
				<div class="col s12 m4 process-item">
					<img src="<?php echo WEB_ROOT; ?>/lib/img/icons/launch.svg" alt="Education">
					<h4>Launch</h4>
					<h5>Test, Develop Repeat... Launch</h5>
					<p>Now there is a working application we can test it extensively across a range of devices and different users. Then take it back to development to rectify any issues before more testing. Once all of issues are ironed out it's finally time to launch</p>
				</div>
			</div>

			<div class="col s12 m10 push-m1 tag-cloud">
				<h3 class="section-title">My Skill Cloud</h3>

				<?php
					$process_tags = array(
						'languages' => array(
							'HTML5', 'CSS3', 'PHP', 'Javascript', 'jQuery', 'Sass','mySQL', 'Terminal'
						),
						'software' => array(
							'Adobe Suite', 'inVision', 'Sublime Text', 'Git', 'Bitbucket'
						),
						'frameworks' => array(
							'Bootstrap 2 & 3', 'Drupal7', 'Wordpress', 'Materialize', 
						)
					);

					foreach ($process_tags['languages'] as $language) {
						echo "<span class='tag'>$language</span>";
					}
					foreach ($process_tags['software'] as $software) {
						echo "<span class='tag'>$software</span>";
					}
					foreach ($process_tags['frameworks'] as $framework) {
						echo "<span class='tag'>$framework</span>";
					}
				?>
			</div>
		</div>
	</div>
</section>