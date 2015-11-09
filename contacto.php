<!DOCTYPE html>
<html lang="es">
    <head>
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="estilo.css"/>
        <title>Panel Usuario</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <!-- Barra De Navegacion -->
        <div class="navbar-fixed nav2">
            <nav>
                <div class="nav-wrapper">
                    <a href="#!" class="brand-logo center">EasyDomo</a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                        <ul class="right hide-on-med-and-down">
                            <li><a href="#modal1" class="modal-trigger"><i class="material-icons right">perm_identity</i>Registrarte</a></li>
                            <li><a href="#modal2" class="modal-trigger"><i class="material-icons right">power_settings_new</i>Iniciar Sesi&oacute;n</a></li>
                        </ul>
                        <ul class="side-nav" id="mobile-demo">
                            <li><a href="#modal1" class="modal-trigger">Registrarte</a></li>
                            <li><a href="#modal2" class="modal-trigger">Iniciar Sesi&oacute;n</a></li>
                        </ul>
                </div>
            </nav>
        </div>
        <!-- Div que contiene las opciones de registrarte -->
        <div class="container">
            <div class="row">
                <div id="modal1" class="modal">
                    <div class="modal-content">
                        <div class="row">
                            <form class="col s12" action="registro.php" method="post">  
                                    <h3>Registro Usuarios</h3>
                                    <div class="input-field col s6">
                                        <input type="text" name="nombre_registro" length="20" maxlength="20" class="validate">
                                        <label>Nombre:</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input type="text" name="ap_paterno_registro" length="15" maxlength="15" class="validate">
                                        <label>Apellido Paterno:</label>
                                    </div>  
                                    <div class="input-field col s6">
                                        <input type="text" name="ap_materno_registro" length="15" maxlength="15" class="validate">
                                        <label>Apellido Materno:</label>
                                    </div> 
                                    <div class="input-field col s6">
                                        <input type="email" name="e_mail_registro" length="20" maxlength="20" class="validate">
                                        <label>E-Mail:</label>
                                    </div> 
                                    <div class="input-field col s6">
                                        <input type="text" name="telefono_registro" length="20" maxlength="20" class="validate">
                                        <label>Telefono o Celular:</label>
                                    </div> 
                                    <div class="input-field col s6">
                                        <input type="text" name="usuario_registro" length="20" maxlength="20" class="validate">
                                        <label>Usuario:</label>
                                    </div> 
                                    <div class="input-field col s6">
                                        <input type="password" name="password_registro" length="20" maxlength="20" class="validate">
                                        <label>Password:</label>
                                    </div> 
                                    <div class="input-field col s6">
                                        <label>Sexo:</label><br>
                                        <p>
                                            <input name="group1" type="radio" id="test1" />
                                            <label for="test1">Masculino</label>
                                        </p>
                                        <p>
                                            <input name="group1" type="radio" id="test2" />
                                            <label for="test2">Femenino</label>
                                        </p>
                                    </div>     
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-action modal-close btn-flat"><button class="btn waves-effect waves-teal" type="submit" name="action">Cancelar
                            <i class="material-icons right">not_interested</i></button></a>
                        <a href="#!" class="modal-action modal-close btn-flat"><button class="btn waves-effect waves-teal" type="submit" name="action">Registrar
                            <i class="material-icons right">send</i></button></a>   
                    </div>
                </div>
            </div>
        </div>
        <!-- Div que permitira el ingreso-->
        <div class="container">
            <div class="row">
                <div id="modal2" class="modal">
                    <div class="modal-content">
                        <div class="row">
                            <form class="col s12">  
                                    <h3>Registro Usuarios</h3>
                                    <div class="input-field col s6">
                                        <i class="material-icons prefix">perm_identity</i>
                                        <input id="icon_prefix" type="text" maxlength="20" length="20" class="validate">
                                        <label for="icon_prefix">Usuario</label>
                                    </div>
                                    <br><br><br><br>
                                    <div class="input-field col s6">
                                        <i class="material-icons prefix">dialpad</i>
                                        <input id="icon_dialpad" type="password" maxlength="15" length="15" class="validate">
                                        <label for="icon_dialpad">Password</label>
                                    </div>  
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-action modal-close btn-flat"><button class="btn waves-effect waves-teal" type="submit" name="action">Cancelar
                            <i class="material-icons right">not_interested</i></button></a>
                        <a href="#!" class="modal-action modal-close btn-flat"><button href="#!" class="btn waves-effect waves-teal" type="submit" name="action">Ingresar
                            <i class="material-icons right">send</i></button></a>   
                    </div>
            </div>
        </div>
        
            
            <br><br><br><br><br>
            <br><br><br><br><br>
            <br><br><br><br><br>
            <br><br><br><br><br>
        <!-- Footer -->
        <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col m6 s12">
                <h6 class="white-text">Programacion Web II</h6>
                <p class="grey-text text-lighten-4">Desarrollado Por:</p>
                <p class="grey-text text-lighten-4">Luis Gerardo Serna Carrizales</p>
                <p class="grey-text text-lighten-4">Jonathan Hernandez</p>
              </div>
              <div class="col l4 offset-l2 s12">
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            2015 Proyecto para fines didacticos
            </div>
          </div>
        </footer>      
    </body>
</html>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script>
    $(document).ready(function()
    {
        $('.button-collapse').sideNav();
        $('.slider').slider({indicators: false});
        $('.modal-trigger').leanModal();
    });
</script>