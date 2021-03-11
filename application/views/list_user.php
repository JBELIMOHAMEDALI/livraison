

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Manage
			<small>Livreur</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Users</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- Small boxes (Stat box) -->
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
						<h3 class="box-title">Manage Users</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">

						<table id="userTable" class="table table-bordered table-striped">
							<thead>
							<tr>
								<th>Email</th>
								<th>Nom</th>
								<th>Prenom</th>
								<th>Prix Commande</th>
								<th>Action</th>

							</tr>
							</thead>
							<tbody>
							<?php if($data_user): ?>
								<?php
								foreach ($data_user as $value) :?>

									<tr>
										<td><?php echo $value->email?></td>
										<td><?php echo $value->firstname ?></td>
										<td><?php echo $value->lastname ?></td>
										<td><?php  echo $value->prix ?></td>

										<td>
											<a href="<?php ?>" class="btn btn-default" data-toggle="modal" data-toggle="modal" onClick="reply_click2(this.id)" data-target="#exampleModal" id="<?php echo $value->id_user  ?>"><i class="fa fa-edit"></i></a>

										</td>
									</tr>
								<?php endforeach ?>
							<?php endif; ?>
							</tbody>
						</table>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- col-md-12 -->
		</div>
		<!-- /.row -->


	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"> Modifier Le Prix Du Commande</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<form class="needs-validation" method="get" action="<?= base_url('user/delete_commande') ?>" >

					<input type="hidden" id="id_livreure" name="id_livreure" >
					<label for="prix">Nouveau Prix :  </label>
					<input type="text" id="prix" name="prix" >
				</form>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
				<button type="submit" class="btn btn-success" id="addEmploiModelBtn" name="addEmploiModelBtn">Modifier</button>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$('#userTable').DataTable();

		$("#mainUserNav").addClass('active');
		$("#manageUserNav").addClass('active');
	});
</script>

<script type="text/javascript">
	function reply_click(clicked_id)
	{
		console.log(clicked_id);
		$.post("getSestionLivreure", {id:clicked_id});
	}
	function reply_click2(clicked_id)
	{
		console.log(clicked_id);
		document.getElementById("id_livreure").value = clicked_id.toString();
		//$.post("getSestionCommande", {id:clicked_id});
	}
	$("#addEmploiModelBtn").on('click', function() {
		var x;
		x=document.getElementById("id_livreure").value;
		y=document.getElementById("prix").value;

		$.ajax({
			type: 'POST',
			url: "updateUser",
			data: {id: x,prix;y},
			dataType: 'JSON',
			async:false,
			success: function(data){
				if(data==true){
					console.log("relode")
					//window.onunload = window.location.reload;
				}
			}
		});
		location.reload();
	})
</script>


