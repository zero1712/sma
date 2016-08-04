<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Panel de Control</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- FooTable -->
    <link href="css/plugins/footable/footable.core.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">



</head>

<body>

    <div id="wrapper">
<!-- menu -->
<nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/profile_small.jpg" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Eruviel Ávila</strong>
                             </span> <span class="text-muted text-xs block">Gobernador Edomex <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="profile.html">Perfil</a></li>
                            <li><a href="contacts.html">Contactos</a></li>
                            <li><a href="mailbox.html">Bandeja de Entrada</a></li>
                            <li class="divider"></li>
                            <li><a href="login.html">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li>
                    <a href="#"><i class="fa fa-flask"></i> <span class="nav-label">Panel de Control</span></a>
                </li>
                <li>
                <li>
                    <a href="timeline.html"><i class="fa fa-diamond"></i> <span class="nav-label">Audiencia</span></a>
                </li>
                <li>
                    <a href="calendar.html"><i class="fa fa-desktop"></i> <span class="nav-label">Agenda</span></a>
                </li>
				<li>
                    <a href="ecommerce_product_list.html"><i class="fa fa-edit"></i> <span class="nav-label">Documentos</span></a>
                </li>
				<li>
                    <a href="eventos.html"><i class="fa fa-database"></i> <span class="nav-label">Evento</span></a>
                </li>
            </ul>
                </li>
        </div>
    </nav>
<!-- menu -->
        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome to INSPINIA+ Admin Theme.</span>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a7.jpg">
                                </a>
                                <div class="media-body">
                                    <small class="pull-right">46h ago</small>
                                    <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a4.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right text-navy">5h ago</small>
                                    <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/profile.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right">23h ago</small>
                                    <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                    <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="mailbox.html">
                                    <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.html">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="profile.html">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="grid_options.html">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notifications.html">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="login.html">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2>Reporte</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li class="active">
                            <strong>Reporte</strong>
                        </li>
                    </ol>
                </div>
            </div>
      <div class="wrapper wrapper-content animated fadeInRight">
<div class="row">
    <div class="col-lg-4">
        <div class="widget style1">
            <div class="row">
                <div class="col-xs-4 text-center">
                    <i class="fa fa-trophy fa-5x"></i>
                </div>
                <div class="col-xs-8 text-right">
                    <span> Nivel de eficiencia </span>

                    <h2 class="font-bold">1000</h2>
                            </div>
                        </div>
                </div>
            </div>
         <div class="col-lg-4">
        <div class="widget style1 navy-bg">
            <div class="row">
                <div class="col-xs-4">
                    <i class="fa fa-cloud fa-5x"></i>
                </div>
                <div class="col-xs-8 text-right">
                    <span> Clima </span>

                    <h2 class="font-bold">26'C</h2>
                        </div>
                    </div>
                </div>
            </div>
           <div class="col-lg-4">
        <div class="widget style1 lazur-bg">
            <div class="row">
                <div class="col-xs-4">
                    <i class="fa fa-envelope-o fa-5x"></i>
                </div>
                <div class="col-xs-8 text-right">
                    <span> Notificaciones </span>

                    <h2 class="font-bold">260</h2>
                        </div>
                    </div>
        </div>
            </div>
            <!--<<div class="col-lg-3">
                <div class="widget style1 yellow-bg">
                    <div class="row">
                        <div class="col-xs-4">
                            <i class="fa fa-music fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-right">
                            <span> New albums </span>
                            <h2 class="font-bold">12</h2>
                        </div>
                    </div>
                </div>
            </div>-->
 </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="widget navy-bg no-padding">
                    <div class="p-m">
                <h1 class="m-xs">1000<small>HOY</small></h1>

                <h3 class="font-bold no-margins">
                    Atencion Ciudadana
                </h3>
                <small></small>
                    </div>
                    <div class="flot-chart">
                        <div class="flot-chart-content" id="flot-chart1"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
        <div class="widget lazur-bg no-padding">
            <div class="p-m">
                <h1 class="m-xs">1000<small>HOY</small></h1>

                <h3 class="font-bold no-margins">
                    Correspondencia
                </h3>
                <small></small>
                    </div>
                    <div class="flot-chart">
                        <div class="flot-chart-content" id="flot-chart2"></div>
                    </div>
                </div>
            </div>
            <!--<div class="col-lg-3">
                <div class="widget yellw-bg no-padding">
                    <div class="p-m">
                        <h1 class="m-xs">$ 50,992</h1>

                        <h3 class="font-bold no-margins">
                            Half-year revenue margin
                        </h3>
                        <small>Sales marketing.</small>
                    </div>
                    <div class="flot-chart">
                        <div class="flot-chart-content" id="flot-chart3"></div>
                    </div>
                </div>
            </div>-->
        </div>
            <div class="row">
    <div class="col-lg-3">
        <div class="widget style1 navy-bg">
            <div class="row vertical-align">
                <div class="col-xs-3">
                    <i class="fa fa-user fa-3x"></i>
                </div>
                <div class="col-xs-9 text-right">
                <small>Audiencias</small>
                    <h2 class="font-bold">217<small>Hoy</small></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="col-lg-2">
                    <div class="widget style1 navy-bg">
                        <div class="row vertical-align">
                            <div class="col-xs-3">
                                <i class="fa fa-thumbs-up fa-3x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <h2 class="font-bold">400</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="widget style1 navy-bg">
                        <div class="row vertical-align">
                            <div class="col-xs-3">
                                <i class="fa fa-rss fa-3x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <h2 class="font-bold">10</h2>
                            </div>
                        </div>
                    </div>
                </div>-->
                   <div class="col-lg-3">
        <div class="widget style1 lazur-bg">
            <div class="row vertical-align">
                <div class="col-xs-3">
                    <i class="fa fa-phone fa-3x"></i>
                </div>
                <div class="col-xs-9 text-right">
                <small>Beneficiarios contactados</small>
                    <h2 class="font-bold">120 <small>HOY</small></h2>
                            </div>
                        </div>
                    </div>
                </div>
                  <div class="col-lg-3">
        <div class="widget style1 navy-bg">
            <div class="row vertical-align">
                <div class="col-xs-3">
                    <i class="fa fa-envelope-o fa-3x"></i>
                </div>
                <div class="col-xs-9 text-right">
                <small>Mensajes</small>
                    <h2 class="font-bold">462</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
        <div class="widget style1 lazur-bg">
            <div class="row vertical-align">
                <div class="col-xs-3">
                    <i class="fa fa-thumbs-up fa-3x"></i>
                </div>
                <div class="col-xs-9 text-right">
                <small>SMA en redes</small>
                    <h2 class="font-bold">Like</h2>
                </div>
            </div>
        </div>
    </div>
</div>
        <div class="row m-t-lg">
            <div class="col-lg-6">
                <div class="ibox float-e-margins">

                    <div class="ibox-content">

                        <div>
                <div class="chat-activity-list">

                    <div class="chat-element">
                        <a href="#" class="pull-left">
                            <img alt="image" class="img-circle" src="img/a2.jpg">
                        </a>
                        <div class="media-body ">
                            <small class="pull-right text-navy">1m ago</small>
                            <strong>Mike Smith</strong>
                            <p class="m-b-xs">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            </p>
                            <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
                        </div>
                    </div>

                    <div class="chat-element right">
                        <a href="#" class="pull-right">
                            <img alt="image" class="img-circle" src="img/a4.jpg">
                        </a>
                        <div class="media-body text-right ">
                            <small class="pull-left">5m ago</small>
                            <strong>John Smith</strong>
                            <p class="m-b-xs">
                                Lorem Ipsum is simply dummy text of the printing.
                            </p>
                            <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
                        </div>
                    </div>

                    <div class="chat-element ">
                        <a href="#" class="pull-left">
                            <img alt="image" class="img-circle" src="img/a2.jpg">
                        </a>
                        <div class="media-body ">
                            <small class="pull-right">2h ago</small>
                            <strong>Mike Smith</strong>
                            <p class="m-b-xs">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            </p>
                            <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
                        </div>
                    </div>
                </div>
                </div>
                        <div class="chat-form">
                            <form role="form">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Message"></textarea>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-sm btn-primary m-t-n-xs"><strong>Send message</strong></button>
                                </div>
                            </form>
                        </div>
                </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div>
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-danger m-r-sm">12</button>
                                Peticiones
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary m-r-sm">28</button>
                                Contactados
                            </td>
                            <td>
                                <button type="button" class="btn btn-info m-r-sm">15</button>
								Recibidos
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-info m-r-sm">20</button>
                                Correspondencia	
                            </td>
                            <td>
                                <button type="button" class="btn btn-success m-r-sm">40</button>
                                Total Audiencias
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger m-r-sm">30</button>
                                Total Eventos
                            </td>
                        </tr>
                        
                        </tbody>
                    </table>
                </div>
                <div>
                    <div class="row">
                        <div class="col-lg-12">
                         <div class="widget navy-bg no-padding">
                    <div class="p-m">
                <h1 class="m-xs">Ultima Audiencia</h1>
                <small></small>				
                    </div>
					<div class="p-m">
					<img src="img/a4.jpg" class="img-circle circle-border m-b-md" alt="profile">
					</div>
                    <div class="flot-chart">
                        <div class="flot-chart-content" id="flot-chart1"></div>
                    </div>
                </div>
                        
                </div>
                        
                    </div>

                </div>
            </div>
        </div>
<!--Ultima audiencia-->
        </div>
        <div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> BuscarV &copy; 2016
            </div>
        </div>

        </div>
        </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>

    <!-- Jvectormap -->
    <script src="js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- Flot -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script>
        $(document).ready(function(){
            var d1 = [[1262304000000, 6], [1264982400000, 3057], [1267401600000, 20434], [1270080000000, 31982], [1272672000000, 26602], [1275350400000, 27826], [1277942400000, 24302], [1280620800000, 24237], [1283299200000, 21004], [1285891200000, 12144], [1288569600000, 10577], [1291161600000, 10295]];
            var d2 = [[1262304000000, 5], [1264982400000, 200], [1267401600000, 1605], [1270080000000, 6129], [1272672000000, 11643], [1275350400000, 19055], [1277942400000, 30062], [1280620800000, 39197], [1283299200000, 37000], [1285891200000, 27000], [1288569600000, 21000], [1291161600000, 17000]];

            var data1 = [
                { label: "Data 1", data: d1, color: '#17a084'},
                { label: "Data 2", data: d2, color: '#127e68' }
            ];
            $.plot($("#flot-chart1"), data1, {
                xaxis: {
                    tickDecimals: 0
                },
                series: {
                    lines: {
                        show: true,
                        fill: true,
                        fillColor: {
                            colors: [{
                                opacity: 1
                            }, {
                                opacity: 1
                            }]
                        }
                    },
                    points: {
                        width: 0.1,
                        show: false
                    }
                },
                grid: {
                    show: false,
                    borderWidth: 0
                },
                legend: {
                    show: false
                }
            });

            var data2 = [
                { label: "Data 1", data: d1, color: '#19a0a1'}
            ];
            $.plot($("#flot-chart2"), data2, {
                xaxis: {
                    tickDecimals: 0
                },
                series: {
                    lines: {
                        show: true,
                        fill: true,
                        fillColor: {
                            colors: [{
                                opacity: 1
                            }, {
                                opacity: 1
                            }]
                        }
                    },
                    points: {
                        width: 0.1,
                        show: false
                    }
                },
                grid: {
                    show: false,
                    borderWidth: 0
                },
                legend: {
                    show: false
                }
            });

            var data3 = [
                { label: "Data 1", data: d1, color: '#fbbe7b'},
                { label: "Data 2", data: d2, color: '#f8ac59' }
            ];
            $.plot($("#flot-chart3"), data3, {
                xaxis: {
                    tickDecimals: 0
                },
                series: {
                    lines: {
                        show: true,
                        fill: true,
                        fillColor: {
                            colors: [{
                                opacity: 1
                            }, {
                                opacity: 1
                            }]
                        }
                    },
                    points: {
                        width: 0.1,
                        show: false
                    }
                },
                grid: {
                    show: false,
                    borderWidth: 0
                },
                legend: {
                    show: false
                }
            });

            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green'
            });

            $(".todo-list").sortable({
                placeholder: "sort-highlight",
                handle: ".handle",
                forcePlaceholderSize: true,
                zIndex: 999999
            }).disableSelection();

            var mapData = {
                "US": 498,
                "SA": 200,
                "CA": 1300,
                "DE": 220,
                "FR": 540,
                "CN": 120,
                "AU": 760,
                "BR": 550,
                "IN": 200,
                "GB": 120,
                "RU": 2000
            };

            $('#world-map').vectorMap({
                map: 'world_mill_en',
                backgroundColor: "transparent",
                regionStyle: {
                    initial: {
                        fill: '#e4e4e4',
                        "fill-opacity": 1,
                        stroke: 'none',
                        "stroke-width": 0,
                        "stroke-opacity": 0
                    }
                },
                series: {
                    regions: [{
                        values: mapData,
                        scale: ["#1ab394", "#22d6b1"],
                        normalizeFunction: 'polynomial'
                    }]
                }
            });
        });
    </script>


</body>

</html>
