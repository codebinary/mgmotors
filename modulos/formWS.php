<form role="form" id="formulario-cotizar" method="post" action="">
                        <div class="col-lg-6 col-md-6 col-sm-11 col-xs-11" style="margin-top: 68px;" id="form1">
                            <select class="cotizar-input" name="tipoDoc" id="tipoDoc">
                                <option value="">-- Seleccione tipo documento --</option>
                                <option value="dni">DNI</option>
                                <option value="extranjeria">Carnet de Extranjer&iacute;a</option>
                                <option value="pasaporte">Pasaporte</option>
                            </select>
                            <input type="text" name="valorDoc" placeholder="Número de documento">
                            <input type="text" name="primerNombre" placeholder="Primer nombre">
                            <input type="text" name="segundoNombre" placeholder="Segundo nombre">
                            <input type="text" name="apellidoPaterno" placeholder="Primer apellido">
                            <input type="text" name="apellidoMaterno" placeholder="Segundo apellido">
                            <label for="fNacimiento">Fecha de nacimiento:</label>
                            <div>
                                <select class="cotizar-input fechaNac" name="dia" id="diaList" class="fechaForm">
                                    <option value="-1">- Dia -</option>
                                    <?php getDia(); ?>
                                </select>
                                <select class="cotizar-input fechaNac" name="mes" id="mesList" class="fechaForm">
                                    <option value="-1">- Mes -</option>
                                    <?php getMes(); ?>
                                </select>
                                <select class="cotizar-input fechaNac" name="anio" id="yearList" class="fechaForm">
                                    <option value="-1">- A&ntilde;o -</option>
                                    <?php getAnios(); ?>
                                </select>
                            </div>
                            <input type="text" name="direccion" placeholder="Dirección">
                            <input type="text" name="email" placeholder="email">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-11 col-xs-11" style="margin-top: 68px;"id="form1">
                            <!-- <input type="text" name="direccion" placeholder="Dirección">
                            <input type="text" name="email" placeholder="email"> -->
                            <div class="ubicacion">
                              <select class="cotizar-input" name="departamento" id="departamento" class="lugar">
                                  <?= obtenerDepartamentos(); ?>
                              </select>
                              <select class="cotizar-input" name="provincia" id="provincia" class="lugar">
                                  <option value="-1">- Selecccione un provincia</option>
                              </select>
                              <select class="cotizar-input" name="distrito" id="distrito" class="lugar">
                                  <option value="-1">- Selecccione un Distrito -</option>
                              </select>
                            </div>
                            <select class="cotizar-input" name="prefijo" id="prefijo" class="nFono">
                                <option value="041">041</option>
                                <option value="043">043</option>
                                <option value="073">073</option>
                                <option value="054">054</option>
                                <option value="066">066</option>
                                <option value="076">076</option>
                                <option value="001" selected="selected">01</option>
                                <option value="084">084</option>
                                <option value="067">067</option>
                                <option value="062">062</option>
                                <option value="056">056</option>
                                <option value="064">064</option>
                                <option value="044">044</option>
                                <option value="074">074</option>
                                <option value="065">065</option>
                                <option value="082">082</option>
                                <option value="053">053</option>
                                <option value="063">063</option>
                                <option value="073">073</option>
                                <option value="051">051</option>
                                <option value="042">042</option>
                                <option value="052">052</option>
                                <option value="072">072</option>
                                <option value="061">061</option>
                            </select>
                            <input type="text" name="telefono" placeholder="telefono" class="txtFono" style="width: 215px!important;">
                            <select class="cotizar-input" name="modelo" id="modelo" class="opciones">
                                <?= obtenerModelos(); ?>
                            </select>
                            <select class="cotizar-input" name="solicitud" id="solicitud" class="opciones">
                                <?= obtenerSubTiposSolicitudes() ?>
                            </select>
                            <textarea name="mensaje" placeholder="Escribe aquí tu comentario..."></textarea>
                            <div class="recibir-informacion">
                              <input type="checkbox" value="si" name="newsletter" checked="true"> Acepto recibir informaciones comerciales y novedades de MG MOTORS
                            </div>
                              <div class="boton-enviar">
                                <input type="submit" class="boton-form"  id="btnSubmit" name="enviarCotizacion" value="Enviar" />
                              </div>
                        </div>
                      </form>