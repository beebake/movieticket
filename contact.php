<?php include_once 'header.php';?>
		<!--/breadcrumbs -->
	<div class="w3l-breadcrumbs">
		<nav id="breadcrumbs" class="breadcrumbs">
			<div class="container page-wrapper">
			<a href="index.html">Home</a> » <span class="breadcrumb_last" aria-current="page">Contact</span>
			</div>
		</nav>
	</div>
 <!--//breadcrumbs -->
	  <!-- contact1 -->
	  <section class="w3l-contact-1">
		<div class="contacts-9 py-5">
		  <div class="container py-lg-4">
			<div class="headerhny-title text-center">
				<h4 class="sub-title text-center">Contact us</h4>
				<h3 class="hny-title mb-0">Leave a Message</h3>
				<p class="hny-title mb-lg-5 mb-4">If you have a question regarding our services, feel free to contact us using the form below.</p>
			</div>
			<div class="contact-view mt-lg-5 mt-4">
			  <div class="conhny-form-section">
				<form action="saveenq.php" method="post" class="formhny-sec">
						<div class="form-grids">
							<div class="form-input">
								<input type="text" name="name" id="w3lName" placeholder="Enter your name *" required="" />
							</div>
							<div class="form-input">
								<input type="text" name="subject" id="w3lSubject" placeholder="Enter subject " required />
							</div>
							<div class="form-input">
								<input type="email" name="email" id="w3lSender" placeholder="Enter your email *"
									required />
							</div>
							<div class="form-input">
								<input type="text" name="phone" pattern="[0-9]+" maxlength="10" minlength="10" id="w3lPhone" placeholder="Enter your Phone Number *"
									required />
							</div>
						</div>
						<div class="form-input mt-4">
							<textarea name="query" id="w3lMessage" placeholder="Type your query here"
								required=""></textarea>
						</div>
						<div class="submithny text-right mt-4">
							<button class="btn read-button">Submit Message</button>
						</div>
					</form>
					<?php include_once 'msg.php' ?>
			  </div>

			  <div class="d-grid contact-addres-inf mt-5 pt-lg-4">
				<div class="contact-info-left d-grid">
					<div class="contact-info">
						<div class="icon">
							<span class="fa fa-location-arrow" aria-hidden="true"></span>
						</div>
						<div class="contact-details">
							<h4>Address:</h4>
							<p>Ealing Cinemas, Ealing, LONDON</p>
						</div>
					</div>
					<div class="contact-info">
						<div class="icon">
							<span class="fa fa-phone" aria-hidden="true"></span>
						</div>
						<div class="contact-details">
							<h4>Phone:</h4>
							<p><a href="tel:+598-658-456">+598-658-346</a></p>
							<p><a href="tel:+598-658-457">+598-658-436</a></p>
						</div>
					</div>
					<div class="contact-info">
						<div class="icon">
							<span class="fa fa-envelope-open-o" aria-hidden="true"></span>
						</div>
						<div class="contact-details">
							<h4>Mail:</h4>
							<p><a href="mailto:mail@example.com" class="email">info@ealingcinemas.com</a></p>
							<p><a href="mailto:mail@example.com" class="email">ealingcinemas@support.com</a></p>
						</div>
					</div>
				</div>
			</div>
			</div>
		  </div>
		</div>
		<div class="contact-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19866.088168114456!2d-0.3090927!3d51.5084271!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760df52eecc6d1%3A0xe55b4291b14ac557!2sEaling%2C%20London!5e0!3m2!1sen!2suk!4v1654702603053!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	  </section>
	  <!-- /contact1 -->
          <?php include_once 'footer.php';?>