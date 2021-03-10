<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
		<?php if( $_SESSION["type"]=="0" ): ?>
			<ul class="sidebar-menu" data-widget="tree">

				<li id="dashboardMainMenu"><a href="<?php echo base_url('user/index_us') ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
				<li><a href="<?php echo base_url('user/index_usALL') ?>"><i class="fa fa-history" ></i> <span>Historique</span></a></li>

				</li>
					<li class="treeview" id="mainGroupNav">
						<a href="#">
							<i class="fa fa-files-o"></i>
							<span>commande</span>
							<span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
						</a>
						<ul class="treeview-menu">

								<li id="addGroupNav"><a href="<?php echo base_url('user/index_addus') ?>"><i class="fa fa-circle-o"></i> Ajouter Commande</a></li>

								<li id="manageGroupNav"><a href="<?php echo base_url('user/index_us') ?>"><i class="fa fa-circle-o"></i> Manage commande</a></li>
						</ul>
					</li>
				<!-- user permission info -->
				<li><a href="<?php echo base_url('auth/logout') ?>"><i class="glyphicon glyphicon-log-out"></i> <span>Déconnecter</span></a></li>
			</ul>
		<?php elseif($_SESSION["type"]=="1" ): ?>
			<ul class="sidebar-menu" data-widget="tree">
				<li class="treeview" id="mainProductNav">
					<a href="#">
						<i class="fa fa-history" aria-hidden="true"></i>
						<span>Bonde Entre </span>
					</a>
				</li>
				<li class="treeview" id="mainProductNav">
					<a href="#">
						<i class="fa fa-history" aria-hidden="true"></i>
						<span>Stocke</span>
					</a>
				</li>
				<li class="treeview" id="mainProductNav">
					<a href="#">
						<i class="fa fa-history" aria-hidden="true"></i>
						<span>List BS</span>
					</a>
				</li>
				<li class="treeview" id="mainProductNav">
					<a href="#">
						<i class="fa fa-history" aria-hidden="true"></i>
						<span>Bonde Entre</span>
					</a>
				</li>


				<li class="treeview" id="mainGroupNav">
					<a href="#">
						<i class="fa fa-truck" aria-hidden="true"></i>
						<span>Livreure</span>
						<span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
					</a>
					<ul class="treeview-menu">

						<li id="addGroupNav"><a href="<?php echo base_url('Livreur/indexaddLivreur') ?>"><i class="fa fa-circle-o"></i> Ajouter Livreure</a></li>

						<li id="manageGroupNav"><a href="<?php echo base_url('Livreur/index_home') ?>"><i class="fa fa-circle-o"></i> Manage Livreure</a></li>
					</ul>
				</li>








				<li><a href="<?php echo base_url('auth/logout') ?>"><i class="glyphicon glyphicon-log-out"></i> <span>Déconnecter</span></a></li>
			</ul>
		<?php  endif; ?>
      <!-- sidebar menu: : style can be found in sidebar.less -->
    </section>
    <!-- /.sidebar -->
  </aside>
