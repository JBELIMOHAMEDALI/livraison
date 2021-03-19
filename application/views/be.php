

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Manage
			<small>BE</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">BE</li>
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

				<?php //var_dump($data_font); ?>
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Manage Users</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
							<div id="msg" style="text-align: center"></div>
						<div class="form-group">
							<label for="bndsort">NUM Bonde Sortie</label>
							<input type="text" class="form-control" id="bndsort" name="bndsort" placeholder="Numero bonde sorte ">
						</div>
						<div class="form-group">
							<label for="bndsort">NUM Commande</label>
							<input type="text" class="form-control" id="numcom" name="numcom" placeholder="Numero Commande ">
						</div>

						<form method="post" action="<?= base_url('be/add_retoure') ?>">
							<input type="hidden" id="id_bs" name="id_bs">
						<div id="dynamicCheck">
							<button type="button" class="btn btn-info" onclick="createNewElement();">Ajouter</button>
						</div>
<br>
						<div id="newElementId">Liste de commande de retoure :</div>
							<br>
							<div style="float:right;margin-right: 30px">
								<button type="submit" class="btn btn-success">validation </button>

							</div>
							</form>

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

<script type="text/javascript">
	$(document).ready(function() {
		$('#userTable').DataTable();

		$("#mainUserNav").addClass('active');
		$("#manageUserNav").addClass('active');
	});
</script>
	<script>
	function reply_click2() {
		document.getElementById("myCheck").click();
	}
</script>

<script type="text/JavaScript">
	function createNewElement() {
		// First create a DIV element.

		if(document.getElementById("numcom").value.length != 0 && document.getElementById("bndsort").value.length != 0 ){

		//	tab.push(document.getElementById("numcom").value.toString());
			document.getElementById('id_bs').value = document.getElementById("bndsort").value;
			document.getElementById("bndsort").disabled = true;
			$("#msg").html('');
			var txtNewInputBox = document.createElement('div');
			var numcommande="";
			numcommande=document.getElementById("numcom").value;
			// Then add the content (a new input box) of the element.
			var d = new Date();
			var n = d.getTime();
			 x=document.getElementById("bndsort").value;
			txtNewInputBox.innerHTML = "<input type='text' class='form-control' id='id_comnd' name='id_comnd"+n+"' value='"+numcommande+"' >";
			document.getElementById('numcom').value = '';
			// Finally put it where it is supposed to appear.
			document.getElementById("newElementId").appendChild(txtNewInputBox);

		}else {
			if(document.getElementById("bndsort").value.length == 0)
			{
				document.getElementById("bndsort").focus();
				var res="";
				res+="<div class='alert alert-danger' role='alert'>vous oublier de saisir une chomp</div>";
				$("#msg").html(res);
			}else
			{
				document.getElementById("numcom").focus();
				var res="";
				res+="<div class='alert alert-danger' role='alert'>vous oublier de saisir une chomp</div>";
				$("#msg").html(res);
			}
		}


	}
</script>
