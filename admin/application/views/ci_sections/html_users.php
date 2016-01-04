<?php 
	switch($page){
		case 1:
?>
	    <div class="panel-body">
	      <h4 class="text-center" style="margin-bottom: 25px;">Iniciar sesión</h4>
	      <form action="#" class="form-horizontal" style="margin-bottom: 0px !important;" />
	        <div class="form-group">
	          <div class="col-sm-12">
	            <div class="input-group">
	              <span class="input-group-addon"><i class="icon-user"></i></span>
	              <input type="text" class="form-control" id="username" name="username" placeholder="Usuario" />
	            </div>
	          </div>
	        </div>
	        <div class="form-group">
	          <div class="col-sm-12">
	            <div class="input-group">
	              <span class="input-group-addon"><i class="icon-lock"></i></span>
	              <input type="password" class="form-control" id="password" name="clave" placeholder="Clave" />
	            </div>
	          </div>
	        </div>
	        <input type="hidden" name="token" />
	      </form>
	    </div>
	    <div class="panel-footer">
	      <div class="pull-right">
	        <a href="#" class="btn btn-default frmRst">Reset</a>
	        <a href="#" class="btn btn-primary frmLog">Acceder</a>
	      </div>
	    </div>
<?php
		break;
		case 2:
?>

<?php
		break;
		case 3:
?>

<?php
		break;
	}
?>

