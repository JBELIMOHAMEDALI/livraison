
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>

		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">BS </li>
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
						<h3 class="box-title">Manage BS</h3>

					</div>
					<form method="post" action="<?= base_url('bs/add_bs') ?>">
					<div class="col-auto my-1" style="display: flex;justify-content: center">
						<div class="form-group col-md-9" style="display: flex;align-items: center;text-align: center;">
							<?php //print_r($data_bs) ?>

							<label for="inputState">Livreur </label>
							&nbsp;&nbsp;&nbsp;&nbsp;
							<select id="inputState" name="id_livreure" class="form-control">
								<option selected>Choose un livreur ...</option>
								<?php
								foreach ($data_user as $value) : ?>
									<option value="<?php echo $value->id_livreur?>"><?php echo $value->nom." ".$value->prenom?></option>
								<?php endforeach; ?>

							</select>
							<?php echo "<br>"?>
							<?php echo form_error('id_livreure',' <div class="alert alert-danger" role="alert">','</div>') ?>

							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<div>	<input type="date" id="birthday" name="date"/></div>&nbsp;&nbsp;&nbsp;	<?php echo "<br>"?>
							<?php echo form_error('date',' <div class="alert alert-danger" role="alert">','</div>') ?>

						</div>


						<br><br>

					</form>
					<button type="submit" class="btn btn-default btn-sm">
						<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
					</button>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="userTable" class="table table-bordered table-striped">
							<thead>
							<tr>
								<th style="text-align: center;">Num Bonde Sortie</th>
								<th style="text-align: center; ">Livreur</th>
								<th style="text-align: center;">Tel Livreur</th>
								<th style="text-align: center; ">Date</th>
								<th style="text-align: center; ">Action</th>

							</tr>
							</thead>
							<tbody id="tablou_body">
							<?php if($data_bs): ?>
								<?php
								foreach ($data_bs as $value) :?>

									<tr>
										<td style="text-align: center;"><?php echo $value->num_bs ?></td>
										<td style="text-align: center; "><?php echo $value->nom." ".$value->prenom?></td>
										<td style="text-align: center;"><?php echo $value->tel ?></td>

										<td style="text-align: center; "><?php  echo $value->date ?></td>
										<td style="text-align: center; ">
											<a href="<?php ?>" class="btn btn-default" data-toggle="modal" data-toggle="modal" onClick="reply_click2(this.id)" data-target="#exampleModal" id="<?php echo $value->num_bs ?>"><i class="fa fa-info-circle fa-lg" aria-hidden="true"></i></a>
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

</div>

	</section>
	<!-- /.content -->
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">BS</h5>

				<button type="button"  class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div id="div1">
				<div id="div_Info">
					<br /><br />
				<h4 style="text-align: center" id="titre"></h4><br /><br /><br />
					<div  style="display: flex;">
				<h4 style=" position: absolute;left: 50px;" id="nomLIv"></h4>
				<h4 style=" position: absolute;right: 50px;" id="date"></h4><br /><br /><br />
					</div>


				</div>
				<table class="table table-bordered">
					<thead>
					<tr>
						<th scope="col">Num Commande</th>
						<th scope="col">Nom & prnom Recever</th>
						<th scope="col">Tel Recvever</th>
						<th scope="col">Adrese</th>
					</tr>
					</thead>
					<tbody id="tabDetiles">
					</tbody>
				</table>
				</div>



			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal"> Fermer</button>
				<button type="button" class="btn btn-warning" id="addEmploiModelBtn" onclick="printContent('div1')" name="addEmploiModelBtn">
					<span class="glyphicon glyphicon-print" aria-hidden="true"></span> Impression</button>
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

	function reply_click2(clicked_id)
	{
		var id_bs=clicked_id;
	//	console.log("this is id"+id);
		$("#div_Info").html(info);
		if(id_bs.length ) {
			$.ajax({

				type: 'POST',
				url: 'bs/getInfoBs',
				data: {id: id_bs},
				dataType: 'JSON',
				async: false,
				success: function (data) {
					moduleTwo = data;
					console.log(moduleTwo)
				}
			});
			var info="";
			//titre/nomLIv/date
			var titre="";
			var livNom="";
			var livprenom="";
			var dateLiv="";
			for (let key = 0; key < moduleTwo.length; key++) {
				titre=moduleTwo[key].id_bs;
				livNom=moduleTwo[key].nom;
				livprenom=moduleTwo[key].prenom;
				dateLiv=moduleTwo[key].date;
			}

			$("#titre").html("Num BS : "+titre);
			$("#nomLIv").html("Livreur : "+livNom+" "+livprenom);
			$("#date").html("Date  : "+dateLiv);
		}

		if(id_bs.length )
		{
			$.ajax({

				type: 'POST',
				url: 'bs/getDetaileBs',
				data: {id:id_bs},
				dataType: 'JSON',
				async: false,
				success: function (data) {
					moduleTwo = data;
					console.log(moduleTwo)
				}
			});
			var res="";
			if(moduleTwo.length){
				for (let key = 0; key < moduleTwo.length; key++) {
					res += "<tr>";
					res += "<td>" + moduleTwo[key].barcode + "</td>";
					res += "<td>" + moduleTwo[key].nom_rec+" "+moduleTwo[key].prenom_rec + "</td>";
					res += "<td>" + moduleTwo[key].telph_rec + "</td>";
					res += "<td>" + moduleTwo[key].adresse_rec + "</td>";
					res += "</tr>";
				}
			}
			else
			{
				//console.log("videvide")
				res += "<tr>";
				res += "<td colspan='6' style='text-align: center;'> No data available in table</td>";
				res += "</tr>";
			}
			$("#tabDetiles").html(res);
		}
		//document.getElementById("id_commandeh1").value = clicked_id.toString();
		//$.post("getSestionCommande", {id:clicked_id});
	}


</script>

<script>
	function printContent(el){
		var restorepage = document.body.innerHTML;
		var printcontent = document.getElementById(el).innerHTML;
		document.body.innerHTML = printcontent;
		window.print();
		document.body.innerHTML = restorepage;
	}
</script>

<script>
	$(document).ready(function() {
		$('.aaf').on("click",function(){
		//	console.log("tag a ");
			//post code
			var date=document.getElementById("birthday").value;
			var id_liv=document.getElementById("inputState").value;
			//console.log("date : "+date+" / id_liv : "+id_liv);
			if(date.length && id_liv.length ) {
				$.ajax({

					type: 'POST',
					url: 'bs/add_bs',
					data: {id_livreure: id_liv,date:date},
					dataType: 'JSON',
					async: false,
					success: function (data) {
						//moduleTwo = data;
						$.post("index_affecteBs",);

						console.log("data")
					}
				});
			}
		})
	});

</script>


