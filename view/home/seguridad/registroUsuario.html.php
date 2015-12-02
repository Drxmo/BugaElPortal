<?php include_once $fsConfig->getPath() . 'view/parcial/head.php' ?>
<?php include_once $fsConfig->getPath() . 'view/parcial/header.php' ?>

<section class="main container">
  <div class="row">
    <div class="jumbotron boxuser">
      <form class="form-horizontal" action="<?php echo $formulario ?>" method="post">
        <div class="form-group">
          <label class="control-label col-xs-3">Nombre:</label>
          <div class="col-xs-9">
            <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="registro[nombre]">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-xs-3">Apellidos:</label>
          <div class="col-xs-9">
            <input type="text" class="form-control" id="apellido" placeholder="Apellido" name="registro[apellidos]">
          </div>
        </div> 
        <div class="form-group">
          <label class="control-label col-xs-3">Contra:</label>
          <div class="col-xs-9">
            <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="registro[pass1]">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-xs-3">Repita contra:</label>
          <div class="col-xs-9">
            <input type="password" class="form-control" placeholder="Confirmar Password" name="registro[pass2]">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-xs-3">Correo:</label>
          <div class="col-xs-9">
            <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="registro[email]">
          </div>
        </div>                             
        <div class="form-group">
          <label class="control-label col-xs-3">Fecha de Nacimiento:</label>
          <div class="col-xs-3">
            <select class="form-control" >
              <option>31</option>
            </select>
          </div>
          <div class="col-xs-3">
            <select class="form-control">
              <option>12</option>
            </select>
          </div>
          <div class="col-xs-3">
            <select class="form-control">
              <option>2015</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-xs-3">Genero:</label>
          <div class="col-xs-2">
            <label class="radio-inline">
              <input type="radio" name="genderRadios" value="male" name="registro[genero]">M
            </label>
          </div>
          <div class="col-xs-2">
            <label class="radio-inline">
              <input type="radio" name="genderRadios" value="female" name="registro[genero]">F
            </label>
          </div>
        </div>
        <div class="form-group">
          <div class="col-xs-offset-3 col-xs-9">
            <label class="checkbox-inline">
              <input type="checkbox" value="news">Desea recibir notificaciones.
            </label>
          </div>
        </div>
        <div class="form-group">
          <div class="col-xs-offset-3 col-xs-9">
            <label class="checkbox-inline">
              <input type="checkbox" value="agree">Acepta <a href="#">los terminos y condiciones</a>.
            </label>
          </div>
        </div>
        <br>
        <div class="form-group">
          <div class="col-xs-offset-3 col-xs-9">
            <input type="submit" class="btn btn-default" value="Registrar">
            <a class="btn btn-default btn-cancel" value="Guardar">Cancelar</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>

<?php include_once $fsConfig->getPath() . 'view/parcial/footer.php' ?>
<?php include_once $fsConfig->getPath() . 'view/parcial/foot.php' ?>
