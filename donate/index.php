<?php require '../chunks/doctype.php'; ?>

	<title>Donate &nbsp;&middot;&nbsp; Download &nbsp;&middot;&nbsp; Midori &nbsp;&middot;&nbsp; A lightweight, fast, and free web browser.</title>

	<?php require '../chunks/header.php'; ?>



<div class="section group">
	<div class="col span_1_of_6"><br></div>
	<div class="col span_4_of_6">
		<div class="bubble information">
			<h3 class="withimg64"><img src="<?php echo $home; ?>/images/action-love.png" class="sixtyfour floatleft"> Donate</h3>
			<h5>We'd love it if you would consider donating. Midori is an open-source, non-profit project, but the developers still get hungry.</h5>
		</div>
	</div>
	<div class="col span_1_of_6"><br></div>
</div>

<div class="section group">
	<div class="col span_1_of_6"><br></div>
	<div class="col span_4_of_6">
		<h3>Choose a Currency</h3>
		<p>While anyone with a PayPal account can donate, it may be easier for you if you donate in your native currency. Unfortunately, only some currencies are available, but you can use Google as a <a href="https://www.google.com/search?q=10+gbp+to+usd">exchange calculator</a> to convert to and donate in any of the currencies listed below.</p>
	</div>
	<div class="col span_1_of_6"><br></div>
</div>

<div class="section group">
	<div class="col span_1_of_3 donate">
		<h4>USD $</h4>
		<?php donate('US'); ?>
	</div>
	<div class="col span_1_of_3 donate">
		<h4>EUR &euro;</h4>
		<?php donate('EU'); ?>
	</div>
	<div class="col span_1_of_3 donate">
		<h4>GBP &pound;</h4>
		<?php donate('GB'); ?>
	</div>
</div>
<div class="section group">
	<div class="col span_1_of_3 donate">
		<h4>CAD $</h4>
		<?php donate('CA'); ?>
	</div>
	<div class="col span_1_of_3 donate">
		<h4>AUD $</h4>
		<?php donate('AU'); ?>
	</div>
	<div class="col span_1_of_3 donate">
		<h4>SEK kr</h4>
		<?php donate('SE'); ?>
	</div>
</div>

<div class="section group">
	<div class="col span_1_of_6"><br></div>
	<div class="col span_4_of_6">
		<p>Unfortunately, while both Brazilian Real (BRL, R$) and Indian Rupees (INR, &#8377;) have been requested, they are not available with our current PayPal solution.</p>
	</div>
	<div class="col span_1_of_6"><br></div>
</div>


<?php require '../chunks/footer.php'; ?>
