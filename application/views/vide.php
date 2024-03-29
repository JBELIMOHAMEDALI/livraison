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
			text-transform: uppercase;
			color: #673AB7;
			font-weight: normal
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
	<title>Document</title>
</head>
<body>

<div>
	<div class="col-md-12 col-xs-12">


		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
					<div class="card px-0 pt-4 pb-0 mt-3 mb-3">
						<h2 id="heading">INSCRIVEZ VOTRE COMPTE UTILISATEUR</h2>

						<form id="msform" action="<?= base_url('user/create') ?>" method="post">
							<!-- progressbar -->
							<?php $this->session->flashdata('errors'); ?>
							<div style="text-align: center;margin-left: 200px">

							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
							</div> <br> <!-- fieldsets -->
							<fieldset>
								<div class="form-card">
									<div class="row">
										<div class="col-7">
											<h2 class="fs-title">Finish:</h2>
										</div>
										<div class="col-5">
											<h2 class="steps">Final Step :</h2>
										</div>
									</div> <br>
									<h2 class="purple-text text-center"><strong>SUCCESS ! </strong></h2>

									<div style="text-align: center;"> <img style="width: 300px;height: 250px;text-align: center;" src="https://i.imgur.com/GwStPmg.png" class="fit-image"></div>
									<br>
									<div class="row justify-content-center">
										<div class="col-7 text-center">
											<h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
										</div>
									</div>
									<div style="text-align: center">
										<button type="button" class="btn btn-primary btn-lg" onclick="location.href='<?php echo base_url();?>register'">Register</button>
										<button type="button" class="btn btn-success btn-lg" onclick="location.href='<?php echo base_url();?>auth/login'">Login </button>
									</div>
								</div>
							</fieldset>

						</form>
					</div>
				</div>

			</div>
		</div></div>
	<script>
		$(document).ready(function(){

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

			$(".submit").click(function(){
				return false;
			})

		});
	</script>
</body>
</html>


