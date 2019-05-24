<?php $data = $this->admin_model->usuarios_agre();
$data_select = $this->admin_model->select_combo_perfil();
$data_select_dep = $this->admin_model->select_combo_dep();?> 


		<div class="row">
        <div class="col-xs-6 col-sm-12 col-md-12 col-lg-12">
                                                 <h3>Agregar Usuario| <a href="" class="btn btn-success" data-toggle="modal" data-target="#modal_cl">Nuevo</a></h3>
                                                 <hr>
                                                 <a href=""></a>
                                            </div>
                                        </div>
		<div class="panel panel-container">
			<div class="row">
      <div class="col-xs-12">
         <div class="panel">
          <h3 align="center">Último usuario agregado</h3>
         <div class="panel_tabla">
             <table class="table table-striped">
                                            <thead>
                                            <th>ID</th>
                                            <th>Nombre Completo</th>
                                            <th>Perfil</th>
                                            <th>Email</th>
                                            <th>Área</th>
                                            </thead>
                                              <?php
                                                foreach($data as $fila)
                                                {
                                              ?>
                                                <tr>
                                                <td><?=$fila['id_usuarios'];?></td>
                                                <td><?=$fila['nombre'];?> <?=$fila['apellido_p'];?> <?=$fila['apellido_m'];?></td>
                                                <td><?=$fila['PERFIL'];?></td>
                                                <td><?=$fila['email'];?></td>   
                                                <td><?=$fila['AREA'];?></td> 
                                                 
                                                      </form></td>
                                                </tr>
                                            <?php
                                                }
                                             ?>                             
                                        </table>
            </div>
           </div>
       </div>
    </div> <!-- row-->
				<!-- <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-comments color-orange"></em>
							<div class="large">52</div>
							<div class="text-muted">Comments</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
							<div class="large">24</div>
							<div class="text-muted">New Users</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-red panel-widget ">
						<div class="row no-padding"><em class="fa fa-xl fa-search color-red"></em>
							<div class="large">25.2k</div>
							<div class="text-muted">Page Views</div>
						</div>
					</div>
				</div>
			</div>--><!--/.row-->
		</div>

		</div>
		
		

	</div>	<!--/.main-->
	  <div class="modal fade" id="modal_cl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel1">Agregar Usuario</h4>
          </div>
          <div class="modal-body">
          <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <form action="<?php echo base_url();?>index.php/Admin/insertar_usuario" method="post" >
            <label for="placa">Nombre</label>
            <input type="text" class="form-control" placeholder="" name="nombre"  minlength="3" maxlength="40" required>
          <br>
          <label for="placa">Apellido P.</label>
            <input type="text" class="form-control" placeholder="" name="apellido_p" minlength="3" maxlength="40" required>
          <br>
          <label for="placa">Apellido M.</label>
            <input type="text" class="form-control" placeholder="" name="apellido_m" minlength="3" maxlength="40">
          <br>
          
           
            <br>
            <label for="placa">Email</label>
            <input type="email" class="form-control" placeholder="" name="email" minlength="10" maxlength="40" required>
          <br>
          <label for="">Area</label>
            <select class="form-control" name="area">
               <?php
                  foreach ($data_select_dep as $i => $area)
                  echo '<option value="',$i,'" class="form-control">',$area,'</option>';?>
                </select>
            <br>
            <input type="submit" class="btn btn-success" value="Guardar" name="Guardar"></td>
          </form>
          </div>
        </div>
      </div>
    </div>  
    </div>
    </div>  
	