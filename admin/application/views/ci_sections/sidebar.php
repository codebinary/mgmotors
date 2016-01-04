<!-- BEGIN SIDEBAR -->
<nav id="page-leftbar" role="navigation">
  <!-- BEGIN SIDEBAR MENU -->
  <ul class="acc-menu" id="sidebar">
    <li class="divider"></li>
    <?php if($this->session->userdata('perfil') == 'admin'): ?>
    <li><a href="<?= base_url(); ?>noticias_controller"><i class="icon-home"></i><span>Noticias</span></a></li>
    <!-- <li><a href="base_url()/users_controller"><i class="icon-home"></i><span>Usuarios</span></a></li> -->
    <?php endif; ?>
    <li><a href="<?= base_url(); ?>cotizacion_controller"><i class="icon-home"></i><span>Cotización</span></a></li>
    <li><a href="<?= base_url(); ?>newsletter_controller"><i class="icon-home"></i><span>Newsletter</span></a></li>
  </ul>
<!-- END SIDEBAR MENU -->
</nav>