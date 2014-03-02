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
        function restoreRow ( oTable, nRow )
        {
          var aData = oTable.fnGetData(nRow);
          var jqTds = $('>td', nRow);
          
          for ( var i=0, iLen=jqTds.length ; i<iLen ; i++ ) {
            oTable.fnUpdate( aData[i], nRow, i, false );
          }
          
          oTable.fnDraw();
        }

      function editRow ( oTable, nRow )
      {
        var aData = oTable.fnGetData(nRow);
        var jqTds = $('>td', nRow);
        if(aData[4] == "กำลังดำเนินการ")
        {
          jqTds[4].innerHTML = '<select id="process" class="form-control"> <option value ="กำลังดำเนินการ"selected>กำลังดำเนินการ</option> '+
                               '<option value = "จัดส่งสินค้า">จัดส่งสินค้า</option> '+
                               '<option value = "ส่งสินค้าเรียบร้อย" >ส่งสินค้าเรียบร้อย</option></select>';
        }
        else if(aData[4] == "จัดส่งสินค้า")
        {
          jqTds[4].innerHTML = '<select id="process" class="form-control"> <option value ="กำลังดำเนินการ">กำลังดำเนินการ</option> '+
                               '<option value = "จัดส่งสินค้า" selected>จัดส่งสินค้า</option> '+
                               '<option value = "ส่งสินค้าเรียบร้อย">ส่งสินค้าเรียบร้อย</option></select>';
        }
        else if(aData[4] == "ส่งสินค้าเรียบร้อย")
        {
          jqTds[4].innerHTML = '<select id="process" class="form-control"> <option value ="กำลังดำเนินการ">กำลังดำเนินการ</option> '+
                               '<option value = "จัดส่งสินค้า" >จัดส่งสินค้า</option> '+
                               '<option value = "ส่งสินค้าเรียบร้อย" selected>ส่งสินค้าเรียบร้อย</option></select>';
        }

        jqTds[5].innerHTML =  '<button type="button" class="btn btn-success" id="edit">Edit</button> '+
                                '<button type="button" class="btn btn-warning" id="edit">Cancel</button>';
      }

      function saveRow ( oTable, nRow )
      {
        var aData = oTable.fnGetData(nRow);
        var jqInputs = document.getElementById('process').value;

        $.ajax({
                  url: "Order_edit.php?orderid=" + aData[0] +"&status=" + jqInputs ,
                   type: 'POST',
                   success: function(result) {
                 }});
        oTable.fnUpdate( jqInputs, nRow, 4, false );
      }

      $(document).ready(function() {
        oTable = $('#example').dataTable({
          "bJQueryUI": true,
          "sPaginationType": "full_numbers"
        });
         $('#example button#delete').live('click', function (e) {
          e.preventDefault();
            
          var nRow = $(this).parents('tr')[0];
          var aData = oTable.fnGetData(nRow);
          if(confirm('Delete Order ' + aData[0] + '  ?' )==true)
          {
              oTable.fnDeleteRow( nRow );

              $.ajax({
                  url: "Order_delete.php?orderid=" + aData[0] ,
                   type: 'POST',
                   success: function(result) {
                    alert(result);
                 }});
          }
         } );

        var nEditing = null;  
        $('#example button#edit').live('click', function (e) {
            e.preventDefault();
            var nRow = $(this).parents('tr')[0];
              
              if ( nEditing !== null && nEditing != nRow ) {
                /* Currently editing - but not this row - restore the old before continuing to edit mode */
                restoreRow( oTable, nEditing );
                editRow( oTable, nRow );
                nEditing = nRow;
              }
              else if ( nEditing == nRow && this.innerHTML == "Cancel" ) {
                 /* This row is being edited and should be saved */
                 restoreRow( oTable, nEditing );
                 nEditing = null;
              }
              else if ( nEditing == nRow && this.innerHTML == "Edit" ) {
                /* Editing this row and want to save it */
                  saveRow( oTable, nEditing );
                  restoreRow( oTable, nEditing );
                  nEditing = null;
              }
              else {
                /* No edit in progress - let's start one */
                editRow( oTable, nRow );
                nEditing = nRow;
              }
        } );
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
              <li class="active"></i> Order List</a></li>
              <li class="active"><a href="Payment.php"></i> Payment Confirm</a></li>
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
            <td class="center"><b>Address</b></td>
            <td class="center"><b>Total Price</b></td>
            <td class="center"><b>Status</b></td>
            <td class="center"><b>Action</b></td>
          </tr>
        </thead>

        <tbody>
          <?php
              $sql = "SELECT `orderid`,username,orderaddress,totalprice,status FROM `order`";
              $result = mysql_query($sql) or die("SQL Error 1: " . mysql_error());
               while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
            ?>
            <tr>
            <td align="center" width="10%"><?php echo $row['orderid']; ?></td>
            <td width="15%"><?php echo $row['username']; ?></td>
            <td width="25%"><?php echo $row['orderaddress']; ?></td>
            <td align="right" width="13%" ><?php echo number_format($row['totalprice'],2,'.',''); ?></td>
            <td class="center" ="24%" ><?php echo $row['status']; ?></td>
            <td align="center" width="16%">
               <?php if($row['status'] == "กำลังดำเนินการ" || $row['status'] == "จัดส่งสินค้า" || $row['status'] == "ส่งสินค้าเรียบร้อย" )
                { ?> <button type="submit" class="btn btn-info" id="edit">Edit</button> <?php } ?>
               <button type="submit" class="btn btn-danger" id="delete">Delete</button></td>    
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