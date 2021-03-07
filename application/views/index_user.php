

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
		<div class="row">
			<div class="col-md-12 col-xs-12">

				<br /> <br />
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Manage Commande</h3>

					</div>

					<div class="col-auto my-1" style="display: flex;justify-content: center">
							<div class="form-group col-md-4" style="text-align: center">
								<select id="inputState" class="form-control">
									<option selected>Choose...</option>
									<option>...</option>
								</select>
							</div>
						<br><br>
					</div>
					<div style="display: flex;justify-content:flex-end; margin-right:50px;margin-bottom: 20px ">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
							Launch demo modal
						</button>
					</div>
					<!-- /.box-header -->
					<div class="box-body">

						<table id="userTable" class="table table-bordered table-striped">
							<thead>
							<tr>
								<th>Username</th>
								<th>Email</th>
								<th>Name</th>
								<th>Phone</th>
								<th>Group</th>

								<th>Action</th>

							</tr>
							</thead>
							<tbody>
							<?php if($data_user): ?>
								<?php
								foreach ($data_user as $value) :?>

									<tr>
										<td><?php echo $value->nom_rec?></td>
										<td><?php echo $value->status ?></td>
										<td><?php echo $value->Region_rec ?></td>
										<td><?php  echo $value->adresse_rec ?></td>
										<td><?php echo $value->telph_rec ?></td>
											<td>
													<a href="<?php  ?>" class="btn btn-default" data-toggle="modal" data-target="#exampleModalCenter" id="<?php echo $value->id_commande   ?>" onClick="reply_click(this.id)" ><i class="fa fa-edit"></i></a>
													<a href="<?php ?>" class="btn btn-default" data-toggle="modal" data-target="#exampleModalLong" id="<?php echo $value->id_commande   ?>" onClick="reply_click2(this.id)"><i class="fa fa-trash" ></i></a>
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
		alert(clicked_id);
	}
	function reply_click2(clicked_id)
	{
		alert(clicked_id);
	}
	$(document).ready(function() {

		$(function () {
			$('.textBoxEmployeeNumber input').val("fgg");
		});
	})
</script >

