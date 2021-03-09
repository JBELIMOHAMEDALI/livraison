
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>

		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active"> Modifier Commande </li>
			<?php //print_r($_SESSION); ?>
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
			<form class="needs-validation" method="post" action="<?= base_url('user/update_commande') ?>" novalidate>
				<div class="modal-body">
					<div class="form-group">
						<label for="formGroupExampleInput">Nom Livreur: * </label>
						<input type="text" class="form-control" id="nom" value="<?php if($data_commande != null) {echo $data_commande[0]->nom; }else{echo set_value('nom');}?>" name="nom" placeholder="Nom Livreur" required/>
						<?php echo form_error('nom',' <div class="alert alert-danger" role="alert">','</div>') ?>
					</div>
					<div class="form-group">
						<label for="formGroupExampleInput2">Prenom Livreur : *</label>
						<input type="text" class="form-control" id="prenom" value="<?php if($data_commande != null) {echo $data_commande[0]->prenom; }else{echo set_value('prenom');} ?>" name="prenom" placeholder="Prenom Livreur" required/>
						<?php echo form_error('prenom',' <div class="alert alert-danger" role="alert">','</div>') ?>
					</div>

					<div class="form-group">
						<label for="formGroupExampleInput2">Telephone Livreur: *</label>
						<input type="text" class="form-control" id="tel" value="<?php if($data_commande != null) {echo $data_commande[0]->tel; }else{echo set_value('tel');} ?>" name="tel" placeholder="Telephone Livreur" required/>
						<?php echo form_error('tel',' <div class="alert alert-danger" role="alert">','</div>') ?>
					</div>
					<div class="form-group">
						<label for="formGroupExampleInput2">Info Livreur: *</label>
						<input type="text" class="form-control" id="info" value="<?php if($data_commande != null) {echo $data_commande[0]->info;  }else{echo set_value('info');} ?>" name="adresse_rec" placeholder="Info Livreur" required/>
						<?php echo form_error('info',' <div class="alert alert-danger" role="alert">','</div>') ?>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Ajouter Livreur</button>
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
