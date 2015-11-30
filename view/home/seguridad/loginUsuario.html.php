<?php include_once $fsConfig->getPath() . 'view/parcial/head.php' ?>
<?php include_once $fsConfig->getPath() . 'view/parcial/header.php' ?>

<section class="main container">
  <div class="row">
    <div class="jumbotron boxuserdos">
      <form method="POST" action="<?php echo $fsConfig->getUrl() ?>index.php/home/indexUsuario" class="form-horizontal">
        <div class="form-group">
          <label class="control-label col-xs-3">Nombre:</label>
          <div class="col-xs-9">
            <input type="text" class="form-control" placeholder="Nombre">
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
          <div class="col-xs-offset-3 col-xs-9">
            <label class="checkbox-inline">
              <input type="checkbox" value="agree">Recordarme
            </label>
          </div>
        </div>
        <br>
        <div class="form-group">
          <div class="col-xs-offset-3 col-xs-9">
            <input type="submit" class="btn btn-default" value="Ingresar">
            <a class="btn btn-default btn-cancel" value="Guardar">Cancelar</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>

<?php include_once $fsConfig->getPath() . 'view/parcial/footer.php' ?>
<?php include_once $fsConfig->getPath() . 'view/parcial/foot.php' ?>
