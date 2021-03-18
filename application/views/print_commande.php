

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>

		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active"> Impression Commande </li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- Small boxes (Stat box) -->
		<br><br>

		<div class="row">
			<div class="col-md-12 col-xs-12">

				<br /> <br />
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Impression Commande</h3>

					</div>


					<!-- /.box-header -->
					<div class="box-body" >
						<br>
						<div>
						<div style="font-weight: bold;font-size: 25px;">AMAL EXPRESS</div>
						<br><br>
						<?php // print_r($data_commande)."<br />" ?>
						<?php foreach ($data_commande as $value) :
						$nom = $value->firstname." ".$value->lastname;
						$nom_rec = $value->nom_rec." ".$value->prenom_rec;
						$adres= $value->adresse;
						$adres_rec= $value->adresse_rec;
						$phone= $value->phone;
						$phone_rec= $value->telph_rec;
						$numFact= $value->id_commande;
						$date=$value->date;
						endforeach;?>
						<br>
						<div style=" display: flex;">
						<div class="col" style="flex: 1; padding: 1em;font-size: 15px;font-weight: bold">
							<p> Client :<br></p>
							<div style="margin-left: 30px">
								<table>
									<tr>
										<td><?php echo "Nom et Prenom :";?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
										<td><?php echo $nom;?></td>
									</tr>
									<tr>
										<td><?php echo "Adresse : "; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
										<td><?php echo $adres;?></td>
									</tr>
									<tr>
										<td><?php echo "Tel : (+216) ";?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
										<td><?php echo $phone;?></td>
									</tr>

								</table>
								<br>
								<br>
								<table>
									<tr>
										<td>Facture N : </td>
										<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $numFact?></td>
									</tr>
								</table>
									<hr style="border-top: 1px solid black">
								<table>
									<tr>
										<td>Date :</td>
										<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $date?></td>
									</tr>

								</table>



								<hr style="border-top: 1px solid black">

								Matrecule Fiscale : 0123456+789
							</div>



						</div>
						<div class="col" style="flex: 1; padding: 1em;font-size: 15px;font-weight: bold"">

							<p> Client Destinataire :<br></p>
							<div style="margin-left: 30px">
								<table>
									<tr>
										<td><?php echo "Nom et Prenom :";?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
										<td><?php echo $nom_rec;?></td>
									</tr>
									<tr>
										<td><?php echo "Adresse : "; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
										<td><?php echo $adres_rec;?></td>
									</tr>
									<tr>
										<td><?php echo "Tel : (+216) ";?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
										<td><?php echo $phone_rec;?></td>
									</tr>

								</table>
								<br>
								<br>
								Commande  : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "--------------"?>

								<hr style="border-top: 1px solid black">
								<br>
								Mode Payemont : jsjjsjsjsjjsjsjsj
							</div>
						</div>

						<div>
							<h1>jfghhfjfgjfhghfhj</h1>
						</div>
						</div>
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

<script type="text/javascript">
	$(document).ready(function() {
		$('#userTable').DataTable();
		$("#mainUserNav").addClass('active');
		$("#manageUserNav").addClass('active');

	});
</script>


