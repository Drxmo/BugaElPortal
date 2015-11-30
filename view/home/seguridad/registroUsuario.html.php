<?php include_once $fsConfig->getPath() . 'view/parcial/head.php' ?>
<?php include_once $fsConfig->getPath() . 'view/parcial/header.php' ?>

<section class="main container">
  <div class="row">
    <div class="jumbotron boxuser">
      <form class="form-horizontal">
        <div class="form-group">
          <label class="control-label col-xs-3">Nombre:</label>
          <div class="col-xs-9">
            <input type="text" class="form-control" placeholder="Nombre">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-xs-3">Apellido:</label>
          <div class="col-xs-9">
            <input type="text" class="form-control" placeholder="Apellido">
          </div>
        </div> 
        <div class="form-group">
          <label class="control-label col-xs-3">Password:</label>
          <div class="col-xs-9">
            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-xs-3">Confirmar Password:</label>
          <div class="col-xs-9">
            <input type="password" class="form-control" placeholder="Confirmar Password">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-xs-3">Email:</label>
          <div class="col-xs-9">
            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
          </div>
        </div>                             
        <div class="form-group">
          <label class="control-label col-xs-3">Fecha de Nacimiento:</label>
          <div class="col-xs-3">
            <select class="form-control">
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
              <input type="radio" name="genderRadios" value="male">Maculino
            </label>
          </div>
          <div class="col-xs-2">
            <label class="radio-inline">
              <input type="radio" name="genderRadios" value="female">Femenino
            </label>
          </div>
        </div>
        <div class="form-group">
          <div class="col-xs-offset-3 col-xs-9">
            <label class="checkbox-inline">
              <input type="checkbox" value="news">Recivir Notificaciones.
            </label>
          </div>
        </div>
        <div class="form-group">
          <div class="col-xs-offset-3 col-xs-9">
            <label class="checkbox-inline">
              <input type="checkbox" value="agree">Accepto <a href="#">Terminos y condiciones</a>.
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
