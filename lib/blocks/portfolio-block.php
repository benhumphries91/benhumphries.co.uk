<section id="portfolio">
	<div class="container">
		<h2>Work</h2>
		<div class="row">
			<?php 
				$work_ar = array();

				$work_ar[0]['title'] = 'Gap360';
				$work_ar[0]['skills'] = '<span>Web Design</span> <span>Web Developement</span> <span>Team</span>';
				$work_ar[0]['text'] = "The site required a very quick transformation to a responsive website. This had to be done within a very short time frame, so had to skip wireframes jump straight to design based on the old layout.";
				$work_ar[0]['image'] = 'src="/benhumphries.co.uk/lib/img/work/gap360@2x.png" srcset="/benhumphries.co.uk/lib/img/work/gap360@1x.png 1x, /benhumphries.co.uk/lib/img/work/gap360@2x.png 2x alt="Gap360 Website"';

				$work_ar[1]['title'] = 'Real Gap (In Development)';
				$work_ar[1]['skills'] = '<span>Web Design</span> <span>Web Developement</span> <span>Ui</span> <span>Team</span>';
				$work_ar[1]['text'] = "This site was a Drupal 6 website, that needed to be brought into the present day, with a new responsive layout and upgrade to Drupal 7.";
				$work_ar[1]['image'] = 'src="/benhumphries.co.uk/lib/img/work/gap360@2x.png" srcset="/benhumphries.co.uk/lib/img/work/gap360@1x.png 1x, /benhumphries.co.uk/lib/img/work/gap360@2x.png 2x alt="Gap360 Website"';


				foreach ($work_ar as $work)
				{
					echo "<div class='work-item'>
						<div class='col s12 l9'>
							<img ".$work['image'].">
						</div>
						<div class='work-info col s12 l3'>
							<h3>".$work['title']."</h3>
							<div class='tags'>
								".$work['skills']."
							</div>
							<p>".$work['text']."</p>
						</div>
					</div>";
				}
			?>
		</div>
	</div>
</section>