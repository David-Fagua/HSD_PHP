<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Reservaciones</title>

    <link rel="icon" type="image/png" href="../../Img/Logo.png">
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/metisMenu.min.css" rel="stylesheet">
    <link href="../../css/timeline.css" rel="stylesheet">
    <link href="../../css/startmin.css" rel="stylesheet">
    <link href="../../css/morris.css" rel="stylesheet">
    <link href="../../css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>

<div id="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Samuel X</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="inicio.html"><i class="fa fa-home fa-fw"></i> Inicio</a></li>
        </ul>
        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown navbar-inverse">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> Nueva Reserva N°7
                                <span class="pull-right text-muted small">Hace 4 minutos</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> Nueva Reserva N°6
                                <span class="pull-right text-muted small">Hace 1 hora</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> Nueva Reserva N°5
                                <span class="pull-right text-muted small">Hace 3 hora</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> Nueva Reserva N°4
                                <span class="pull-right text-muted small">Hace 23 hora</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> Nueva Reserva N°3   
                                <span class="pull-right text-muted small">Hace Un dia</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>Más Notificasiones</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> Samuel Sanches <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="Usuario.html"><i class="fa fa-user fa-fw"></i>Usuario</a>
                    </li>
                    <li><a href="../Error 404.html"><i class="fa fa-gear fa-fw"></i> Configuraciones</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="../../Inicio.html"><i class="fa fa-sign-out fa-fw"></i>Cerrar Sesión</a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <a href="inicio.html" class="navbar-brand" href="#">
                    <img src="../../img/Logo.png" width="40" height="40" alt="HSD PLUS"></a>
                    <a href="inicio.html" class="navbar-brand" href="#">HSD PLUS</a>
                </br>
                </br>
                </br>
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Buscar">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </input>
                        </div>
                    </li>   
                    <li>
                        <a><i class="fa fa-bar-chart-o fa-fw"></i>Inventarios<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="../Inventario/Inventario.html">Inventario general</a>
                            </li>
                            <li>
                                <a href="../Inventario/Añadir.html">Producto inicial</a>
                            </li>
                            <li>
                                <a href="../Inventario/Editar.html">Producto en proceso</a>
                            </li>
                            <li>
                                <a href="../Inventario/Eliminar.html">Producto final</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a><i class="fa fa-bar-chart-o fa-fw"></i>Ventas<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="./Ventas/Registrar.html">Registrar</a>
                            </li>
                            <li>
                                <a href="./Ventas/Consultar.html">Consultar</a>
                            </li>
                            <li>
                                <a href="./Ventas/Modificar.html">Modificar</a>
                            </li>
                            <li>
                                <a href="./Ventas/Historial de ventas.html">Historial de ventas</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="./Catalogo/Modificar.html"><i class="fa fa-edit fa-fw"></i>Gestor del Catalogo
                        </a>
                    </li>
                    <li>
                        <a href="./Reservaciones.html"><i class="fa fa-edit fa-fw"></i> Reservas de los Clientes
                        </a>
                    </li>
                    <li>
                        <a href="./Usuarios.html"><i class="fa fa-edit fa-fw"></i> Usuarios
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Reservaciones</h1>
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="table-responsive"><table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                    <td>Howard Hatfield</td>
                    <td>Office Manager</td>
                    <td>San Francisco</td>
                    <td>51</td>
                    <td>2008/12/16</td>
                    <td>$164,500</td>
                  </tr>
                  <tr>
                    <td>Hope Fuentes</td>
                    <td>Secretary</td>
                    <td>San Francisco</td>
                    <td>41</td>
                    <td>2010/02/12</td>
                    <td>$109,850</td>
                  </tr>
                  <tr>
                    <td>Vivian Harrell</td>
                    <td>Financial Controller</td>
                    <td>San Francisco</td>
                    <td>62</td>
                    <td>2009/02/14</td>
                    <td>$452,500</td>
                  </tr>
                  <tr>
                    <td>Timothy Mooney</td>
                    <td>Office Manager</td>
                    <td>London</td>
                    <td>37</td>
                    <td>2008/12/11</td>
                    <td>$136,200</td>
                  </tr>
                  <tr>
                    <td>Jackson Bradshaw</td>
                    <td>Director</td>
                    <td>New York</td>
                    <td>65</td>
                    <td>2008/09/26</td>
                    <td>$645,750</td>
                  </tr>
                  <tr>
                    <td>Olivia Liang</td>
                    <td>Support Engineer</td>
                    <td>Singapore</td>
                    <td>64</td>
                    <td>2011/02/03</td>
                    <td>$234,500</td>
                  </tr>
                  
                  <tr>
                    <td>Donna Snider</td>
                    <td>Customer Support</td>
                    <td>New York</td>
                    <td>27</td>
                    <td>2011/01/25</td>
                    <td>$112,000</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

      </div>

    </div>
        </div>
    </div>

</div>
<script src="../../js/jquery.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/metisMenu.min.js"></script>
<script src="../../js/startmin.js"></script>

</body>
</html>
