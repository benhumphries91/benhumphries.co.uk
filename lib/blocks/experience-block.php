<section id="experience">
	<div class="container">
	<?php 
		$experience_ar = array();

		$experience_ar[0]['text'] = 'experience 1';
		$experience_ar[0]['logo'] = 'src="" alt="Gap360 Logo"';
		$experience_ar[1]['text'] = 'experience 2';
		$experience_ar[1]['logo'] = 'src="" alt="Steria Logo"';
		$experience_ar[2]['text'] = 'experience 3';
		$experience_ar[2]['logo'] = 'src="" alt="RFA Logo"';

		$i = 0;
		foreach ($experience_ar as $experience) {
			if ($i % 2 == 0) {
				$position = 'left-item';
			}
			else {
				$position = 'right-item';
			}
			echo "<div class='timeline-item $position'>
					<p>".$experience['text']."</p>
					<div class='circle-logo'>
						<img ".$experience['logo'].">
					</div>
				</div>";
			$i++;
		}

	?>
</section>