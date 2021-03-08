
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>

		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active"> Ajouter Commande </li>
		</ol>
	</section>
	<section class="content">
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
			<form class="needs-validation" method="post" action="<?= base_url('user/add_commande') ?>" novalidate>
				<div class="modal-body">
					<div class="form-group">
						<label for="formGroupExampleInput">First Name Receiver: * </label>
						<input type="text" class="form-control" id="nom_rec" name="nom_rec" placeholder="First Name Receiver" required/>
						<?php echo form_error('nom_rec',' <div class="alert alert-danger" role="alert">','</div>') ?>
					</div>
					<div class="form-group">
						<label for="formGroupExampleInput2">Last Name Receiver : *</label>
						<input type="text" class="form-control" id="prenom_rec" name="prenom_rec" placeholder="Last Name Receiver" required/>
						<?php echo form_error('prenom_rec',' <div class="alert alert-danger" role="alert">','</div>') ?>
					</div>
					<div class="form-group">
						<label for="formGroupExampleInput2">Region Receiver: *</label>
						<input type="text" class="form-control" id="Region_rec" name="Region_rec" placeholder="Region Receiver" required/>
						<?php echo form_error('Region_rec',' <div class="alert alert-danger" role="alert">','</div>') ?>
					</div>
					<div class="form-group">
						<label for="formGroupExampleInput2">Address Receiver: *</label>
						<input type="text" class="form-control" id="adresse_rec" name="adresse_rec" placeholder="Address Receiver." required/>
						<?php echo form_error('adresse_rec',' <div class="alert alert-danger" role="alert">','</div>') ?>
					</div>
					<div class="form-group">
						<label for="formGroupExampleInput2">Phone Receiver : *</label>
						<input type="text" class="form-control" id="telph_rec" name="telph_rec" placeholder="telph_rec" required/>
						<?php echo form_error('telph_rec',' <div class="alert alert-danger" role="alert">','</div>') ?>
					</div>
					<div class="form-group">
						<label for="formGroupExampleInput2">Item Name : *</label>
						<input type="text" class="form-control" name="nom_art" placeholder="Item Name" required/>
						<?php echo form_error('nom_art',' <div class="alert alert-danger" role="alert">','</div>') ?>
					</div>
					<div class="form-group">
						<label for="formGroupExampleInput2">Amount: *</label>
						<input type="text" class="form-control" id="qte" name="qte" placeholder="amount" required/>
						<?php echo form_error('qte',' <div class="alert alert-danger" role="alert">','</div>') ?>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
		</div>
		</div>
</div>
</form>
		</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('#userTable').DataTable();
		$("#mainUserNav").addClass('active');
		$("#manageUserNav").addClass('active');
	});
</script>
