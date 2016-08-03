
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>INSPINIA | JSON Examples</title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <!-- Add local styles, mostly for plugins css file -->

    <link href="/plugins/fullCalendarStyles?v=C2ewsEYdW-eM0uU9ZAQ9PU8k1J8AMjeOGJvYtC_cDxs1" rel="stylesheet"/>

     
    <!-- Add jQuery Style direct - used for jQGrid plugin -->
    <link href="/Scripts/plugins/jquery-ui/jquery-ui.css" rel="stylesheet" type="text/css" />

    <!-- Primary Inspinia style -->     
    <link href="/Content/css?v=Xefn4eEvaqbyztVPzDghwcf3tBYPe_gwBG8BYyJ1ssk1" rel="stylesheet"/>

    <link href="/font-awesome/css?v=DWzYKC0jd6clsSeB4EkEn6OEx9vHam-xVWrDW9id9NI1" rel="stylesheet"/>

    
</head>
<body>

    <!-- Skin configuration box -->
    <!-- <div class="theme-config">
    <div class="theme-config-box">
        <div class="spin-icon">
            <i class="fa fa-cogs fa-spin"></i>
        </div>
        <div class="skin-setttings">
            <div class="title">Configuration</div>
            <div class="setings-item">
                <span>
                    Collapse menu
                </span>

                <div class="switch">
                    <div class="onoffswitch">
                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="collapsemenu">
                        <label class="onoffswitch-label" for="collapsemenu">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="setings-item">
                <span>
                    Fixed sidebar
                </span>

                <div class="switch">
                    <div class="onoffswitch">
                        <input type="checkbox" name="fixedsidebar" class="onoffswitch-checkbox" id="fixedsidebar">
                        <label class="onoffswitch-label" for="fixedsidebar">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="setings-item">
                <span>
                    Top navbar
                </span>

                <div class="switch">
                    <div class="onoffswitch">
                        <input type="checkbox" name="fixednavbar" class="onoffswitch-checkbox" id="fixednavbar">
                        <label class="onoffswitch-label" for="fixednavbar">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="setings-item">
                <span>
                    Boxed layout
                </span>

                <div class="switch">
                    <div class="onoffswitch">
                        <input type="checkbox" name="boxedlayout" class="onoffswitch-checkbox" id="boxedlayout">
                        <label class="onoffswitch-label" for="boxedlayout">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="setings-item">
                <span>
                    Fixed footer
                </span>

                <div class="switch">
                    <div class="onoffswitch">
                        <input type="checkbox" name="fixedfooter" class="onoffswitch-checkbox" id="fixedfooter">
                        <label class="onoffswitch-label" for="fixedfooter">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="title">Skins</div>
            <div class="setings-item default-skin">
                <span class="skin-name ">
                    <a href="#" class="s-skin-0">
                        Default
                    </a>
                </span>
            </div>
            <div class="setings-item blue-skin">
                <span class="skin-name ">
                    <a href="#" class="s-skin-1">
                        Blue light
                    </a>
                </span>
            </div>
            <div class="setings-item yellow-skin">
                <span class="skin-name ">
                    <a href="#" class="s-skin-3">
                        Yellow/Purple
                    </a>
                </span>
            </div>
        </div>
    </div>
</div> -->

    <!-- Wrapper-->
    <!-- PageClass give you ability to specify custom style for specific view based on action -->
    <div id="wrapper" class="Index">

        <!-- Navigation -->
        <nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <span>
                        <img alt="image" class="img-circle" src="/Images/profile_small.jpg" />
                    </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold">David Williams</strong>
                            </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="/AppViews/Profile">Profile</a></li>
                        <li><a href="/AppViews/Contacts">Contacts</a></li>
                        <li><a href="/Mailbox/Inbox">Mailbox</a></li>
                        <li class="divider"></li>
                        <li><a href="/Pages/Login">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li class="">
                <a href="/"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class=""><a href="/">Dashboard v.1</a></li>
                    <li class=""><a href="/Dashboards/Dashboard_2">Dashboard v.2</a></li>
                    <li class=""><a href="/Dashboards/Dashboard_3">Dashboard v.3</a></li>
                    <li class=""><a href="/Dashboards/Dashboard_4_1">Dashboard v.4</a></li>
                    <li class=""><a href="/Dashboards/Dashboard_5">Dashboard v.5</a></li>
                </ul>
            </li>
            <li class="">
                <a href="/Layouts/Index"><i class="fa fa-diamond"></i> <span class="nav-label">Layouts</span> <span class="label label-primary pull-right">NEW</span></a>
            </li>
            <li class="">
                <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Graphs</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class=""><a href="/Graphs/Flot">Flot Charts</a></li>
                    <li class=""><a href="/Graphs/Morris">Morris.js Charts</a></li>
                    <li class=""><a href="/Graphs/Rickshaw">Rickshaw Charts</a></li>
                    <li class=""><a href="/Graphs/Chartjs">Chart.js</a></li>
                    <li class=""><a href="/Graphs/Chartist">Chartist</a></li>
                    <li class=""><a href="/Graphs/Peity">Peity Charts</a></li>
                    <li class=""><a href="/Graphs/Sparkline">Sparkline Charts</a></li>
                </ul>
            </li>
            <li class="">
                <a href="#"><i class="fa fa-envelope"></i> <span class="nav-label">Mailbox </span><span class="label label-warning pull-right">16/24</span></a>
                <ul class="nav nav-second-level collapse">
                    <li class=""><a href="/Mailbox/Inbox">Inbox</a></li>
                    <li class=""><a href="/Mailbox/EmailView">Email view</a></li>
                    <li class=""><a href="/Mailbox/ComposeEmail">Compose email</a></li>
                    <li class=""><a href="/Mailbox/EmailTemplates">Email templates</a></li>
                </ul>
            </li>
            <li class="">
                <a href="/Metrics/Index"><i class="fa fa-pie-chart"></i> <span class="nav-label">Metrics</span> </a>
            </li>
            <li class="">
                <a href="/Widgets/Index"><i class="fa fa-flask"></i> <span class="nav-label">Widgets</span> </a>
            </li>
            <li class="">
                <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Forms</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class=""><a href="/Forms/BasicFroms">Basic form</a></li>
                    <li class=""><a href="/Forms/Advanced">Advanced Plugins</a></li>
                    <li class=""><a href="/Forms/Wizard">Wizard</a></li>
                    <li class=""><a href="/Forms/FileUpload">File Upload</a></li>
                    <li class=""><a href="/Forms/TextEditor">Text Editor</a></li>
                </ul>
            </li>
            <li class="">
                <a href="#"><i class="fa fa-desktop"></i> <span class="nav-label">App Views</span>  <span class="pull-right label label-primary">SPECIAL</span></a>
                <ul class="nav nav-second-level collapse">
                    <li class=""><a href="/AppViews/Contacts">Contacts</a></li>
                    <li class=""><a href="/AppViews/Profile">Profile</a></li>
                    <li class=""><a href="/AppViews/Profile2">Profile v.2</a></li>
                    <li class=""><a href="/AppViews/Contacts2">Contacts v.2</a></li>
                    <li class=""><a href="/AppViews/Projects">Projects</a></li>
                    <li class=""><a href="/AppViews/ProjectDetail">Project detail</a></li>
                    <li class=""><a href="/AppViews/TeamsBoard">Teams board</a></li>
                    <li class=""><a href="/AppViews/SocialFeed">Social feed</a></li>
                    <li class=""><a href="/AppViews/Clients">Clients</a></li>
                    <li class=""><a href="/AppViews/OutlookView">Outlook view</a></li>
                    <li class=""><a href="/AppViews/VoteList">Vote list</a></li>
                    <li class=""><a href="/AppViews/FileManager">File manager</a></li>
                    <li class=""><a href="/AppViews/Calendar">Calendar</a></li>
                    <li class=""><a href="/AppViews/IssueTracker">Issue tracker</a></li>
                    <li class=""><a href="/AppViews/Blog">Blog</a></li>
                    <li class=""><a href="/AppViews/Article">Article</a></li>
                    <li class=""><a href="/AppViews/FAQ">FAQ</a></li>
                    <li class=""><a href="/AppViews/Timeline">Timeline</a></li>
                    <li class=""><a href="/AppViews/PinBoard">Pin board</a></li>
                </ul>
            </li>
            <li class="">
                <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Other Pages</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse ">
                    <li class=""><a href="/Pages/SearchResults">Search results</a></li>
                    <li class=""><a href="/Pages/LockScreen">Lockscreen</a></li>
                    <li class=""><a href="/Pages/Invoice">Invoice</a></li>
                    <li class=""><a href="/Pages/Login">Login</a></li>
                    <li class=""><a href="/Pages/Login_2">Login v.2</a></li>
                    <li class=""><a href="/Pages/ForgotPassword">Forgot password</a></li>
                    <li class=""><a href="/Pages/Register">Register</a></li>
                    <li class=""><a href="/Pages/NotFoundError">404 Page</a></li>
                    <li class=""><a href="/Pages/InternalServerError">500 Page</a></li>
                    <li class=""><a href="/Pages/EmptyPage">Empty page</a></li>
                </ul>
            </li>
            <li class="">
                <a href="#"><i class="fa fa-globe"></i> <span class="nav-label">Miscellaneous</span><span class="label label-info pull-right">NEW</span></a>
                <ul class="nav nav-second-level collapse">
                    <li class=""><a href="/Miscellaneous/Notification">Notification</a></li>
                    <li class=""><a href="/Miscellaneous/NestableList">Nestable list</a></li>
                    <li class=""><a href="/Miscellaneous/AgileBoard">Agile board</a></li>
                    <li class=""><a href="/Miscellaneous/Timeline_second_version">Timeline v.2</a></li>
                    <li class=""><a href="/Miscellaneous/Diff">Diff</a></li>
                    <li class=""><a href="/Miscellaneous/SweetAlert">Sweet alert</a></li>
                    <li class=""><a href="/Miscellaneous/IdleTimer">Idle timer</a></li>
                    <li class=""><a href="/Miscellaneous/Spinners">Spinners</a></li>
                    <li class=""><a href="/Miscellaneous/LiveFavicon">Live favicon</a></li>
                    <li class=""><a href="/Miscellaneous/Forum_view">Forum view</a></li>
                    <li class=""><a href="/Miscellaneous/GoogleMaps">Google maps</a></li>
                    <li class=""><a href="/Miscellaneous/CodeEditor">Code editor</a></li>
                    <li class=""><a href="/Miscellaneous/ModalWindow">Modal window</a></li>
                    <li class=""><a href="/Miscellaneous/Validation">Validation</a></li>
                    <li class=""><a href="/Miscellaneous/Tree_view">Tree view</a></li>
                    <li class=""><a href="/Miscellaneous/Chat_view">Chat view</a></li>
                    <li class=""><a href="/Miscellaneous/Masonry">Masonry</a></li>
                </ul>
            </li>
            <li class="">
                <a href="#"><i class="fa fa-flask"></i> <span class="nav-label">UI Elements</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class=""><a href="/UIElements/Typography">Typography</a></li>
                    <li class=""><a href="/UIElements/Icons">Icons</a></li>
                    <li class=""><a href="/UIElements/DraggablePanels">Draggable Panels</a></li>
                    <li class=""><a href="/UIElements/Buttons">Buttons</a></li>
                    <li class=""><a href="/UIElements/Video">Video</a></li>
                    <li class=""><a href="/UIElements/TablesPanels">Panels</a></li>
                    <li class=""><a href="/UIElements/Tabs">Tabs</a></li>
                    <li class=""><a href="/UIElements/NotificationsTooltips">Notifications & Tooltips</a></li>
                    <li class=""><a href="/UIElements/BadgesLabelsProgress">Badges, Labels, Progress</a></li>
                </ul>
            </li>
            <li class="">
                <a href="/GridOptions/Index"><i class="fa fa-laptop"></i> <span class="nav-label">Grid options</span></a>
            </li>
            <li class="">
                <a href="#"><i class="fa fa-table"></i> <span class="nav-label">Tables</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class=""><a href="/Tables/StaticTables">Static Tables</a></li>
                    <li class=""><a href="/Tables/DataTables">Data Tables</a></li>
                    <li class=""><a href="/Tables/FooTables">Foo Table</a></li>
                    <li class=""><a href="/Tables/jqGrid">jqGrid</a></li>
                </ul>
            </li>
            <li class="">
                <a href="#"><i class="fa fa-shopping-cart"></i> <span class="nav-label">E-commerce</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class=""><a href="/Ecommerce/ProductsGrid">Products grid</a></li>
                    <li class=""><a href="/Ecommerce/ProductsList">Products list</a></li>
                    <li class=""><a href="/Ecommerce/ProductEdit">Product edit</a></li>
                    <li class=""><a href="/Ecommerce/ProductDetail">Product detail</a></li>
                    <li class=""><a href="/Ecommerce/Orders">Orders</a></li>
                    <li class=""><a href="/Ecommerce/Payments">Credit Card form</a></li>
                </ul>
            </li>
            <li class="">
                <a href="#"><i class="fa fa-picture-o"></i> <span class="nav-label">Gallery</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li class=""><a href="/Gallery/BasicGallery">Lightbox Gallery</a></li>
                    <li class=""><a href="/Gallery/SlickCarusela">Slick Carusela</a></li>
                    <li class=""><a href="/Gallery/BootstrapCarusela">Bootstrap Carusela</a></li>

                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">Menu Levels </span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Third Level <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>

                        </ul>
                    </li>
                    <li><a href="#">Second Level Item</a></li>
                    <li>
                        <a href="#">Second Level Item</a>
                    </li>
                    <li>
                        <a href="#">Second Level Item</a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="/CSSAnimations/Index"><i class="fa fa-magic"></i> <span class="nav-label">CSS Animations </span><span class="label label-info pull-right">62</span></a>
            </li>
            <li class="special_link ">
                <a href="/Landing/Index"><i class="fa fa-star"></i> <span class="nav-label">Landing page</span></a>
            </li>
            <li class="special_link ">
                <a href="/Json/Index"><i class="fa fa-plug"></i> <span class="nav-label">JSON Examples</span></a>
            </li>
        </ul>
    </div>
</nav>

        <!-- Page wraper -->
        <div id="page-wrapper" class="gray-bg">

            <!-- Top Navbar -->
            <div class="row border-bottom">
    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" method="post" action="">
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
                            <a href="#" class="pull-left">
                                <img alt="image" class="img-circle" src="/Images/a7.jpg">
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
                            <a href="#" class="pull-left">
                                <img alt="image" class="img-circle" src="/Images/a4.jpg">
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
                            <a href="#" class="pull-left">
                                <img alt="image" class="img-circle" src="/Images/profile.jpg">
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
                            <a href="#">
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
                        <a href="#">
                            <div>
                                <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                <span class="pull-right text-muted small">12 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <div class="text-center link-block">
                            <a href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </li>
                </ul>
            </li>
            <li>
                <a href="/Pages/Login">
                    <i class="fa fa-sign-out"></i> Log out
                </a>
            </li>
            <li>
                <a class="right-sidebar-toggle">
                    <i class="fa fa-tasks"></i>
                </a>
            </li>
        </ul>
    </nav>
</div>

            <!-- Main view  -->
            



<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>JSON Example Page</h2>
        <ol class="breadcrumb">
            <li class="active">
                Basic example how you can use JSON data
            </li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Table example</h5>
                </div>
                <div class="ibox-content">
                    <table class="table table-striped" id="ajaxTable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Chart example</h5>
                </div>
                <div class="ibox-content">
                    <div class="flot-chart">
                        <div class="flot-chart-content" id="flot-bar-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-7">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Calendar example</h5>
                </div>
                <div class="ibox-content">
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Timeline example</h5>
                </div>
                <div class="ibox-content inspinia-timeline">
                </div>
            </div>
        </div>
    </div>
</div>






            <!-- Footer -->
            <div class="footer">
    <div class="pull-right">
        Example text
    </div>
    <div>
        <strong>Copyright</strong> Example Company &copy; 2015
    </div>
</div>


        </div>
        <!-- End page wrapper-->

        <!-- Right Sidebar -->
        <div id="right-sidebar">
    <div class="sidebar-container">

        <ul class="nav nav-tabs navs-3">

            <li class="active">
                <a data-toggle="tab" href="#tab-1">
                    Notes
                </a>
            </li>
            <li>
                <a data-toggle="tab" href="#tab-2">
                    Projects
                </a>
            </li>
            <li class="">
                <a data-toggle="tab" href="#tab-3">
                    <i class="fa fa-gear"></i>
                </a>
            </li>
        </ul>

        <div class="tab-content">


            <div id="tab-1" class="tab-pane active">

                <div class="sidebar-title">
                    <h3> <i class="fa fa-comments-o"></i> Latest Notes</h3>
                    <small><i class="fa fa-tim"></i> You have 10 new message.</small>
                </div>

                <div>

                    <div class="sidebar-message">
                        <a href="#">
                            <div class="pull-left text-center">
                                <img alt="image" class="img-circle message-avatar" src="/Images/a1.jpg">

                                <div class="m-t-xs">
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                </div>
                            </div>
                            <div class="media-body">

                                There are many variations of passages of Lorem Ipsum available.
                                <br>
                                <small class="text-muted">Today 4:21 pm</small>
                            </div>
                        </a>
                    </div>
                    <div class="sidebar-message">
                        <a href="#">
                            <div class="pull-left text-center">
                                <img alt="image" class="img-circle message-avatar" src="/Images/a2.jpg">
                            </div>
                            <div class="media-body">
                                The point of using Lorem Ipsum is that it has a more-or-less normal.
                                <br>
                                <small class="text-muted">Yesterday 2:45 pm</small>
                            </div>
                        </a>
                    </div>
                    <div class="sidebar-message">
                        <a href="#">
                            <div class="pull-left text-center">
                                <img alt="image" class="img-circle message-avatar" src="/Images/a3.jpg">

                                <div class="m-t-xs">
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                Mevolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                <br>
                                <small class="text-muted">Yesterday 1:10 pm</small>
                            </div>
                        </a>
                    </div>
                    <div class="sidebar-message">
                        <a href="#">
                            <div class="pull-left text-center">
                                <img alt="image" class="img-circle message-avatar" src="/Images/a4.jpg">
                            </div>

                            <div class="media-body">
                                Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
                                <br>
                                <small class="text-muted">Monday 8:37 pm</small>
                            </div>
                        </a>
                    </div>
                    <div class="sidebar-message">
                        <a href="#">
                            <div class="pull-left text-center">
                                <img alt="image" class="img-circle message-avatar" src="/Images/a8.jpg">
                            </div>
                            <div class="media-body">

                                All the Lorem Ipsum generators on the Internet tend to repeat.
                                <br>
                                <small class="text-muted">Today 4:21 pm</small>
                            </div>
                        </a>
                    </div>
                    <div class="sidebar-message">
                        <a href="#">
                            <div class="pull-left text-center">
                                <img alt="image" class="img-circle message-avatar" src="/Images/a7.jpg">
                            </div>
                            <div class="media-body">
                                Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                                <br>
                                <small class="text-muted">Yesterday 2:45 pm</small>
                            </div>
                        </a>
                    </div>
                    <div class="sidebar-message">
                        <a href="#">
                            <div class="pull-left text-center">
                                <img alt="image" class="img-circle message-avatar" src="/Images/a3.jpg">

                                <div class="m-t-xs">
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                The standard chunk of Lorem Ipsum used since the 1500s is reproduced below.
                                <br>
                                <small class="text-muted">Yesterday 1:10 pm</small>
                            </div>
                        </a>
                    </div>
                    <div class="sidebar-message">
                        <a href="#">
                            <div class="pull-left text-center">
                                <img alt="image" class="img-circle message-avatar" src="/Images/a4.jpg">
                            </div>
                            <div class="media-body">
                                Uncover many web sites still in their infancy. Various versions have.
                                <br>
                                <small class="text-muted">Monday 8:37 pm</small>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

            <div id="tab-2" class="tab-pane">

                <div class="sidebar-title">
                    <h3> <i class="fa fa-cube"></i> Latest projects</h3>
                    <small><i class="fa fa-tim"></i> You have 14 projects. 10 not completed.</small>
                </div>

                <ul class="sidebar-list">
                    <li>
                        <a href="#">
                            <div class="small pull-right m-t-xs">9 hours ago</div>
                            <h4>Business valuation</h4>
                            It is a long established fact that a reader will be distracted.

                            <div class="small">Completion with: 22%</div>
                            <div class="progress progress-mini">
                                <div style="width: 22%;" class="progress-bar progress-bar-warning"></div>
                            </div>
                            <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="small pull-right m-t-xs">9 hours ago</div>
                            <h4>Contract with Company </h4>
                            Many desktop publishing packages and web page editors.

                            <div class="small">Completion with: 48%</div>
                            <div class="progress progress-mini">
                                <div style="width: 48%;" class="progress-bar"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="small pull-right m-t-xs">9 hours ago</div>
                            <h4>Meeting</h4>
                            By the readable content of a page when looking at its layout.

                            <div class="small">Completion with: 14%</div>
                            <div class="progress progress-mini">
                                <div style="width: 14%;" class="progress-bar progress-bar-info"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="label label-primary pull-right">NEW</span>
                            <h4>The generated</h4>
                            <!--<div class="small pull-right m-t-xs">9 hours ago</div>-->
                            There are many variations of passages of Lorem Ipsum available.
                            <div class="small">Completion with: 22%</div>
                            <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="small pull-right m-t-xs">9 hours ago</div>
                            <h4>Business valuation</h4>
                            It is a long established fact that a reader will be distracted.

                            <div class="small">Completion with: 22%</div>
                            <div class="progress progress-mini">
                                <div style="width: 22%;" class="progress-bar progress-bar-warning"></div>
                            </div>
                            <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="small pull-right m-t-xs">9 hours ago</div>
                            <h4>Contract with Company </h4>
                            Many desktop publishing packages and web page editors.

                            <div class="small">Completion with: 48%</div>
                            <div class="progress progress-mini">
                                <div style="width: 48%;" class="progress-bar"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="small pull-right m-t-xs">9 hours ago</div>
                            <h4>Meeting</h4>
                            By the readable content of a page when looking at its layout.

                            <div class="small">Completion with: 14%</div>
                            <div class="progress progress-mini">
                                <div style="width: 14%;" class="progress-bar progress-bar-info"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="label label-primary pull-right">NEW</span>
                            <h4>The generated</h4>
                            <!--<div class="small pull-right m-t-xs">9 hours ago</div>-->
                            There are many variations of passages of Lorem Ipsum available.
                            <div class="small">Completion with: 22%</div>
                            <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                        </a>
                    </li>

                </ul>

            </div>

            <div id="tab-3" class="tab-pane">

                <div class="sidebar-title">
                    <h3><i class="fa fa-gears"></i> Settings</h3>
                    <small><i class="fa fa-tim"></i> You have 14 projects. 10 not completed.</small>
                </div>

                <div class="setings-item">
                    <span>
                        Show notifications
                    </span>
                    <div class="switch">
                        <div class="onoffswitch">
                            <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example">
                            <label class="onoffswitch-label" for="example">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="setings-item">
                    <span>
                        Disable Chat
                    </span>
                    <div class="switch">
                        <div class="onoffswitch">
                            <input type="checkbox" name="collapsemenu" checked class="onoffswitch-checkbox" id="example2">
                            <label class="onoffswitch-label" for="example2">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="setings-item">
                    <span>
                        Enable history
                    </span>
                    <div class="switch">
                        <div class="onoffswitch">
                            <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example3">
                            <label class="onoffswitch-label" for="example3">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="setings-item">
                    <span>
                        Show charts
                    </span>
                    <div class="switch">
                        <div class="onoffswitch">
                            <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example4">
                            <label class="onoffswitch-label" for="example4">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="setings-item">
                    <span>
                        Offline users
                    </span>
                    <div class="switch">
                        <div class="onoffswitch">
                            <input type="checkbox" checked name="collapsemenu" class="onoffswitch-checkbox" id="example5">
                            <label class="onoffswitch-label" for="example5">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="setings-item">
                    <span>
                        Global search
                    </span>
                    <div class="switch">
                        <div class="onoffswitch">
                            <input type="checkbox" checked name="collapsemenu" class="onoffswitch-checkbox" id="example6">
                            <label class="onoffswitch-label" for="example6">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="setings-item">
                    <span>
                        Update everyday
                    </span>
                    <div class="switch">
                        <div class="onoffswitch">
                            <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example7">
                            <label class="onoffswitch-label" for="example7">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="sidebar-content">
                    <h4>Settings</h4>
                    <div class="small">
                        I belive that. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        And typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                    </div>
                </div>

            </div>
        </div>

    </div>



</div>



    </div>
    <!-- End wrapper-->

    <!-- Section for main scripts render -->
    <script src="/bundles/jquery?v=yMmPM1TxecYcoWtCWW3jYgH0fr9kiAasOfb-W5I001A1"></script>

    <script src="/bundles/bootstrap?v=JLknwTB2_ayTD-BKepbggojBJvg0d97oT92OUfRNMA41"></script>

    <script src="/plugins/slimScroll?v=Uin95EwzswHK3MjnPYJT0IIu_sfIoxGwdr5n_SnamSE1"></script>

    <script src="/bundles/inspinia?v=UdcIao8bs4BGni0cb29tCJdUmu9bPzsPJ8sVDm_WESc1"></script>


    <!-- Skin config script - only for demo purpose-->
    <script src="/bundles/skinConfig?v=sbzNA1C986FTcLz6b7THwXKLpwhN_SMSc8EYYkYBjMg1"></script>


    <!-- Handler for local scripts -->
    
    <script src="/plugins/flot?v=GSlyu5Z68wZ3dLPNF8DV6afcu0ksLzMsNKhpyBb4lZw1"></script>

    <script src="/plugins/fullCalendar?v=GVhfK6jvNI8ZRWfVPlvJW_ntTOuhafrf8SZ8WPaeb6M1"></script>


    <script type="text/javascript">

        // Creat JSON url to controller
        var chartDataUrl = '/Json/flotJsonData';
        var tableDataUrl = '/Json/tableJsonData';
        var eventsDataUrl = '/Json/calendarEvents';
        var tasksDataUrl = '/Json/tasksJsonData';

        $(document).ready(function () {

            // Options for bar chart
            var barOptions = {series: {bars: {show: true,barWidth: 0.6,fill: true,fillColor: {colors: [{opacity: 0.8}, {opacity: 0.8}]}}},
                xaxis: {tickDecimals: 0},
                colors: ["#1ab394"],
                grid: {color: "#999999",hoverable: true,clickable: true,tickColor: "#D4D4D4",borderWidth: 0},
                legend: {show: true},
                tooltip: true,
                tooltipOpts: {content: "Item: %x, Value: %y"}
            };

            // Ajax call for chart data
            $.ajax({
                url: chartDataUrl,
                method: 'GET',
                dataType: 'json',
                success: function (data) {
                    $.plot($("#flot-bar-chart"), [data], barOptions);
                }
            });

            // Ajax call for table data
            $.ajax({
                url: tableDataUrl,
                method: 'GET',
                dataType: 'json',
                success: function (data) {
                    var div = $('#ajaxTable');
                    $.each(data, function (i, item) {
                        div.append(
                            $('<tr>')
                                .append($('<td>').html(item.Name)).append($('<td>').html(item.Position)).append($('<td>').html(item.Office)).append($('<td>').html(item.Age))
                            );
                    })
                }
            });

            // Calendar with ajax data
            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                editable: true,
                // Link to JSON data
                events: eventsDataUrl
            });

            // Ajax call for timeline data
            $.ajax({
                url: tasksDataUrl,
                method: 'GET',
                dataType: 'json',
                success: function (data) {
                    var timelineDiv = $('.inspinia-timeline');
                    $.each(data, function (i, item) {
                        addTimelineTask(timelineDiv, item);
                    })
                }
            });

            // Simple function to append new timeline element
            function addTimelineTask(timelineDiv, task) {
                switch (task.Type) {
                    case 'Call': iconType = "phone";
                        break;
                    case 'Meeting': iconType = "coffee";
                        break;
                    case 'Chat': iconType = "comments";
                        break;
                    case 'File': iconType = "file-text";
                        break;
                    default: iconType = "briefcase";
                }
                timelineDiv.append($('<div class="timeline-item">').html('<div class="row"> <div class="col-xs-3 date"><i class="fa fa-' + iconType + '"></i> ' + task.Time + ' <br></div> <div class="col-xs-7 content"><p class="m-b-xs"><strong>' + task.Title + '</strong></p> <p> ' + task.Desc + '</p> </div> </div>'))
            };
        });
    </script>

</body>
</html>
