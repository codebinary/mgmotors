<?php 
	switch($page){
		case 1:
?>
			<div class="container">
				<div class="row">
				  <div class="col-md-12">
				    <div class="panel panel-sky">
				      <div class="panel-heading">
				        <h4><?php echo $title_proyect; ?></h4>
				        <div class="options">
								  <div class="btn-toolbar">
								    <div class="btn-group hidden-xs">
								    	<a href='#' data-toggle='dropdown'>
								        <i class="icon-cloud-download"></i>
								        <span class="hidden-sm">Exportar a</span>
								        <span class="caret"></span>
								      </a>
								      <ul class="dropdown-menu">
								      	<?php $url = isset($_GET['i']) ||  isset($_GET['f']) ? base_url().'newsletter_controller/exportExcel/'.$_GET['i'].'/'.$_GET['f'] : base_url().'newsletter_controller/exportExcel/'; ?>
								        <li><a href="<?= $url ;?>" target="_blank">Excel File (*.xlsx)</a></li>
								      </ul>
								    </div>
								  </div>
								</div>
				      </div>
				      <div class="panel-body collapse in" id="loadGrid">
								<div class="row form-inline">
			            <form action="<?= base_url(); ?>newsletter_controller/page" method="GET">
				            <div class="form-group">
			                De <input type="text" required="" class="form-control datepicker" placeholder="Fecha 1" name="i">
				            </div>
				            <div class="form-group">
			                a <input type="text" required="" class="form-control datepicker" placeholder="Fecha 2" name="f">                
				            </div>
				            <div class="form-group">
											<input class="btn-primary btn" type="submit" value="Buscar">
				            </div>
			            </form>
						    </div>
								<hr style="margin-top:20px; margin-bottom:15px;">
								<div class="row">
									<table id="tblCotizaciones" class="table table-striped">
										<thead>
											<tr>
												<th class="center">No.</th>
												<th class="center">Nombres y appellidos</th>
												<th class="center">Email</th>
												<th class="center">Fecha</th>
											</tr>
										</thead>
										<tbody>
										<?php foreach($newsletter['newsletters'] as $newsletter_reg):
														// echo $cotizaciones->id_cotizacion;
														echo '<tr class="selectable" idRow="'.$newsletter_reg->news_id.'">
																		<td class="center">'.$newsletter_reg->news_id.'</td>
																		<td class="center">'.$newsletter_reg->nombres.'</td>
																		<td class="center">'.$newsletter_reg->email.'</td>
																		<td class="center">'.$newsletter_reg->fecha.'</td>
																	</tr>';
													endforeach; ?>
										</tbody>
									</table>
								</div>
								<div class="row">
							    	<div class="col-sm-6"></div>
										<div class="col-sm-6">
											<div class="dataTables_paginate paging_bootstrap">
												<?= $newsletter['pagination']; ?>
											</div>
										</div>
								</div>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
			<script type="text/javascript">
				$(function(){
			    $(".datepicker").datepicker({
		    		changeMonth: true,
			      numberOfMonths: 3,
			      minDate: new Date(2014, 2, 31),
			      maxDate: "0",
			      dateFormat: 'yy-mm-dd'
			    });
				});
			</script>
<?php
		break;
	}
?>
