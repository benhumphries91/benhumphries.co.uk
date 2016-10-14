<section id="portfolio" class="fullscreen skew skew-white">
	<div class="container">
		<h2 class="section-title">Work</h2>
		<div class="row">
			<?php 
				$work_ar = array();

				$work_ar[0]['title'] = 'Gap 360';
				$work_ar[0]['skills'] = array('Web Design', 'Web Developement', 'Team');
				$work_ar[0]['text'] = array(
					0 => "The site required a very quick transformation to a responsive website. This had to be done within a very short time frame, so we had to skip wireframes and jump straight to design.",
					1 => "We developed the design using the Adobe suite to create multi-device mock-ups which were then translated to HTML5, CSS3, PHP and jQuery for the creation of the Website.",
					2 => "To user test the website I opted for &lsquo;Crazy Egg Heat Maps&rsquo; and &lsquo;Hotjar&rsquo;, which allowed me to look at user interaction across variations of the new design so it could be fine tuned to our customers preferences."
				);
				$work_ar[0]['image'] = 'src="'.WEB_ROOT.'/lib/img/work/gap360@1x.png"
				srcset="'.WEB_ROOT.'/lib/img/work/gap360@1x.png 500w,
					'.WEB_ROOT.'/lib/img/work/gap360@2x.png 900w,
					'.WEB_ROOT.'/lib/img/work/gap360@2x.png 1200w,
					'.WEB_ROOT.'/lib/img/work/gap360@2x.png 2x,
					'.WEB_ROOT.'/lib/img/work/gap360@2x.png 3x"
				sizes="100vw" 
				alt="Gap360 Website"';

				$work_ar[1]['title'] = 'Real Gap Experience <span class="small">(In Development)</span>';
				$work_ar[1]['skills'] = array('Web Design', 'Team', 'Web Developement', 'Ui');
				$work_ar[1]['text'] = array(
					0 => "I am currently working on the Real Gap website, which is a new project for the company. The website had been somewhat neglected, designs were outdated and it was using legacy systems.",
					1 => "I worked with the senior backend developer on my team to revamp and update the previous Drupal 6 build to Drupal 7 as well as implementing the bootstrap responsive framework. I have been solely responsible for the development of the front-end of the website.",
					2 => "To user test the Ui and concept of the updated design, I opted for inVision, which allowed me to create an interactive prototype."
				);
				$work_ar[1]['image'] = 'src="'.WEB_ROOT.'/lib/img/work/realgap@1x.png"
				srcset="'.WEB_ROOT.'/lib/img/work/realgap@1x.png 500w,
					'.WEB_ROOT.'/lib/img/work/realgap@2x.png 900w,
					'.WEB_ROOT.'/lib/img/work/realgap@2x.png 1200w,
					'.WEB_ROOT.'/lib/img/work/realgap@2x.png 2x,
					'.WEB_ROOT.'/lib/img/work/realgap@2x.png 3x"
				sizes="100vw" 
				alt="Real Gap Experience Website"';


				foreach ($work_ar as $work)
				{
					?>
					<div class='work-item'>
						<div class='col s12 l8'>
							<img "<?php echo $work['image']; ?>">
						</div>
						<div class='work-info col s12 l4'>
							<h3><?php echo $work['title']; ?></h3>
							<div class='tags'>
								<?php
								foreach ($work['skills'] as $skill) {
									echo "<span>$skill</span>";
								}
								?>
							</div>
							<?php
								foreach ($work['text'] as $text) {
									echo "<p>$text</p>";
								}
							?>
						</div>
					</div>
					<?php
				}
			?>
		</div>
	</div>
</section>