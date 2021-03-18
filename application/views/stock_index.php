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
			<li class="active">Stock </li>
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
						<h3 class="box-title">Manage Stock</h3>

					</div>

					<div class="col-auto my-1" style="display: flex;justify-content: center">
						<div class="form-group col-md-4" style="display: flex;align-items: center;text-align: center;">
						<div>	<input type="date" id="birthday" name="birthday"/></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="text" placeholder="Region.." name="search" id="search">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="#" class="btn btn-default"  onClick="btn_click()"  id="btnserch"><i class="fa fa-search" aria-hidden="true"></i></a>
						</div>
						<br><br>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="userTable" class="table table-bordered table-striped">
							<thead>
							<tr>
								<th>Nom & Prenom Client</th>
								<th>Nom & Prenom Destinataire</th>
								<th>Tel Destinataire</th>
								<th>Adresse Destinataire</th>
								<th>Action</th>

							</tr>
							</thead>
							<tbody id="tablou_body">
							<?php if($data_user): ?>
								<?php
								foreach ($data_user as $value) :?>

									<tr>

										<td><?php echo $value->firstname." ".$value->lastname ?></td>
										<td><?php echo $value->nom_rec." ".$value->prenom_rec ?></td>
										<td><?php echo $value->telph_rec ?></td>
										<td><?php  echo $value->adresse_rec ?></td>
										<td>

											<a href="<?php ?>" class="btn btn-default" data-toggle="modal" data-toggle="modal" onClick="reply_click2(this.id)" data-target="#exampleModal" id="<?php echo $value->id_commande ?>"><i class="fa fa-trash" ></i></a>

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
	function btn_click()
	{
		//console.log("this is serch");
		var date =$('#birthday').val();
		var str = $("#search").val();
		console.log(date+" / "+str);
		if(date.length && !str.length)
		{

				var date =$('#birthday').val();
				var res = "";
				$.ajax({

					type: 'POST',
					url: 'getDataByDate',
					data: {date_val:date},
					dataType: 'JSON',
					async: false,
					success: function (data) {
						moduleTwo = data;
					}
				});

				if(moduleTwo.length){
					for (let key = 0; key < moduleTwo.length; key++) {
						res += "</tr>";
						res += "<tr>";
						res += "<td>" + moduleTwo[key].nom_rec + "</td>";
						res += "<td>" + moduleTwo[key].status + "</td>";
						res += "<td>" + moduleTwo[key].Region_rec + "</td>";
						res += "<td>" + moduleTwo[key].adresse_rec + "</td>";
						res += "<td>" + moduleTwo[key].telph_rec + "</td>";
						res += "<td>"+
							"<a href='http://127.0.0.1/livretion/user/index_update_commande' class='btn btn-default' id='"+moduleTwo[key].id_commande+"'  ><i class='fa fa-edit'></i></a>" +
							"<a href='#' class='btn btn-default' data-toggle='modal' data-toggle='modal' data-target='#exampleModal' id='"+moduleTwo[key].id_commande+"'><i class='fa fa-trash' ></i></a>\n"

							+"</td>";
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
		}
		if(!date.length && str.length){


			var date =$('#birthday').val();
			var res = "";
			$.ajax({

				type: 'POST',
				url: 'getDataByRegion',
				data: {re_val:str},
				dataType: 'JSON',
				async: false,
				success: function (data) {
					moduleTwo = data;
				}
			});

			if(moduleTwo.length){
				for (let key = 0; key < moduleTwo.length; key++) {
					res += "</tr>";
					res += "<tr>";
					res += "<td>" + moduleTwo[key].nom_rec + "</td>";
					res += "<td>" + moduleTwo[key].status + "</td>";
					res += "<td>" + moduleTwo[key].Region_rec + "</td>";
					res += "<td>" + moduleTwo[key].adresse_rec + "</td>";
					res += "<td>" + moduleTwo[key].telph_rec + "</td>";
					res += "<td>"+
						"<a href='http://127.0.0.1/livretion/user/index_update_commande' class='btn btn-default' id='"+moduleTwo[key].id_commande+"'  ><i class='fa fa-edit'></i></a>" +
						"<a href='#' class='btn btn-default' data-toggle='modal' data-toggle='modal' data-target='#exampleModal' id='"+moduleTwo[key].id_commande+"'><i class='fa fa-trash' ></i></a>\n"

						+"</td>";
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

		}
		if(date.length && str.length){


			var date =$('#birthday').val();
			var res = "";
			$.ajax({

				type: 'POST',
				url: 'getDataByDateRegion',
				data: {date_val:date,re_val:str},
				dataType: 'JSON',
				async: false,
				success: function (data) {
					moduleTwo = data;
				}
			});

			if(moduleTwo.length){
				for (let key = 0; key < moduleTwo.length; key++) {
					res += "</tr>";
					res += "<tr>";
					res += "<td>" + moduleTwo[key].nom_rec + "</td>";
					res += "<td>" + moduleTwo[key].status + "</td>";
					res += "<td>" + moduleTwo[key].Region_rec + "</td>";
					res += "<td>" + moduleTwo[key].adresse_rec + "</td>";
					res += "<td>" + moduleTwo[key].telph_rec + "</td>";
					res += "<td>"+
						"<a href='http://127.0.0.1/livretion/user/index_update_commande' class='btn btn-default' id='"+moduleTwo[key].id_commande+"'  ><i class='fa fa-edit'></i></a>" +
						"<a href='#' class='btn btn-default' data-toggle='modal' data-toggle='modal' data-target='#exampleModal' id='"+moduleTwo[key].id_commande+"'><i class='fa fa-trash' ></i></a>\n"

						+"</td>";
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

		}

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
	});

</script>
<script>
	jQuery(document).ready(function($) {
		$('#birthday').on("change", function () {
			var date =$('#birthday').val();
			var res = "";
			$.ajax({

				type: 'POST',
				url: 'getDataByDate',
				data: {date_val:date},
				dataType: 'JSON',
				async: false,
				success: function (data) {
					moduleTwo = data;
				}
			});

			if(moduleTwo.length){
				for (let key = 0; key < moduleTwo.length; key++) {
					res += "</tr>";
					res += "<tr>";
					res += "<td>" + moduleTwo[key].nom_rec + "</td>";
					res += "<td>" + moduleTwo[key].status + "</td>";
					res += "<td>" + moduleTwo[key].Region_rec + "</td>";
					res += "<td>" + moduleTwo[key].adresse_rec + "</td>";
					res += "<td>" + moduleTwo[key].telph_rec + "</td>";
					res += "<td>"+
						"<a href='http://127.0.0.1/livretion/user/index_update_commande' class='btn btn-default' id='"+moduleTwo[key].id_commande+"'  ><i class='fa fa-edit'></i></a>" +
						"<a href='#' class='btn btn-default' data-toggle='modal' data-toggle='modal' data-target='#exampleModal' id='"+moduleTwo[key].id_commande+"'><i class='fa fa-trash' ></i></a>\n"

						+"</td>";
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

