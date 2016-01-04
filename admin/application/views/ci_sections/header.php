<header class="navbar navbar-inverse navbar-fixed-top" role="banner">
	<a id="leftmenu-trigger" class="pull-left" data-toggle="tooltip" data-placement="bottom" title="Toggle Left Sidebar"></a>
	<div class="navbar-header pull-left">
		<a class="navbar-brand" href="index.php">Avant</a>
	</div>
	<ul class="nav navbar-nav pull-right toolbar">
		<li class="dropdown">
			<a href="#" class="dropdown-toggle username" data-toggle="dropdown"><span class="hidden-xs"><?= $this->session->userdata('perfil'); ?> <i class="icon-caret-down icon-scale"></i></span><img src="<?= base_url(); ?>assets/demo/avatar/dangerfield.png" alt="Dangerfield"></a>
			<ul class="dropdown-menu userinfo arrow">
				<li class="userlinks">
					<ul class="dropdown-menu">
						<li class="divider"></li>
						<li><?=anchor(base_url().'users_controller/logout_ci', 'Cerrar sesión')?></li>
					</ul>
				</li>
			</ul>
		</li>
	</ul>
</header>