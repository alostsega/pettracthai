<?php
  session_start();
  include_once('../api/config.php');


  if(isset($_SESSION['username']) && isset($_SESSION['class'])){
      if ($_SESSION['class'] == 'admin' || $_SESSION['class'] == "coadmin" ) {
      } 
      else if ($_SESSION['class'] == 'user') {
        echo "2";
        echo "<script language='javascript'>";
        echo "window.location.href='../template.html';";
        echo "</script>";
      } 
      else{
        echo "<script language='javascript'>";
        echo "window.location.href='login.php';";
        echo "</script>";
      }
    }
    else{
      echo "<script language='javascript'>";
      echo "window.location.href='login.php';";
      echo "</script>";
    }
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
      function editRow ( oTable, nRow )
        {
            var aData = oTable.fnGetData(nRow);
            var jqTds = $('>td', nRow);
            full_detail = aData[5].substring(80,aData[5].length - 11);
            jqTds[0].innerHTML = aData[0];
            jqTds[1].innerHTML = '<input class="form-control" type="text" value="'+aData[1]+'">';
            jqTds[2].innerHTML = '<input class="form-control" type="text" value="'+aData[2]+'">';
            jqTds[3].innerHTML = '<textarea class="form-control" rows="3"  id="temp_detail">' + full_detail + '</textarea>';
            jqTds[4].innerHTML = '<button type="button" class="btn btn-success" id="edit">Edit</button> '+
                                  '<button type="button" class="btn btn-warning" id="edit">Cancel</button>';
            jqTds[5].innerHTML = '<div style="display:none"></div>'
        }
      function saveRow ( oTable, nRow )
        {
            var aData = oTable.fnGetData(nRow);
            var jqInputs = $('input', nRow);
            var detail_full = document.getElementById('temp_detail').value;
            if(parseFloat(jqInputs[1].value) > 0 && jqInputs[0].value != "" && detail_full != ""){
              var cutdetail;

              if (detail_full.length > 60) {
                cutdetail = detail_full.substring(0,60) + '...';
              }
              else{
                cutdetail = detail_full;
              }
              ;
              
              oTable.fnUpdate( aData[0], nRow, 0, false );
              oTable.fnUpdate( jqInputs[0].value, nRow, 1, false );
              oTable.fnUpdate( jqInputs[1].value, nRow, 2, false );
              oTable.fnUpdate( cutdetail, nRow, 3, false );
              oTable.fnUpdate( '<button type="button" class="btn btn-info" id="edit">Edit</button> '+
                                ' <button type="button" class="btn btn-danger" id="delete">Delete</button>', nRow, 4, false );
              oTable.fnUpdate( '<textarea class="form-control" rows="3" style="display:none;" id="hiddenDetail">'+
                                     detail_full+'</textarea>', nRow, 5, false );
              $.ajax({
                  url: "Product_edit.php?item=" + aData[0] + "&pname=" + jqInputs[0].value + "&price=" + jqInputs[1].value +"&detail=" +detail_full,
                  type: 'POST',
                  success: function(result) {
                }});

              oTable.fnDraw(false);
              return true;
            }else if( jqInputs[0].value == ""){
                alert(" Product Name can't empty ");
                return false;
            }else if( jqInputs[1].value == ""){
                alert(" Price can't empty");
                return false;
            }else if( detail_full == ""){
                alert(" detail can't empty");
                return false;
            }else if( parseFloat(jqInputs[1].value) <= 0 || isNaN(jqInputs[1].value) ){
                alert(" price is incorrect ");
                return false;
            };
        }
        function restoreRow ( oTable, nRow )
        {
            var aData = oTable.fnGetData(nRow);
            var jqTds = $('>td', nRow);
            
            for ( var i=0, iLen=jqTds.length ; i<iLen ; i++ ) {
              oTable.fnUpdate( aData[i], nRow, i, false );
            }
            
            oTable.fnDraw();
            oTable.fnDisplayRow( oTable.fnGetNodes()[nRow] );
        }

      $(document).ready(function() {
        oTable = $('#example').dataTable({
          "bJQueryUI": true,
          "sPaginationType": "full_numbers",
          "bAutoWidth": false,
           "aoColumnDefs": [  { 'bSortable': false, 'aTargets': [ 4,5 ] } ]
        });

        nEditing = null;

        $('button#add').click( function (e) {
            e.preventDefault();
            var price = document.getElementById('price').value;
            if(parseFloat(price) > 0 && document.getElementById('pname').value != "" && document.getElementById('detail').value != ""){
              $.ajax({
                  url: "Product_add.php?pname=" + document.getElementById('pname').value + "&price=" + price +"&detail=" +document.getElementById('detail').value,
                  type: 'POST',
                  success: function(result) {
                    var detail = document.getElementById('detail').value;
                    if (detail.length > 60) {
                      detail = detail.substring(0,60) + '...';
                    };
                    var aiNew = oTable.fnAddData( [ result, 
                                              document.getElementById('pname').value, 
                                              document.getElementById('price').value, 
                                              detail,
                                              '<button type="button" class="btn btn-info" id="edit">Edit</button> '+
                                              ' <button type="button" class="btn btn-danger" id="delete">Delete</button>',
                                              '<textarea class="form-control" rows="3" style="display:none;" id="hiddenDetail">'+ 
                                              document.getElementById('detail').value +
                                              '</textarea>'
                                               ] );
                    document.getElementById('pname').value = '';
                    document.getElementById('price').value = '';
                    document.getElementById('detail').value = '';

                }});

              
              var nRow = oTable.fnGetNodes( aiNew[0] );
              restoreRow( oTable, nEditing );
              nEditing = null;
            }else if( document.getElementById('pname').value == ""){
                alert(" Product Name can't empty ");
            }else if( document.getElementById('price').value == ""){
                alert(" Price can't empty");
            }else if( document.getElementById('detail').value == ""){
                alert(" detail can't empty");
            }else if( parseFloat(price) <= 0 || isNaN(price)){
                alert(" price is incorrect ");
            };
        } );

        $('#example button#edit').live('click', function (e) {
           e.preventDefault();
             
            /* Get the row as a parent of the link that was clicked on */
           var nRow = $(this).parents('tr')[0];
            
           if ( nEditing !== null && nEditing != nRow ) {
               restoreRow( oTable, nEditing );
               editRow( oTable, nRow );
               nEditing = nRow;
           }
           else if ( nEditing == nRow && this.innerHTML == "Cancel" ) {
               restoreRow( oTable, nEditing );
               nEditing = null;
           }
           else if ( nEditing == nRow && this.innerHTML == "Edit" ) {
               if(saveRow( oTable, nEditing )){
                  nEditing = null;
             };
           }
           else {
               editRow( oTable, nRow );
               nEditing = nRow;
           }
        } );
      } );
      
      

      $('#example button#delete').live('click', function (e) {
        e.preventDefault();
        var nRow = $(this).parents('tr')[0];
        var aData = oTable.fnGetData(nRow);
        if(confirm('Delete ' + aData[0] +'  : ' + aData[1] )==true)
        {
            oTable.fnDeleteRow( nRow );

            $.ajax({
                    url: "Product_delete.php?item=" + aData[0] ,
                    type: 'POST',
                    success: function(result) {
                  }});
          
        }
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
            <li  class="active"><a href="#"><i class="fa fa-bar-chart-o"></i> Product Management</a></li>
            <li><a href="Order.php"><i class="fa fa-table"></i> Order Management</a></li>
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
            <h1>Product Management </h1>
            <ol class="breadcrumb">
              <li class="active"></i> Product List</a></li>
            </ol>
          </div>
        </div><!-- /.row -->
         <div class="row">
          <div class="col-lg-12">
         <!--   <h2>Flot Charts</h2> -->
            <div class="panel panel-primary" style="border-right-style:hidden;border-left-style:hidden;border-bottom-style:hidden;">
              <div class="panel-body">
                <div class="flot-chart">
                   <div >  
    <table cellpadding="0" cellspacing="0" border="0" class="display" id="example" >
      <thead>
          <tr>
            <td class="center" style="width:120px;"><b>Product id</b></td>
            <td class="center" style="width:220px;"><b>Product Name</b></td>
            <td class="center" style="width:150px;"><b>Price</b></td>
            <td class="center"><b>detail</b></td>
            <td class="center" style="width:200px;"><b>Action</b></td>
            <td style="width:1px;"><div style="display:none;"></div></td>
          </tr>
        </thead>
        <tbody>
			<?php 
        		$sql = "SELECT `productid`, `productname`, `price`, `detail` FROM `product`";
            $result = mysql_query($sql) or die("SQL Error 1: " . mysql_error());
            while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
              if (strlen($row['detail']) >= 60) {
                $subDetail = substr($row['detail'],0, 60) . "...";
              }
              else{
                $subDetail = $row['detail'];
              }
        	?>
        	<tr>
            <td style="width:110px;"><?php echo $row['productid']; ?></td>
            <td style="width:220px;"><?php echo $row['productname']; ?></td>
            <td style="width:150px;"><?php echo $row['price']; ?></td>
            <td ><?php echo $subDetail ?></td>
            <td  style="width:200px;">
            	<button type="submit" class="btn btn-info" id="edit">Edit</button>
        		  <button type="submit" class="btn btn-danger" id="delete">Delete</button>
    		    </td>
            <td style="width:1px;"><textarea class="form-control" rows="3" style="display:none;" id="hiddenDetail"><?php echo $row['detail']; ?></textarea></td>
          	</tr>
          	<?php
          	}
       		?>
        </tbody>

    </table>  
    <div style="position:relative; top:20px; width:900px;">
    	<form class="form-horizontal" role="form">
    		<div class="form-group">
			    <label class="col-sm-2 control-label">Product Name</label>
			    <div class="col-sm-10">
			      	<input type="text" class="form-control"  placeholder="Product Name" style="width:300px;" id="pname">
			    </div>
			    <label class="col-sm-2 control-label">Price</label>
			    <div class="col-sm-10">
			      	<input type="text" class="form-control"  placeholder="Price" style="width:300px;" id="price">
			    </div>
		  	</div>
		  	<div class="form-group">
			    <label class="col-sm-2 control-label">Detail</label>
			    <textarea class="form-control" rows="5" style="position:relative; top:10px; left:12px; width:600px;" id="detail" ></textarea>
		  	</div>
		  	<div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      	<button type="button" class="btn btn-primary" style="position:relative;" id="add">Add</button>
			    </div>
		  </div>
    	</from>
	</div>  
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

