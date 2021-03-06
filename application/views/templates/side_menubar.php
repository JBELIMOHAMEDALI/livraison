<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
		<?php if( $_SESSION["type"]=="0" ): ?>
			<ul class="sidebar-menu" data-widget="tree">

				<li id="dashboardMainMenu"><a href="<?php echo base_url('user/index_us') ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
				<li class="treeview" id="mainProductNav">
					<a href="#">
						<i class="fa fa-history" aria-hidden="true"></i>
						<span>Historique</span>
					</a>
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
				<li><a href="<?php echo base_url('Livreur/index_home') ?>"><i class="fa fa-truck" aria-hidden="true"></i><span>Livreure</span></a></li>
				<li><a href="<?php echo base_url('auth/logout') ?>"><i class="glyphicon glyphicon-log-out"></i> <span>Logout</span></a></li>
			</ul>
		<?php  endif; ?>
      <!-- sidebar menu: : style can be found in sidebar.less -->
    </section>
    <!-- /.sidebar -->
  </aside>
