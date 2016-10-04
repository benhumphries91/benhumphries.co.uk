<section id="contact">
	<div class="container">
		<h2>Get in Touch</h2>
		<div class="row">
			<div class="col s3 m2 offset-m2">
				<a class="contact" onclick="showForm('.contact-form')">
					<img src="/benhumphries.co.uk/lib/img/icons/email.svg">
				</a>
			</div>

			<div class="col s3 m2">
				<a class="linkedin" href="https://uk.linkedin.com/in/humphriesben" target="_blank">
					<img src="/benhumphries.co.uk/lib/img/icons/linkedin.svg">
				</a>
			</div>

			<div class="col s3 m2">
				<a class="github" href="https://github.com/benhumphries91" target="_blank">
					<img src="/benhumphries.co.uk/lib/img/icons/github.svg">
				</a>
			</div>

			<div class="col s3 m2">
				<a class="behance" href="https://www.behance.net/ben_humphra34f" target="_blank">
					<img src="/benhumphries.co.uk/lib/img/icons/behance.svg">
				</a>
			</div>
		</div>
	</div>



	<div class="container contact-form hidden-form">
		<h2 class="title-top xl-text" data-title="Get in Touch">Get in Touch</h2>
		<div class="form-area">
			<form class="row">
				<div class="input-field col s12">
					<input type="text" name="fullname" id="fullname" value="">
					<label for="fullname">Full Name</label>
				</div>
				<div class="input-field col s12">
					<input type="email" name="email" id="email" value="">
					<label for="email">E-mail Address</label>
				</div>
				<div class="input-field col s12">
					<input type="tel" name="tel" id="tel" value="">
					<label for="tel">Contact Number</label>
				</div>
				<div class="input-field col s12">
					<textarea id="message" name="message" class="materialize-textarea"></textarea>
					<label for="message">Textarea</label>
				</div>
				<button type="submit" onclick="submitForm('.contact-form', {fullname : '[name=fullname]', email : '[name=email]', phone : '[name=tel]', message : '[name=message]'}); return false;" class="btn btn-teal btn-full">Send</button>
			</form>
		</div>
		<div class="success">
		</div>
	</div>
</section>