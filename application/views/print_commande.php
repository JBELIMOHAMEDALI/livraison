

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
						<div id="div1">
						<div class="container" style="position: relative; ">
							<div style="font-weight: bold;font-size: 25px;">AMAL EXPRESS</div>
							<div class="firstLine" style=" position: relative;; display: flex;">
								<div class="first_div_gouch" style="position: relative;width: 50%; display: inline-block;">

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
										$qte=$value->qte;
										$nom_article=$value->nom_article;
										$prixOne=$value->prix_article;

									endforeach;?>
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
								<div class="seconde_droit" style=" position: relative;width: 50%;display:inline-blocks;">

<br><br>
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
							</div>
							<div class="bottom_div" style=" width: 100%;height: 300px;position: relative;">
								<br>
								<hr style="border-top: 1px solid black"><br>
								<table border="1" style="border: 1px solid black;width: 100%;border-collapse: collapse;">
									<thead>
									<th style="border: 1px solid black;text-align: center ">Qte</th>
									<th style="border: 1px solid black;text-align: center">Description</th>
									<th style="border: 1px solid black;text-align: center">Prix Unter HT</th>
									<th style="border: 1px solid black;text-align: center">TVA 7%</th>
									<th style="border: 1px solid black;text-align: center" colspan="2">Totale</th>
									</thead>
									<tbody>
									<tr>
										<td style="text-align: center"><?php echo $qte;?></td>
										<td style="text-align: center"><?php echo $nom_article;?></td>
										<td style="text-align: center"><?php echo $prixOne;?></td>
										<td style="text-align: center">0.7</td>
										<td style="text-align: center"><?php
											$somme=$prixOne*$qte;
											$TVa=$somme*0.07;
											$sommeTva=$somme+$TVa;
											echo $somme ;

											?></td>

									</tr>
									</tbody>
								</table>
								<div style="text-align: left">
									<br>
									<br>
								<hr style="border-top: 1px solid black; margin: 0px;">

								</div>

								<div style="float:right;width: 30%">
									<table  style="border: 1px solid black;width: 100%;border-collapse: collapse;">
										<thead>
										<th style="border: 1px solid black;text-align: center ">Prix Hors tax : </th>
										<th style="border: 1px solid black;text-align: center"><?php echo "TND" .$somme;?></th>
										</thead>
										<tbody>
										<tr>

											<td rowspan="2" style="text-align: center ">TVA</td>
										</tr>
										<tr>
										<td>TND.<?php echo $TVa ."<br />"?></td>

										</tr>
										<tr style="border: 1px solid black;text-align: center ">
											<td style="text-align: center " >Total TTC</td>
											<td><?php echo $sommeTva?></td>
										</tr>
										</tbody>
									</table>
								</div>

							</div>
						</div>
						</div>
						<div style="float:right;margin-right: 30px">
							<button type="button" class="btn btn-warning" id="addEmploiModelBtn" onclick="printContent('div1')" name="addEmploiModelBtn">
								<span class="glyphicon glyphicon-print" aria-hidden="true"></span> Impression</button>


						</div>
						</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
				</div>
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
<script>
	function printContent(el){
		var restorepage = document.body.innerHTML;
		var printcontent = document.getElementById(el).innerHTML;
		document.body.innerHTML = printcontent;
		window.print();
		document.body.innerHTML = restorepage;
	}
</script>

