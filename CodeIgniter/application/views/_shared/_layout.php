<!doctype html>
<html lang="en" ng-app="app">
<head>
  <meta charset="UTF-8">
  <title>CodeIgniter</title>
  <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>

  <!-- jQuery -->
  <script type="text/javascript" src="/public/lib/jquery/jquery.min.js"></script>

  <!-- Kendo -->
  <script type="text/javascript" src="/public/lib/kendo-ui/js/kendo.web.min.js"></script>
  <link rel="stylesheet" type="text/css" href="/public/lib/kendo-ui/styles/kendo.common-bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="/public/lib/kendo-ui/styles/kendo.bootstrap.min.css"/>

  <!-- Angular -->
  <script type="text/javascript" src="/public/lib/angular/angular.min.js"></script>
  <script type="text/javascript" src="/public/js/controllers/app.min.js"></script>
  <script type="text/javascript" src="/public/lib/angular-kendo-ui/build/angular-kendo.min.js"></script>

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="/public/lib/bootstrap-css/css/bootstrap.min.css"/>

  <!-- Messenger -->
  <script type="text/javascript" src="/public/lib/messenger/build/js/messenger.min.js"></script>
  <script type="text/javascript" src="/public/lib/messenger/build/js/messenger-theme-flat.js"></script>
  <link rel="stylesheet" type="text/css" href="/public/lib/messenger/build/css/messenger.css"/>
  <link rel="stylesheet" type="text/css" href="/public/lib/messenger/build/css/messenger-theme-air.css"/>



</head>
<body ng-controller="appCtrl">
  <div class="container">
    <?php echo $content ?>
  </div>
</body>
</html>