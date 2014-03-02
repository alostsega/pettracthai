<!DOCTYPE html>
<?php   
  include_once('../api/config.php');
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard - SB Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/sb/bootstrap.css" rel="stylesheet">
     <!-- Add custom CSS here -->
    <link href="../css/sb/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">

        <style type="text/css" title="currentStyle">
      @import "../css/media/css/demo_page.css";
      @import "../css/media/css/demo_table_jui.css";
      @import "../css/examples_support/themes/smoothness/jquery-ui-1.8.4.custom.css";
    </style>
    <script type="text/javascript" language="javascript" src="../css/media/js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="../css/media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf-8">
      $(document).ready(function() {
        oTable = $('#example').dataTable({
          "bJQueryUI": true,
          "sPaginationType": "full_numbers"
        });
      } );
    </script>
  </head>
  <body >
    <div id="wrapper">
            <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a  class="navbar-brand" href="#">PETtrac Thai</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li><a href="Certificate.php"><i class="fa fa-dashboard"></i> Certificate Management</a></li>
            <li><a href="Product.php"><i class="fa fa-bar-chart-o"></i> Product Management</a></li>
            <li  class="active"><a href="#"><i class="fa fa-table"></i> Order Management</a></li>
            <li><a href="User.php"><i class="fa fa-edit"></i> User Management</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Log Out <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li>
                <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
      <div id="page-wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h1>Order Management <small>Display Your Data</small></h1>
            <ol class="breadcrumb">
              <li class="active"><a href="Order.php"></i> Order List</a></li>
              <li class="active"></i> Payment Confirm</a></li>
            </ol>
          </div>
        </div><!-- /.row -->
         <div class="row">
          <div class="col-lg-12">
         <!--   <h2>Flot Charts</h2> -->
            <div class="panel panel-primary">
              <div class="panel-body">
                <div class="flot-chart">
                   <div >  
    <table cellpadding="0" cellspacing="0" border="0" class="display" id="example" >
      <thead>
          <tr>
            <td class="center"><b>Order ID</b></td>
            <td class="center"><b>Username</b></td>
            <td class="center"><b>Bank</b></td>
            <td class="center"><b>Date&Time</b></td>
            <td class="center"><b>Payment Slip</b></td>
            <td class="center"><b>Confirm</b></td>
          </tr>
        </thead>

        <tbody>
            <?php
              $sql = "SELECT `orderid`,username,bank,datetime,paymentslip,confirm FROM `payment`";
              $result = mysql_query($sql) or die("SQL Error 1: " . mysql_error());
               while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
            ?>
            <tr>
            <td align="center" width="10%"><?php echo $row['orderid']; ?></td>
            <td width="15%"><?php echo $row['username']; ?></td>
            <td width="15%" align="center" ><?php echo $row['bank']; ?></td>
            <td align="center " width="20%" ><?php echo $row['datetime']; ?></td>
            <td class="center" ="24%" ><?php echo $row['paymentslip']; ?></td>
            <td align="center" width="16%">
               <?php if($row['confirm'] == "Y")
                { ?> <button type="submit" class="btn btn-danger" id="delete">Delete</button> <?php } else { ?>
              <button type="submit" class="btn btn-success" id="yes">Yes</button>
              <button type="submit" class="btn btn-danger" id="no">No</button>  <?php } ?>
          </tr>                
          <?php
            }
          ?>
        </tbody>

    </table>    
    </div>
    <div class="spacer"></div>
  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- /.row -->
      </div>
   
      <style type="text/css">
        @import "../css/examples_support/syntax/css/shCore.css";
      </style>
      <script type="text/javascript" language="javascript" src="../css/examples_support/syntax/js/shCore.js"></script>
  </body>
</html>