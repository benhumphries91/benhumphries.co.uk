<section id="experience">
	<div class="container">
		<div class="row">
			<?php 
				$experience_ar = array();

				$experience_ar[0]['text'] = "Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I'm in a transitional period so I don't wanna kill you, I wanna help you. But I can't give you this case, it don't belong to me. Besides, I've already been through too much shit this morning over this case to hand it over to your dumb ass.";
				$experience_ar[0]['logo'] = 'src="" alt="Gap360 Logo"';
				$experience_ar[0]['title'] = 'Gap 360 Ltd';
				$experience_ar[0]['dates'] = '2014 - Present';

				$experience_ar[1]['text'] = "Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I'm in a transitional period so I don't wanna kill you, I wanna help you. But I can't give you this case, it don't belong to me. Besides, I've already been through too much shit this morning over this case to hand it over to your dumb ass.";
				$experience_ar[1]['logo'] = 'src="" alt="Steria Logo"';
				$experience_ar[1]['title'] = 'Steria Ltd';
				$experience_ar[1]['dates'] = '2012 - 2014';

				$experience_ar[2]['text'] = "Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I'm in a transitional period so I don't wanna kill you, I wanna help you. But I can't give you this case, it don't belong to me. Besides, I've already been through too much shit this morning over this case to hand it over to your dumb ass.";
				$experience_ar[2]['logo'] = 'src="" alt="RFA Logo"';
				$experience_ar[2]['title'] = 'RFA Advertising';
				$experience_ar[2]['dates'] = '2012';

				$experience_ar[3]['text'] = "Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I'm in a transitional period so I don't wanna kill you, I wanna help you. But I can't give you this case, it don't belong to me. Besides, I've already been through too much shit this morning over this case to hand it over to your dumb ass.";
				$experience_ar[3]['logo'] = 'src="" alt="RFA Logo"';
				$experience_ar[3]['title'] = 'Bsc Web Design';
				$experience_ar[3]['dates'] = '2009 - 2012';

				foreach ($experience_ar as $experience) 
				{
					echo "<div class='timeline-item'>
						<div class='timeline-img'>
							<img".$experience['logo'].">
						</div>

						<div class='timeline-text'>
							<h2>".$experience['title']."</h2>
							<p>".$experience['text']."</p>
							<span class='dates'>".$experience['dates']."</span>
						</div>
					</div>";
				}

			?>
	</div>
	</div>
</section>