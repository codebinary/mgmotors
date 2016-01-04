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
				          <a href="javascript:;" class="panel-collapse"><i class="icon-chevron-down"></i></a>
				        </div>
				      </div>
				      <div class="panel-body collapse in" id="loadGrid">
				      	<div id="loadData"></div>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
			<script type="text/javascript">
				$(function(){
					$('#loadGrid').gridRad1Us({
						gridLoadId: '#loadData',
						gridDataType: 'json',
						gridUrl: "noticias_controller/conten_list",
						gridClsPagtn: '.dataTables_paginate > .pagination > li',
						/*--------------------*/
						btnMdlEvnAdd: '#btnAddNoticia',
						mdlAddFrmTitle: 'Agregar Noticia',
						mdlAddFrmId: '#mdlAddNoticia',
						mdlAddFrmFrom: "noticias_controller/fromAdd",
						mdlAddSaveFrom: "noticias_controller/fromAddSave",
						mdlAddFrmPvLoadCallBack: function(){
							$("textarea#txtDescripcion").redactor({
								maxHeight: 250,
								imageUpload: 'noticias_controller/imageUpload'
							});
						},
						mdlAddFrmLoadCallBack: function(){
							$("#datepickerAdd").datepicker();
						},
						/*--------------------*/
						btnMdlEvnEdt: '#btnEditNoticia',
						mdlEdtFrmTitle: 'Modificar Noticia',
						mdlEdtFrmId: '#mdlEditNoticia',
						mdlEdtFrmFrom: "noticias_controller/frmEdit",
						mdlEdtSaveFrom: "noticias_controller/fromEditSave",
						mdlEdtFrmPvLoadCallBack: function(){
							$("textarea#txtEdtrDescrip").redactor({
								maxHeight: 250,
								imageUpload: 'noticias_controller/imageUpload'
							});
						},
						mdlEdtFrmLoadCallBack: function(){
							$("#datepickerEdit").datepicker();
						},
						/*-------------------*/
						btnMdlEvnDlt: '#btnMdlEvnDlt',
						mdlDltSaveFrom: 'noticias_controller/fromDltSave',
						/*-------------------*/
						btnMdlEnbNtp: '#btnEstblPrnt',
						mdlEnbSaveFrom: 'noticias_controller/fromNtPSave',
						iptSearchGrid: 'input#iptSearch'
					});
				});
			</script>
<?php
		break;
		case 2:
?>
		<form action="" id="addFrm" class="form-horizontal row-border">
			<div class="form-group">
				<label class="col-sm-3 control-label">Titulo</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="txtTitulo">
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-12">
					<textarea cols="80" id="txtDescripcion" name="txtDescripcion" rows="10"></textarea>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label">Fecha</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="txtFecha" id="datepickerAdd">
				</div>
			</div>
		</form>
<?php
		break;
		case 3:
?>
		<form action="" id="editFrm" class="form-horizontal row-border">
			<div class="form-group">
				<label class="col-sm-3 control-label">Titulo</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="txtTitulo" value="<?=$dataFrm[0]['noticias_title'];?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-12">
					<textarea cols="80" id="txtEdtrDescrip" name="txtEdtrDescrip" rows="10">
						<?=$dataFrm[0]['noticias_descrip'];?>
					</textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Fecha</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="txtFecha" id="datepickerEdit" value="<?=$dataFrm[0]['noticias_fecha'];?>">
				</div>
			</div>

			<input type="hidden" name="txtId" value="<?=$idRow;?>">
		</form>
<?php
		break;
	}
?>

