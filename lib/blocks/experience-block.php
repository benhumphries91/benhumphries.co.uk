<section id="experience" class="fullscreen skew skew-gradient">
	<div class="container">
		<div class="row">
			<h2 class="section-title">Timeline</h2>
		</div>
		<div class="row timeline">
			<?php 
				$experience_ar = array();

				$experience_ar[0]['title'] = 'Diploma Mobile App Development';
				$experience_ar[0]['text'] = "I learned the basics required to design and develop web apps for mobile devices. This required using the Cordova framework and Intel XDK to develop and test apps hybrid web apps on mobile devices and utilising the devices features such as the camera or geolocation.";
				$experience_ar[0]['logo'] = 'src="'.WEB_ROOT.'/lib/img/icons/education.svg" alt="Education"';
				$experience_ar[0]['dates'] = '2016';

				$experience_ar[1]['title'] = 'Gap 360 Ltd - Web Developer';
				$experience_ar[1]['text'] = array(
					0 => "I am currently working within a small web development team, using an agile, GIT workflow to complete development work on multiple brand owned websites.",
					1 => "The majority of the work that I do is for the front-end, such as; designing, improving, creating and testing new features. Other tasks involve working with on the backend on the websites using PHP, Drupal 7, Wordpress and Databases.",
					2 => "On top of this I am training a junior developer in several languages such as CSS3, jQuery and PHP."
				);
				$experience_ar[1]['logo'] = 'src="'.WEB_ROOT.'/lib/img/icons/work.svg" alt="Employment"';
				$experience_ar[1]['dates'] = '2014 - Present';

				$experience_ar[2]['title'] = 'Developing Rich Internet Applications using HTML5';
				$experience_ar[2]['text'] = array(
					0 => "This course focused on HTML5, CSS3 and how these languages support modern browsers, as well as exploring how they can be supported in legacy browsers.",
					1 => "I learned that using new emerging technologies of the web could create high performance web applications with reduced server calls, all without the need for plugins."
				);
				$experience_ar[2]['logo'] = 'src="'.WEB_ROOT.'/lib/img/icons/education.svg" alt="Education"';
				$experience_ar[2]['dates'] = '2013';


				$experience_ar[3]['title'] = 'Steria Ltd - Immediate Service Excellance Award';
				$experience_ar[3]['text'] = "I was awarded the &lsquo;Immediate Service Excellence Award&rsquo; in recognition for the time, effort and expertise that I put in to implementing a portal website for a contractor.";
				$experience_ar[3]['logo'] = 'src="'.WEB_ROOT.'/lib/img/icons/award.svg" alt="Awards"';
				$experience_ar[3]['dates'] = '2012';

				$experience_ar[4]['title'] = 'Steria Ltd';
				$experience_ar[4]['text'] = "My primary role was worked on the service desk, solving customers problems and reporting on issues related to secure connection computers and e-mail services. As well as this I was tasked with creating secure portal web pages and web content for MOD projects.";
				$experience_ar[4]['logo'] = 'src="'.WEB_ROOT.'/lib/img/icons/work.svg" alt="Employment"';
				$experience_ar[4]['dates'] = '2012 - 2014';

				$experience_ar[5]['title'] = 'RFA Advertising';
				$experience_ar[5]['text'] = array(
					0 => "My task here was to create HTML slideshows for iPad&rsquo;s, using Indesign documents. This allowed the Field Sales team to showcase product on the tablets, as well as allowing potential customers to interact with a digital version of the product.",
					1 => "This required creating vector assets in illustrator, coding HTML templates, Flash keyframe animations and jQuery animation."
				);
				$experience_ar[5]['logo'] = 'src="'.WEB_ROOT.'/lib/img/icons/work.svg" alt="Employment"';
				$experience_ar[5]['dates'] = '2012';

				$experience_ar[6]['title'] = 'Bsc Web Design';
				$experience_ar[6]['text'] = "Where it all started! This is where I developed my skills of web devlopment, web design and design methodologies. With the guidence of my lecturers, and class mates I learned to study the aesthetics of web design, prototyping and emerging web technologies all put into practical design and web development assignments.";
				$experience_ar[6]['logo'] = 'src="'.WEB_ROOT.'/lib/img/icons/education.svg" alt="Education"';
				$experience_ar[6]['dates'] = '2009 - 2012';

				foreach ($experience_ar as $experience) 
				{
					echo "<div class='timeline-item'>
						<div class='timeline-img'>
							<img ".$experience['logo'].">
						</div>


						<div class='timeline-text z-depth-1'>
							<h3>".$experience['title']."</h3>
							<p class='dates'>".$experience['dates']."</p>";

							if (is_array($experience['text'])) {
								foreach ($experience['text'] as $text) {
									echo "<p>$text</p>";
								}
							} else {
							echo "<p>".$experience['text']."</p>";
							}

					echo "</div></div>";
				}

			?>
		</div>
	</div>
</section>