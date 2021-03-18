

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>

		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Commande </li>
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

				<br /> <br />
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Manage Commande</h3>

					</div>

					<div class="col-auto my-1" style="display: flex;justify-content: center">
						<div class="form-group col-md-4" style="text-align: center">
							<select id="inputState" name ="inputState"  class="form-control">
								<option value="0" selected>Type...</option>
								<option value="0">En Attente </option>
								<option value="1">En cour </option>
								<option value="2">Expedia </option>
								<option value="3">Retour </option>
							</select>
						</div>
						<br><br>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="userTable" class="table table-bordered table-striped">
							<thead>
							<tr>
								<th>Nom & Prenom Destinataire</th>
								<th>Tel Destinataire</th>
								<th>Adresse Destinataire</th>
								<th>Etat</th>

							</tr>
							</thead>
							<tbody id="tablou_body">
							<?php if($data_userALL): ?>
								<?php
								foreach ($data_userALL as $value) :?>

									<tr>
										<td><?php echo $value->nom_rec." ".$value->prenom_rec ?></td>
										<td><?php echo $value->telph_rec ?></td>
										<td><?php  echo $value->adresse_rec ?></td>
										<td><?php
											if($value->status=="0"){
												echo "En Attente";
											}else if($value->status=="1"){echo "En cours";
											}else if($value->status=="2"){echo "Expédiée";
											}else {echo "Retour";}

											?></td>

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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<form class="needs-validation" method="get" action="<?= base_url('user/delete_commande') ?>" >
					<h1>Êtes-vous sûr de Vouloir Supprimer !! </h1>
					<input type="hidden" id="id_commandeh1" name="id_commandeh1" >
				</form>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
				<button type="submit" class="btn btn-danger" id="addEmploiModelBtn" name="addEmploiModelBtn">supprimer</button>
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
		$.post("getSestionCommande", {id:clicked_id});
	}
	function reply_click2(clicked_id)
	{
		console.log(clicked_id);
		document.getElementById("id_commandeh1").value = clicked_id.toString();
		//$.post("getSestionCommande", {id:clicked_id});
	}
	$("#addEmploiModelBtn").on('click', function() {
		var x;
		x=document.getElementById("id_commandeh1").value;
		console.log(x)
		$.ajax({
			type: 'POST',
			url: "delete_commande",
			data: {id_commandeh1: x},
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
<script>
	jQuery(document).ready(function($) {
		$('#inputState').on("change", function () {
			var selectedCountry = $(this).children("option:selected").val();
			//console.log(selectedCountry);
			var res = "";
			$.ajax({

				type: 'POST',
				url: 'getAllData',
				data: {type:selectedCountry},
				dataType: 'JSON',
				async: false,
				success: function (data) {
					moduleTwo = data;
				}
			});

			if(moduleTwo.length){
				for (let key = 0; key < moduleTwo.length; key++) {
					var eta=""
					if(moduleTwo[key].status=="0"){eta="En Attente";}
					if(moduleTwo[key].status=="1"){eta=" En cours";}
					if(moduleTwo[key].status=="2"){eta="Expédiée";}
					if(moduleTwo[key].status=="3"){eta="Retour";}
					res += "</tr>";
					res += "<tr>";
					res += "<td>" + moduleTwo[key].nom_rec+" "+ + moduleTwo[key].prenom_rec+"</td>";
					res += "<td>" + moduleTwo[key].telph_rec + "</td>";
					res += "<td>" + moduleTwo[key].adresse_rec + "</td>";
					res += "<td>" + eta+ "</td>";

					res += "</tr>";
				}
			}
			else
			{
				console.log("videvide")
				res += "<tr>";
				res += "<td colspan='6' style='text-align: center;'> No data available in table</td>";
				res += "</tr>";
			}
			$("#tablou_body").html(res);
		});
	});
</script>
