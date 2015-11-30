<?php include_once $fsConfig->getPath() . 'view/parcial/head.php' ?>



<style>

    html, body, fieldset, pre, .h1X {	
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;}


   
.TitlesX{z-index: 99999 !important;}
.headerX{
        position: relative;
        text-align: center;

        font-size: 72px;
        line-height: 108px;
        height: 108px;
        background: #000000;
        color: #fff;
        font-family:ralewayBold,Helvetica,Arial,sans-serif;

        // set animation
        -webkit-transition: all 0.7s ease;
        transition: all 0.7s ease;
    }
    .stickyX{position: fixed;}
    .sticky{position: fixed;}
    .stickyX2{position: fixed;
              top: 40px;
              width: 100%;
              z-index: 999}
    .stickyX3{position: fixed;
              top: 0px;
              width: 100%;
              z-index: 999}
    .noStickyX{position:relative !important;
               top:50px;
               -webkit-transition: all 0.7s ease;
               transition: all 0.7s ease;}
    .headerX.smallX {


        display: inline-block;
        font-size: 24px;
        line-height: 48px;
        height: 48px; 
        margin-bottom: auto;
        width: 100%;
        background: #000000;
        text-align: left;
        padding-left: 20px;
        -webkit-transition: all 0.9s ease;
        transition: all 0.9s ease;
        transition-delay:all 0.9s ease ;

        z-index: 9999;


    }
    .iniciX{
        text-align: left;
    display: inline-block;
    }
    .containerX1{

        top: 100%;
        left: 0;
        right: 0;
        padding: 10px;
    }
    .veilX1{
        display: inline-block;
        margin: 0 auto;
        background-color: lavender;
    }
</style>


<!-- Animacion -->
<header class="headerX"><h1 class="h1X"><a class="TitleX" href="<?php echo $fsConfig->getUrl() ?>index.php/home/index" title="Destino Travel" rel="home"><span class="TitleX">BugaTravels</span></a></h1></header>
<div class='containerX1 invisibleX'><div class='veilX2'></div></div>



<!-- importar jQuery -->

<script src="<?php echo $fsConfig->getUrl() ?>js/jquery/jquery.min.js"></script>
<script src="<?php echo $fsConfig->getUrl() ?>js/jquery/jstiloX.js"></script>





<div class="large-12-columns rowX " style="position: relative">
    <nav class="navsub navbar navbar-default">
        <div class="container-fluid container-fluidX navcont heightX">

            <div class="collapse navbar-collapse fijoX" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav floatLeftX">
                   
                    <li class="contInicioX"><a href="<?php echo $fsConfig->getUrl() ?>index.php/home/index">Inicio <span class="sr-only">(current)</span></a></li>
                    <li class="sitiosX"><a href="<?php echo $fsConfig->getUrl() ?>index.php/home/sitio">Sitios</a></li>
                    <li class="eventosX"><a href="<?php echo $fsConfig->getUrl() ?>index.php/home/evento">Eventos</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo $fsConfig->getUrl() ?>index.php/home/categorias">Todas</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="floatRightX">
                    <form action="<?php echo $fsConfig->getUrl() ?>index.php/home/busqueda" class="navbar-form navbar-right" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">
                            <span class="icon-magnifying-glass"></span>
                        </button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo $fsConfig->getUrl() ?>index.php/home/loginUsuario">Ingresar</a></li>
                        <li><a href="<?php echo $fsConfig->getUrl() ?>index.php/home/registroUsuario">Registrar</a></li>
                    </ul>
                </div>
            </div>

        </div>
        

        
    </nav>
</div>

        <script src="<?php echo $fsConfig->getUrl() ?>js/jquery/jquery.min.js"></script>
<script src="<?php echo $fsConfig->getUrl() ?>js/jquery/jstiloX.js"></script>



