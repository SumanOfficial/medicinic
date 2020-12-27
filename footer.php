<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package medicinic
 */

?>

<!-- footer area start here -->
<footer>
	<img src="img/footer-back.svg" alt="" class="footer-back rellax" data-rellax-speed="2" data-rellax-percentage="0.9" />
	<div class="footer-pattern">
		<img src="img/footer-parttern.svg" alt="" />
	</div>
	<div class="container">
		<div class="row mt-5">
			<div class="col-md-6">
				<h3 class="footer-logo">Medicnic</h3>
			</div>
			<div class="col-md-6">
				<a href="" class="btn btn-yellow">Book An Appoientment Now</a>
			</div>
		</div>

		<div class="row mt-5">
			<div class="col-lg-3 col-md-6">
				<div class="contact">
					<h5>Contact Us</h5>
					<div class="d-flex">
						<div class="call-icon mt-2">
							<img src="img/footer-call.svg" alt="" />
						</div>
						<div class="call-text ml-3">
							<h6>Call us now</h6>
							<h6>+33 3642 6542</h6>
						</div>
					</div>
					<div class="d-flex">
						<div class="mail-icon mt-2">
							<img src="img/footer-mail.svg" alt="" />
						</div>
						<div class="mail-text ml-3">
							<h6>Mail us</h6>
							<h6>medicinic@gmail.com</h6>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="quick-links">
					<h5>Quick Links</h5>
					<ul>
						<li>Home</li>
						<li>About</li>
						<li>Delivery</li>
						<li>FAQs</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="services">
					<h5>Services We Offer</h5>
					<p>
						Made To Measure Curtains Bespoke Roman Blinds Handmade Cushions
						Fabric By The Metre Online Trade
					</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="social">
					<h5>Social</h5>
					<div class="icons">
						<img src="img/facebook.svg" alt="" />
						<img src="img/instragram.svg" alt="" class="ml-2" />
						<img src="img/youtube.svg" alt="" class="ml-2" />
					</div>
					<small> Copyright &#169; & Privicy Policy 2021</small>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- footer area end here -->

<?php wp_footer(); ?>

</body>

</html>