

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header)
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>  khmil lou5rin -->

    <!-- Main content -->
	  <?php if ($type == "admin") : ?>
    <section class="content">
      <!-- Small boxes (Stat box) -->
     <!-- c bon behi kh nemchi mela bhi thnx  -->
     <div class="row">
      <div class="col-lg-4 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
				  <h3><?php echo $total_products ?></h3>
                <p>Produits totaux</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">plus d'information <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-xs-6">
					<!-- small box ma tnsech ctr s ham moch 9ad 9ad ena nra fihom 9ad 9ad o fibenli na7ki aala kuober el page  moch fi zize mteaa les cared inti t7eb akber ? ey bech yjou yaabou el page -->
					<div class="small-box bg-green">
						<div class="inner">
							<h3><?php echo $total_products ?></h3>
							<p>Total des groupes</p>
						</div>
						<div class="icon">
							<i class="ion ion-stats-bars"></i>
						</div>
						<a href="#" class="small-box-footer">plus d'information <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
        <div class="col-lg-4 col-xs-10">
            <!-- small box -->
               <div class="small-box bg-yellow">
              <div class="inner">
                <h3></h3>
                <p>Nombre total d'utilisateurs</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-people"></i>
              </div>
              <a href="#" class="small-box-footer">plus d'information <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>


      </div>


      <!--  -->




      <!--  -->
    </section>
	  <?php elseif($type == "user"): ?>
	  <div>
		  <section class="content">
			  <h1>user</h1>
			  <!--  -->
		  </section>

	  </div>
	  <?php  endif; ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script type="text/javascript">
    $(document).ready(function() {
      $("#dashboardMainMenu").addClass('active');
    }); 
  </script>
