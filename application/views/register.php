<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
	<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
	<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css'>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
	<style>
		* {
			margin: 0;
			padding: 0
		}

		html {
			height: 100%
		}

		p {
			color: grey
		}

		#heading {
			text-transform: uppercase;color: #673AB7;font-weight: normal
		}

		#msform {
			text-align: center;
			position: relative;
			margin-top: 20px
		}

		#msform fieldset {
			background: white;
			border: 0 none;
			border-radius: 0.5rem;
			box-sizing: border-box;
			width: 100%;
			margin: 0;
			padding-bottom: 20px;
			position: relative
		}

		.form-card {
			text-align: left
		}

		#msform fieldset:not(:first-of-type) {
			display: none
		}

		#msform input,
		#msform textarea {
			padding: 8px 15px 8px 15px;
			border: 1px solid #ccc;
			border-radius: 0px;
			margin-bottom: 25px;
			margin-top: 2px;
			width: 100%;
			box-sizing: border-box;
			font-family: montserrat;
			color: #2C3E50;
			background-color: #ECEFF1;
			font-size: 16px;
			letter-spacing: 1px
		}

		#msform input:focus,
		#msform textarea:focus {
			-moz-box-shadow: none !important;
			-webkit-box-shadow: none !important;
			box-shadow: none !important;
			border: 1px solid #673AB7;
			outline-width: 0
		}

		#msform .action-button {
			width: 100px;
			background: #673AB7;
			font-weight: bold;
			color: white;
			border: 0 none;
			border-radius: 0px;
			cursor: pointer;
			padding: 10px 5px;
			margin: 10px 0px 10px 5px;
			float: right
		}

		#msform .action-button:hover,
		#msform .action-button:focus {
			background-color: #311B92
		}

		#msform .action-button-previous {
			width: 100px;
			background: #616161;
			font-weight: bold;
			color: white;
			border: 0 none;
			border-radius: 0px;
			cursor: pointer;
			padding: 10px 5px;
			margin: 10px 5px 10px 0px;
			float: right
		}

		#msform .action-button-previous:hover,
		#msform .action-button-previous:focus {
			background-color: #000000
		}

		.card {
			z-index: 0;
			border: none;
			position: relative
		}

		.fs-title {
			font-size: 25px;
			color: #673AB7;
			margin-bottom: 15px;
			font-weight: normal;
			text-align: left
		}

		.purple-text {
			color: #673AB7;
			font-weight: normal
		}

		.steps {
			font-size: 25px;
			color: gray;
			margin-bottom: 10px;
			font-weight: normal;
			text-align: right
		}

		.fieldlabels {
			color: gray;
			text-align: left
		}

		#progressbar {
			margin-bottom: 30px;
			overflow: hidden;
			color: lightgrey
		}

		#progressbar .active {
			color: #673AB7
		}

		#progressbar li {
			list-style-type: none;
			font-size: 15px;
			width: 25%;
			float: left;
			position: relative;
			font-weight: 400
		}

		#progressbar #account:before {
			font-family: FontAwesome;
			content: "\f13e"
		}

		#progressbar #personal:before {
			font-family: FontAwesome;
			content: "\f007"
		}

		#progressbar #payment:before {
			font-family: FontAwesome;
			content: "\f030"
		}

		#progressbar #confirm:before {
			font-family: FontAwesome;
			content: "\f00c"
		}

		#progressbar li:before {
			width: 50px;
			height: 50px;
			line-height: 45px;
			display: block;
			font-size: 20px;
			color: #ffffff;
			background: lightgray;
			border-radius: 50%;
			margin: 0 auto 10px auto;
			padding: 2px
		}

		#progressbar li:after {
			content: '';
			width: 100%;
			height: 2px;
			background: lightgray;
			position: absolute;
			left: 0;
			top: 25px;
			z-index: -1
		}

		#progressbar li.active:before,
		#progressbar li.active:after {
			background: #673AB7
		}

		.progress {
			height: 20px
		}

		.progress-bar {
			background-color: #673AB7
		}

		.fit-image {
			width: 100%;
			object-fit: cover
		}




	</style>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inscription</title>
</head>
<body>

<div>
	<div class="col-md-12 col-xs-12">
		<?php if($this->session->flashdata('errors')): ?>
			<div class="alert alert-danger" role="alert">
				<?php echo $this->session->flashdata('errors'); ?>
			</div>
		<?php endif; ?>
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
					<div class="card px-0 pt-4 pb-0 mt-3 mb-3">
						<h2 id="heading">Sign Up Your User Account</h2>
						<p>Fill all form field to go to next step</p>

						<form id="msform" name="f1" action="<?= base_url('user/create') ?>" method="post" novalidate>
							<!-- progressbar -->
							<ul id="progressbar" >
								<li class="active" id="account"><strong>Account</strong></li>
								<li id="personal"><strong>Personal</strong></li>
								<li id="payment"><strong>Receiver</strong></li>
								<li id="confirm"><strong>Item</strong></li>
							</ul>

							<div class="progress">
								<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
							</div> <br> <!-- fieldsets -->
							<fieldset>
								<div class="form-card">
									<div class="row">
										<div class="col-7">
											<h2 class="fs-title">Account Information:</h2>
										</div>
										<div class="col-5">
											<h2 class="steps">Step 1 - 4</h2>
										</div>

									</div> <label class="fieldlabels">Email: *</label>
									<input type="email" name="email" id="email" placeholder="Email Id" autocomplete="off" />
									<?php echo form_error('email',' <div class="alert alert-danger" role="alert">','</div>') ?>
									<label class="fieldlabels">Password: *</label>
									<input type="password" name="password" id="password" placeholder="Password" autocomplete="off" required/>
									<?php echo form_error('password',' <div class="alert alert-danger" role="alert">','</div>') ?>
									<label class="fieldlabels">Confirm Password: *</label>
									<input type="password" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password"  required/>
									<?php echo form_error('confirmpassword',' <div class="alert alert-danger" role="alert">','</div>') ?>
								</div> <input type="button" name="next" class="next action-button" value="Next" />
							</fieldset>
							<fieldset>
								<div class="form-card">
									<div class="row">
										<div class="col-7">
											<h2 class="fs-title">Personal Information:</h2>
										</div>
										<div class="col-5">
											<h2 class="steps">Step 2 - 4</h2>

										</div>
									</div> <label class="fieldlabels">First Name: *</label>
									<input type="text" id="fname" name="fname" placeholder="First Name" required/>
									<?php echo form_error('fname',' <div class="alert alert-danger" role="alert">','</div>') ?>

									<label class="fieldlabels">Last Name: *</label>
									<input type="text" id="lname" name="lname" placeholder="Last Name" required/>
									<?php echo form_error('lname',' <div class="alert alert-danger" role="alert">','</div>') ?>

									<label class="fieldlabels">Phone: *</label>
									<input type="text" id="phone" name="phone" placeholder="phone" required/>
									<?php echo form_error('phone',' <div class="alert alert-danger" role="alert">','</div>') ?>

									<label class="fieldlabels">Adresse: *</label>
									<input type="text" name="adresse" id="adresse" placeholder="adresse." required/>
									<?php echo form_error('adresse',' <div class="alert alert-danger" role="alert">','</div>') ?>


								</div> <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
							</fieldset>
							<fieldset>
								<div class="form-card">
									<div class="row">
										<div class="col-7">
											<h2 class="fs-title">Receiver Information: </h2>
										</div>
										<div class="col-5">
											<h2 class="steps">Step 3 - 4</h2>
										</div>
									</div> <label class="fieldlabels">First Name Receiver: *</label>
									<input type="text" id="nom_rec" name="nom_rec" placeholder="First Name Receiver" required/>
									<?php echo form_error('nom_rec',' <div class="alert alert-danger" role="alert">','</div>') ?>

									<label class="fieldlabels">Last Name Receiver : *</label>
									<input type="text" id="prenom_rec" name="prenom_rec" placeholder="Last Name Receiver" required/>
									<?php echo form_error('prenom_rec',' <div class="alert alert-danger" role="alert">','</div>') ?>

									<label class="fieldlabels">Region Receiver: *</label>
									<input type="text" id="Region_rec" name="Region_rec" placeholder="Region Receiver" required/>
									<?php echo form_error('Region_rec',' <div class="alert alert-danger" role="alert">','</div>') ?>

									<label class="fieldlabels">Address Receiver: *</label>
									<input type="text" name="adresse_rec" id="adresse_rec" placeholder="Address Receiver." required/>
									<?php echo form_error('adresse_rec',' <div class="alert alert-danger" role="alert">','</div>') ?>

								</div> <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
							</fieldset>
							<fieldset>
								<div class="form-card">
									<div class="row">
										<div class="col-7">
											<h2 class="fs-title">Item Information: :</h2>
										</div>
										<div class="col-5">
											<h2 class="steps">Step 4 - 4</h2>
										</div>
									</div> <label class="fieldlabels">Phone Receiver : *</label>
									<input type="text" id="telph_rec" name="telph_rec" placeholder="telph_rec" required/>
									<?php echo form_error('telph_rec',' <div class="alert alert-danger" role="alert">','</div>') ?>

									<label class="fieldlabels">Item Name : *</label>
									<input type="text" id="nom_art" name="nom_art" placeholder="Item Name" required/>
									<?php echo form_error('nom_art',' <div class="alert alert-danger" role="alert">','</div>') ?>
									<label class="fieldlabels">Amount: *</label>
									<input type="text" id="qte" name="qte" placeholder="amount" required/>
									<?php echo form_error('qte',' <div class="alert alert-danger" role="alert">','</div>') ?>
									<label class="fieldlabels">Price: *</label>
									<input type="text" id="prix_article" name="prix_article" placeholder="price" required/>
									<?php echo form_error('prix_article',' <div class="alert alert-danger" role="alert">','</div>') ?>


								</div> <input type="submit" style="text-transform: uppercase;color: #673AB7;font-weight: normal;background: lightgray;"  name="next"  value="Submit" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
							</fieldset>
						</form>
					</div>
				</div>
				<!--click in next 2 sennd a user to save it and getthe id to save it in data base -->
			</div>
		</div></div>
	<script>
		$(document).ready(function(){
			$(function() { $('#f1 input').removeAttr('required'); });
			var current_fs, next_fs, previous_fs; //fieldsets
			var opacity;
			var current = 1;
			var steps = $("fieldset").length;

			setProgressBar(current);

			$(".next").click(function(){

				current_fs = $(this).parent();
				next_fs = $(this).parent().next();

//Add Class Active
				$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
				next_fs.show();
//hide the current fieldset with style
				current_fs.animate({opacity: 0}, {
					step: function(now) {
// for making fielset appear animation
						opacity = 1 - now;

						current_fs.css({
							'display': 'none',
							'position': 'relative'
						});
						next_fs.css({'opacity': opacity});
					},
					duration: 500
				});
				setProgressBar(++current);
			});

			$(".previous").click(function(){

				current_fs = $(this).parent();
				previous_fs = $(this).parent().prev();

//Remove class active
				$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
				previous_fs.show();

//hide the current fieldset with style
				current_fs.animate({opacity: 0}, {
					step: function(now) {
// for making fielset appear animation
						opacity = 1 - now;

						current_fs.css({
							'display': 'none',
							'position': 'relative'
						});
						previous_fs.css({'opacity': opacity});
					},
					duration: 500
				});
				setProgressBar(--current);
			});

			function setProgressBar(curStep){
				var percent = parseFloat(100 / steps) * curStep;
				percent = percent.toFixed();
				$(".progress-bar")
					.css("width",percent+"%")
			}



		});
	</script>

	<script type="text/javascript">
		function Generator() {};

		Generator.prototype.rand =  Math.floor(Math.random() * 26) + Date.now();

		Generator.prototype.getId = function() {
			return Math.floor(Math.random() * 26) + Date.now();
		};
		var idGen =new Generator();
	</script>
</body>
</html>
