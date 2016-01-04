(function(){

	var privateMethods = {
		styleTable : function(enable, sTable, table, colorA, colorB){
			if(enable){
				// $(table+' tr:even').addClass("alt-row");
				// $(table+' tr:odd').removeClass("alt-row");
				$(sTable + ' tr').mouseover(function() {
					if(!$(table).data('loadEfect')){
						$('td', this).stop(true, true).animate({backgroundColor: colorA}, 1000);
					}
				}).mouseout(function() {
					if(!$(table).data('loadEfect')){
						if($(sTable + ' tr:even').is(this)){
							$('td', this).stop(true, true).animate({ backgroundColor: "#f5f5f5" }, 1000);	
						} else {
							$('td', this).stop(true, true).animate({backgroundColor: colorB}, 1000);
						}
					}
				});
			}
		},
		loadFuction : function(enable, loadJs){
			if(enable){
				if($.isFunction(loadJs)){
					loadJs.call(this);
				}
			}
		}
	}

	function gridRad1Us(container, options){
		var prev = this;
		prev.container = container;
		prev.options = options;
		prev.gridLoad();
	};

	gridRad1Us.prototype.gridLoad = function(){
		var prev = this;
		$.param.fragment.ajaxCrawlable(true);
		$(window).bind('hashchange', function(e) {
			var ajaxT  = $(prev.container).data('loadInipagHash') == true ? true : false,
					column = $.param.fragment(),
					search = $(prev.container).data('saveSearchData');
			// --> 	
			if(search != ''){
				prev.gridLoadData(ajaxT, column, search);
			} else {
				prev.gridLoadData(ajaxT, column);
			}
		});
		if(!$(prev.container).data('loadInipagHash')){
			$(window).trigger('hashchange');
			$(prev.container).data('loadInipagHash', true);
		}
	}

	gridRad1Us.prototype.gridLoadData = function(ajaxT, column, search){
		var prev = this,
				vAjaxT = typeof ajaxT === 'undefined' || ajaxT == true ? true : false,
				column = typeof column === 'undefined' || column == '' ? 0 : column,
				search = typeof search === 'undefined' || search == '' ? '' : search;

		prev.gridAjax(vAjaxT, column, search);
	}

	gridRad1Us.prototype.gridAjax = function(ajaxT, column, search){
		var prev = this,
				viewPagination = false,
				pageUrl = prev.options.gridUrl+'/'+column+'/'+search;
		
		$.ajaxSetup({cache: false});
		$.ajax({
			type: "GET",
			url: pageUrl,
			dataType: prev.options.gridDataType,
			success: function(html){
				prev.AjaxSuccess(html, ajaxT);
				viewPagination = true;
			},
			error: function(xhr, status, error){
				// console.log("Error! " + xhr.status);
			},
			complete: function(){
				if(!viewPagination){
					var pstActive = $(prev.options.gridClsPagtn+'.active').index() - 2;
					$(prev.options.gridClsPagtn+':eq('+pstActive+') a').trigger('click');
				}
			}
		});
	}

	gridRad1Us.prototype.AjaxSuccess = function(returHtml, ajaxT){
		var prev = this;

		if(returHtml.nullReg == false){
			if(ajaxT != true){
				if(prev.options.dataType == 'html'){
					$(prev.container).hide().html(returHtml).fadeIn(prev.options.gridTransitionTime);
				} else {
					var jHtml = returHtml.header+returHtml.grid+returHtml.brkBF+returHtml.footer+returHtml.brkF;
					$(prev.container).hide().html(jHtml).fadeIn(prev.options.gridTransitionTime);
				}
			} else {
				$(prev.container).find('#loaderTable').hide().html(returHtml.grid).fadeIn(prev.options.gridTransitionTime);
				$(prev.container).find('.dataTables_paginate').hide().html(returHtml.footer).fadeIn(prev.options.gridTransitionTime);
			}
			prev.getPositionModal();
			prev.addLoadModal();
			prev.editLoadModal();
			prev.deltLoadModal();
			prev.enableNtPrincipal();
			prev.paginationTable();
			prev.searchNoticia();
			/*----------------------*/
			$(prev.container).data('saveLastSearchData', $(prev.container).data('saveSearchData'));
		} else {
			alertify.error("No se encontraron registros!");
			var lastData = typeof $(prev.container).data('saveLastSearchData') === "undefined" ? '': $(prev.container).data('saveLastSearchData');
			$(prev.container).data('saveSearchData', lastData);
		}
	}

	gridRad1Us.prototype.getPositionModal = function(){
		var prev = this,
		fntDisableEnableBtn = function(status){
			/* ------------------------------- */
			if(prev.options.btnMdlEvnEdt != null){
				if(status)
					if($(prev.options.btnMdlEvnEdt).hasClass('disabled'))
						$(prev.options.btnMdlEvnEdt).stop(true, true).removeClass("disabled", 100);
					else
						return;
				else
					$(prev.options.btnMdlEvnEdt).stop(true, true).addClass("disabled", 100);
			}
			/* ------------------------------- */
			if(prev.options.btnMdlEvnDlt != null){
				if(status)
					if($(prev.options.btnMdlEvnDlt).hasClass('disabled'))
						$(prev.options.btnMdlEvnDlt).stop(true, true).removeClass("disabled", 100);
					else
						return;
				else
					$(prev.options.btnMdlEvnDlt).stop(true, true).addClass("disabled", 100);
			}
			/* ------------------------------- */
			if(prev.options.btnMdlEnbNtp != null){
				if(status)
					if($(prev.options.btnMdlEnbNtp).hasClass('disabled'))
						$(prev.options.btnMdlEnbNtp).stop(true, true).removeClass("disabled", 100);
					else
						return;
				else
					$(prev.options.btnMdlEnbNtp).stop(true, true).addClass("disabled", 100);
			}
		};
		// ----> 
		prev.options.table = $(prev.container).find('table');
		prev.options.row = $(prev.options.table).find('tbody > tr');
		$(prev.options.table).attr('grid', prev.options.gridAtribute);
		prev.options.sTable = '[grid="'+ prev.options.gridAtribute +'"]';
		// 
		privateMethods.styleTable(prev.options.efecTableEnable, prev.options.sTable, prev.options.table, prev.options.efecTableColor[0], prev.options.efecTableColor[1]);
		fntDisableEnableBtn(false);
		// 
		$(prev.options.row).unbind('click').bind('click', function(e){
			var rowId = $(this).attr('idRow'),
					rowIndex = $(this).index(),
					statusRow = false,
					statusRowId = null,
					statusRowIndex = null;
			// Si es que no se a dado ningun recorido
			if($(prev.options.table).data('loadEfect') == false || typeof $(prev.options.table).data('loadEfect') === 'undefined'){
				statusRow = true;
				statusRowId = rowId;
				statusRowIndex = rowIndex;
				/* ------------------------------- */
				fntDisableEnableBtn(true);
			} else {
				if($(prev.options.row).data('idRow') != rowId){
					prev.options.tableId = prev.options.table.attr('id');
					var rowAnt = $('#'+prev.options.tableId+' > tbody > tr:eq('+ $(prev.options.row).data('rowIndex') +')');
					$('td', rowAnt).stop(true, true).animate({backgroundColor: prev.options.efecTableColor[1]}, 1000);
					$('td', this).stop(true, true).animate({backgroundColor: prev.options.efecTableColor[0]}, 1000);
					statusRow = true;
					statusRowId = rowId;
					statusRowIndex = rowIndex;
					/* ------------------------------- */
					fntDisableEnableBtn(true);
				} else {
					statusRow = false;
					statusRowId = null;
					statusRowIndex = rowIndex;
					/* ------------------------------- */
					fntDisableEnableBtn(false);
				}
			}
			$(prev.options.table).data('loadEfect', statusRow);
			$(prev.options.row).data('idRow', statusRowId);
			$(prev.options.row).data('rowIndex', statusRowIndex);
			e.preventDefault();
		});
	}

	gridRad1Us.prototype.addLoadModal = function(){
		var prev = this;
		if(prev.options.mdlAddFrmId != null){
			if(!$(prev.container).data('loadIniAddModal')){
				$.ajax({
					type: "GET",
					url: prev.options.mdlAddFrmFrom,
					success: function(msg){
						$.addRad1usModal({
							id: prev.options.mdlAddFrmId,
							title: prev.options.mdlAddFrmTitle,
							body: msg,
							pvLoadCallBack: function(){
								if($.isFunction(prev.options.mdlAddFrmPvLoadCallBack)){
									prev.options.mdlAddFrmPvLoadCallBack.call(this);
								}
							},
							loadCallback: function(){
								var btnSave = $(prev.options.mdlAddFrmId).find('.modal-footer').children('button').get(1);
								$(btnSave).unbind('click').bind('click', function(e){
									var frmAdd = $(prev.options.mdlAddFrmId).find('form'),
											getData = frmAdd.serialize();
									$.ajax({
										type: 'GET',
										url: prev.options.mdlAddSaveFrom,
										data: getData,
										success: function(html){
											var btnClose = $(prev.options.mdlAddFrmId).find('.modal-footer').children('button').get(0),
													column = $.param.fragment();
											$(btnClose).trigger('click');
											$(frmAdd)[0].reset();
											$('#txtDescripcion').redactor('set', '');
											if(column == null || column == ""){
												prev.gridLoadData(true, column);
											} else {
												window.location.hash = '#!';
											}	
										}
									});
									e.preventDefault();
								});
								if($.isFunction(prev.options.mdlAddFrmLoadCallBack)){
									prev.options.mdlAddFrmLoadCallBack.call(this);
								}
							},
							hiddeCallback: prev.options.mdlAddFrmHiddenCallBack
						});
					}
				});
				$(prev.container).data('loadIniAddModal', true);
			} 
			if(prev.options.btnMdlEvnAdd != null){
				$(prev.options.btnMdlEvnAdd).unbind('click').bind('click', function(e){
					$(prev.options.mdlAddFrmId).modal('show');
					e.preventDefault();
				})
			}
		}
	}

	gridRad1Us.prototype.editLoadModal = function(){
		var prev = this;
		if(prev.options.mdlEdtFrmId != null){
			$(prev.options.btnMdlEvnEdt).unbind('click').bind('click', function(e){
				var idRegRow = $(prev.options.row).data('idRow'),
						tableContainer = $(prev.container).find('table'),
						tableId = tableContainer.attr('id');
				// --->
				if($(prev.options.row).data('idRow') != null){
					$.ajax({
						type: "GET",
						url: prev.options.mdlEdtFrmFrom,
						data: { idRow:idRegRow },
						success: function(msg){
							$.addRad1usModal({
								id: prev.options.mdlEdtFrmId,
								title: prev.options.mdlEdtFrmTitle,
								body: msg,
								pvLoadCallBack: function(){
									if($.isFunction(prev.options.mdlEdtFrmPvLoadCallBack)){
										prev.options.mdlEdtFrmPvLoadCallBack.call(this);
									}
								},
								loadCallback: function(){
									var btnSave = $(prev.options.mdlEdtFrmId).find('.modal-footer').children('button').get(1);
									$(btnSave).unbind('click').bind('click', function(e){
										var frmEdt = $(prev.options.mdlEdtFrmId).find('form'),
												getData = frmEdt.serialize();
										$.ajax({
											type: 'GET',
											url: prev.options.mdlEdtSaveFrom,
											// data: getData +'&'+ $.param(getEditor),
											data: getData,
											success: function(html){
												var btnClose = $(prev.options.mdlEdtFrmId).find('.modal-footer').children('button').get(0),
														column = $.param.fragment(),
														tableC = $('#'+tableId	+' > tbody'),
														rowIndex = $(prev.options.row).data('rowIndex'),
														search = $(prev.container).data('saveSearchData');
												$(btnClose).trigger('click');
												if(search != ''){
													prev.gridLoadData(true, column, search);
												} else {
													prev.gridLoadData(true, column);
												}
												alertify.success("El registro "+idRegRow+" fue actualizado.");
											}
										});
										e.preventDefault();
									});
									if($.isFunction(prev.options.mdlEdtFrmLoadCallBack)){
										prev.options.mdlEdtFrmLoadCallBack.call(this);
									}
								},
								hiddeCallback: function(){
									if($.isFunction(prev.options.mdlEdtFrmHiddenCallBack)){
										prev.options.mdlEdtFrmHiddenCallBack.call(this);
									}
									$(prev.options.mdlEdtFrmId).remove();
								},
								open: true
							});
						}
					});
				} else {
					alertify.error("No se a seleccionado una fila!");
				}
				e.preventDefault();
			});
		}
	}

	gridRad1Us.prototype.deltLoadModal = function(){
		var prev = this;
		if(prev.options.btnMdlEvnDlt != null){
			$(prev.options.btnMdlEvnDlt).unbind('click').bind('click', function(e){
				var idRegRow = $(prev.options.row).data('idRow'),
						column = $.param.fragment(),
						search = $(prev.container).data('saveSearchData');
				if(idRegRow != null){
					alertify.confirm("Es seguro de eliminar el registro "+idRegRow, function (e) {
						if (e) {
							$.ajax({
								type: 'GET',
								url: prev.options.mdlDltSaveFrom,
								data: {idRegRow : idRegRow},
								success: function(html){
									if(search != ''){
										prev.gridLoadData(true, column, search);
									} else {
										prev.gridLoadData(true, column);
									}
									alertify.success("El registro "+idRegRow+" fue eliminado¡");
								}
							});
						}
					});
				}
				e.preventDefault();
			});
		}
	}

	gridRad1Us.prototype.enableNtPrincipal = function(){
		var prev = this;
		if(prev.options.btnMdlEnbNtp != null){
			$(prev.options.btnMdlEnbNtp).unbind('click').bind('click', function(e){
				var idRegRow = $(prev.options.row).data('idRow'),
						column = $.param.fragment(),
						search = $(prev.container).data('saveSearchData');
				// console.log(idRegRow);
				$.ajax({
					type: 'GET',
					url: prev.options.mdlEnbSaveFrom,
					data: {idRegRow : idRegRow},
					success: function(html){
						if(search != ''){
							prev.gridLoadData(true, column, search);
						} else {
							prev.gridLoadData(true, column);
						}
						alertify.success("El registro "+idRegRow+" noticia principal¡");
					}
				});
			});
		}
	}

	gridRad1Us.prototype.searchNoticia = function(){
		var prev = this;
		if(prev.options.iptSearchGrid != null){
			// --> $.hasData();
			if(!$(prev.container).data('loadIniSearch')){
				$(prev.options.iptSearchGrid).unbind('blur').bind({
					blur: function(){
						var value = $(this).val(),
								column = $.param.fragment();
						// prev.gridLoadData(true, 0, value);
						$(this).val('');
						$(prev.options.iptSearchGrid).data('loadIniSearch', false);
						$(prev.container).data('saveSearchData', value);
						/*********************************/ 
						/*********************************/ 
						if(column == null || column == ""){
							prev.gridLoadData(true, column, value);
						} else {
							window.location.hash = '#!';
						}	
						$(prev.container).find('#loaderTable').simpleLoadingModal({ preload:false });
					},
					keypress: function(){
						if(!$(prev.options.iptSearchGrid).data('loadIniSearch')){
							$(prev.container).find('#loaderTable').simpleLoadingModal();
							$(prev.options.iptSearchGrid).data('loadIniSearch', true);
						}
					}
				});
				$(prev.container).data('loadIniSearch', true);
			}
		}
	}

	gridRad1Us.prototype.paginationTable = function(){
		var prev = this;
		$(prev.options.gridClsPagtn+' > a').unbind('click').bind('click',function(e){
			e.preventDefault();
			var href = $(this).attr("href"),
					lastItem = href.split("/").pop(-1);
			if(lastItem == "#"){
				return;
			} else {
				window.location.hash = '#!'+lastItem;
			}
		});
	}

	$.gridRad1Us = {
		defaults: {
			efecTableEnable: true,
			// Color'S Hover grid
			efecTableColor: ['#DCDFE4', '#FBFBFB'],
			efecLoadFn: false,
			loadJs: function(){
				// Load Js
			},
			gridAtribute: 'gridRad1Us',
			// Load Table Url GRID
			gridDataType: 'html',
			gridUrl: '',
			gridClsPagtn: '',
			gridTransitionTime: 1500,
			/* --------------- */
			/* --------------- */
			// Modal Add Id
			btnMdlEvnAdd: null,
			mdlAddFrmTitle: '',
			mdlAddFrmId: null,
			mdlAddFrmFrom: '',
			mdlAddSaveFrom: '',
			mdlAddFrmPvLoadCallBack: function(){
				// Prev Load Modal
			},
			mdlAddFrmLoadCallBack: function(){
				// Add Show Modal
			},
			mdlAddFrmHiddenCallBack: function(){
				// Add Ocultar Modal
			},
			/*******************/
			/*******************/
			// Modal Edit Id
			btnMdlEvnEdt: null,
			mdlEdtFrmTitle: '',
			mdlEdtFrmId: null,
			mdlEdtFrmFrom: '',
			mdlEdtSaveFrom: '',
			mdlEdtFrmPvLoadCallBack: function(){
				// Prev Load Modal Edit
			},
			mdlEdtFrmLoadCallBack: function(){
				// Edit Show Modal
			},
			mdlEdtFrmHiddenCallBack: function(){
				// Edit Ocultar Modal
			},
			btnMdlEvnDlt: null,
			mdlDltSaveFrom: null,
			dltFunction: function(){
				// Eliminar Row
			},
			btnMdlEnbNtp: null,
			mdlEnbSaveFrom: '',
			iptSearchGrid: ''
		}
	};

	$.addRad1usModal = function(parameters){
		/* saber si es un id o una class */
		var cutFrstTxt = parameters.id.substring(0, 1),
				classOrId  = cutFrstTxt == '.' ? 'class' : 'id',
				cutRnameClassOrId = parameters.id.length,
				cutNnameClassOrId = parameters.id.substring(1, cutRnameClassOrId);
		// --->
		if($(classOrId+cutNnameClassOrId).length > 0){
			// $(slect+parameters.id).remove();
			$(parameters.id).modal('show');
		} else {
			var configParameters = {
				id: '',
				title: '',
				page: null,
				height: null,
				width: null,
				fullScreen: false,
				body: null,
				pvLoadCallBack: function(){ },
				loadCallback: function(){ },
				hiddeCallback: function(){ },
				open: false
			},
			optionParameter = $.extend({}, configParameters, parameters),
			boostrapModalTheme =		'<div class="modal fade" '+classOrId+'="'+cutNnameClassOrId+'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">';
			boostrapModalTheme +=		'<div class="modal-dialog">';
			boostrapModalTheme +=			'<div class="modal-content">';
			boostrapModalTheme +=				'<div class="modal-header">';
			boostrapModalTheme +=					'<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
			boostrapModalTheme +=					'<h4 class="modal-title">'+ optionParameter.title +'</h4>';
			boostrapModalTheme +=				'</div>';
			boostrapModalTheme +=				'<div class="modal-body"></div>';
			boostrapModalTheme +=				'<div class="modal-footer">';
			boostrapModalTheme +=					'<button type="button" class="btn btn-default btn-close" data-dismiss="modal">Cerrar</button>';
			boostrapModalTheme +=					'<button type="button" class="btn btn-primary" id="btnSave">Guardar</button>';
			boostrapModalTheme +=				'</div>';
			boostrapModalTheme +=			'</div>';
			boostrapModalTheme +=		'</div>';
			boostrapModalTheme +=	'</div>';
			// 
			$("body").prepend(boostrapModalTheme);
			if(optionParameter.page != null){
				$.ajaxSetup({ cache: false });
			  $.ajax({
					type: 'GET',
					url: optionParameter.page,
					dataType: 'html',
					success: function(data){
						$(optionParameter.id).find('.modal-body').html(data);
			      $(optionParameter.id).data('loadFuntion', true);
					}
				});
			} else {
				$(optionParameter.id).find('.modal-body').html(optionParameter.body);
			}
			// 
			$(optionParameter.id).on('show.bs.modal', function () {
				if($.isFunction(optionParameter.pvLoadCallBack)){
					optionParameter.pvLoadCallBack.call(this);
	  		}
			});
			// 
			$(optionParameter.id).on('shown.bs.modal', function () {
				if($.isFunction(optionParameter.loadCallback)){
					optionParameter.loadCallback.call(this);
	  		}
			});
			//
		  $(optionParameter.id).on('hidden.bs.modal', function () {
				if($.isFunction(optionParameter.hiddeCallback)){
					optionParameter.hiddeCallback.call(this);
	  		}
	  		if($("#ui-datepicker-div").length){
	  			$("#ui-datepicker-div").remove();
	  			if($("#redactor_modal").length){
		  			$("#redactor_modal_overlay").remove();
		  			$("#redactor-progress").remove();
		  			$("#redactor_modal").remove();
  				}
	  		}
			});
			// AutoOpenModal
			if(optionParameter.open != false){
				$(optionParameter.id).modal({
					show : true
				});				
			} else {
				$(optionParameter.id).modal({
					show : false
				});
			}
		}
	}

	jQuery.fn.gridRad1Us = function(options) {
		var settings = $.extend({}, $.gridRad1Us.defaults, options);
		var obj = new gridRad1Us ($(this), settings);
	};

})( jQuery );