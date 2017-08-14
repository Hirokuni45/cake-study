<?php
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php echo $this->Html->charset(); ?>
  <title>
    <?php echo $cakeDescription ?>:
    <?php echo $this->fetch('title'); ?>
  </title>
  <!-- Bootstrap Core CSS -->
  <link href="/css/admin/bootstrap.min.css" rel="stylesheet">
  <!-- fontawesome -->
  <link href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="/css/admin/style.css" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>

    <div id="wrapper">

      <!-- Navigation -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">SB Admin</a>
      </div>
      <!-- Top Menu Items -->
      <ul class="nav navbar-right top-nav">
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?= $loginUser['username']; ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <!--<li>
                <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
              </li>
              <li>
                  <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
              </li>
              <li>
                <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
              </li>
              <li class="divider"></li>-->
              <li>
                <?=($this->Html->link('ログアウト', 'logout')); ?>
              </li>
            </ul>
          </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li class="active">
              <a href="/admin/posts/"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>
            <li>
              <a href="/admin/users/"><i class="fa fa-fw fa-user"></i> User</a>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

        <div class="container-fluid">

          <div class="row">
            <?= $this->fetch('content'); ?>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="/js/admin/bootstrap.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="/js/admin/raphael.min.js"></script>
<script src="/js/admin/morris.min.js"></script>
<script src="/js/admin/morris-data.js"></script>

</body></html>

