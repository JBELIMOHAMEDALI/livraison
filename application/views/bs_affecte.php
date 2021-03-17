<!--


-->





<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>

		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Affectation </li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- Small boxes (Stat box) -->
		<br><br>
		<?php if($this->session->flashdata('success')): ?>
			<div class="alert alert-success alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<?php echo $this->session->flashdata('success'); ?>
			</div>
		<?php elseif($this->session->flashdata('error')): ?>
			<div class="alert alert-error alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<?php echo $this->session->flashdata('error'); ?>
			</div>
		<?php endif; ?>

		<div class="row">
			<div class="col-md-12 col-xs-12">
				<?php if($this->session->flashdata('success')): ?>
					<div class="alert alert-success alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<?php echo $this->session->flashdata('success'); ?>
					</div>
				<?php elseif($this->session->flashdata('error')): ?>
					<div class="alert alert-error alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<?php echo $this->session->flashdata('error'); ?>
					</div>
				<?php endif; ?>

				<br /> <br />
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">
							Affectation De Commande</h3>

					</div>


					<form role="form" action="<?= base_url('bs/add_affectation') ?>" method="post">
						<div class="box-body">

							<?php print_r($_SESSION) ; ?>
							<br>
							<br>

							<div class="form-group">
								<label for="code_bar">Code à Barre</label>
								<input type="text" class="form-control" id="code_bar" name="code_bar" placeholder="code à barre">
								<?php echo form_error('code_bar',' <div class="alert alert-danger" role="alert">','</div>') ?>

							</div>
							<br>
							<br>
							<button type="submit" class="btn btn-primary">Submit</button>
					<!-- /.box-body -->
				</div>
					</form>
				<!-- /.box -->
			</div>
			<!-- col-md-12 -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('#userTable').DataTable();
		$("#mainUserNav").addClass('active');
		$("#manageUserNav").addClass('active');

	});
</script>



