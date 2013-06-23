<!doctype html>
<html lang="en" ng-app="myApp">
<head>
  <meta charset="UTF-8">
  <title>Code Igniter</title>
  <!-- <script src="<?=base_url()?>static/js/jquery.min.js"></script> -->
  <script src="<?=base_url()?>static/js/angular.min.js"></script>
  <link rel="stylesheet" href="<?=base_url()?>static/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>static/css/style.css">
  <script src="<?=base_url()?>static/js/bootstrap.min.js"></script>
  <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>

</head>
<body>
  <div class="container">
    <div ng-controller="AlertCtrl">
      <alert ng-repeat="alert in alerts" type="alert.type" close="closeAlert($index)">{{alert.msg}}</alert>
    </div>
    <?php echo $content; ?>
  </div>
  <script src="<?=base_url()?>static/js/controller.js"></script>
</body>
</html>