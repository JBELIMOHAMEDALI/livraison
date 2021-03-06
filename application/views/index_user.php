

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>

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

				<br /> <br />
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Manage Users</h3>

					</div>

					<div class="col-auto my-1" style="display: flex;justify-content: center">
							<div class="form-group col-md-4" style="text-align: center">
								<select id="inputState" class="form-control">
									<option selected>Choose...</option>
									<option>...</option>
								</select>
							</div>
						<br><br>
						<!--<div class="col-auto my-1">
							<label class="mr-sm-2" for="inlineFormCustomSelect">Preference</label>
							<select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
								<option selected>Choose...</option>
								<option value="1">One</option>
								<option value="2">Two</option>
								<option value="3">Three</option>
							</select>							<a href="<?php echo base_url('livreur/index') ?>" class="btn btn-primary">Add User</a>

						</div>-->

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
													<a href="<?php  ?>" class="btn btn-default" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-edit"></i></a>
													<a href="<?php ?>" class="btn btn-default" data-toggle="modal" data-target="#exampleModalLong"><i class="fa fa-trash" ></i></a>
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
<!-- add -->

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
				1
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
<!-- upadate -->

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				2
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
<!-- delete -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				delate part 
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
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
