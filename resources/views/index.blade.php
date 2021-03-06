<html>

<head>
    <!-- Css Files -->
    <link href="bower_components/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">
    <link href="bower_components/angular-busy/angular-busy.css" rel="stylesheet">

    <!-- AngularJs -->
    <script type="application/javascript" src="bower_components/angular.min.js"></script>
    <script type="application/javascript" src="bower_components/angular-ui-router.js"></script>
    <script type="application/javascript" src="bower_components/angular-animate/angular-animate.min.js"></script>
    <script type="application/javascript" src="bower_components/angular-breadcrumb/dist/angular-breadcrumb.min.js"></script>
    <script type="application/javascript" src="bower_components/angular-busy/angular-busy.js"></script>

    <!-- Js Libraries -->
    <script type="application/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
    <script type="application/javascript" src="bower_components/bootstrap/js/bootstrap.min.js"></script>

    <!-- AngularApp -->
    <script type="application/javascript" src="app/app.js"></script>
    <script type="application/javascript" src="app/modules/app.constants.js"></script>
    <script type="application/javascript" src="app/modules/app.routes.js"></script>
    <script type="application/javascript" src="app/common/app.common.js"></script>
    <script type="application/javascript" src="app/common/app.directives.js"></script>

    <!--Controllers-->
    <script type="application/javascript" src="app/controllers/SampleCtrl.js"></script>
   


    <base href="/">

</head>

<body ng-app="APPNAME"> <!-- has to be the same as the one in app/app.js-->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-toggle">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#/">APP</a>
    </div>
    <div class="collapse navbar-collapse" id="nav-toggle">
        <ul class="nav navbar-nav">
            <li data-ui-sref-active="active"><a data-ui-sref="route-reference">MENU ITEM 1</a></li>
        </ul>
        <form class="navbar-form navbar-right" role="search">
            <input type="text" class="form-control" placeholder="Search">
        </form>
    </div>
</nav>

<div class="container">
    <div data-ncy-breadcrumb></div>
    <div data-ui-view></div>
</div>

<footer id="footer" class="footer">
    <div class="floatright">
        <p class="text-muted"><a href="http://vikkio.it">vikkio</a></p>
    </div>
</footer>


</body>

</html>