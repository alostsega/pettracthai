<?php
  session_start();
    include_once('../api/config.php');
  echo "                                                                                                                                                 ";
  if(isset($_SESSION['username']) && isset($_SESSION['class'])){
      if ($_SESSION['class'] == 'admin' || $_SESSION['class'] == "coadmin" ) {
        
      } 
      else if ($_SESSION['class'] == 'user') {
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
    <script type="text/javascript" language="javascript" src="../jscript/jquery.min.js"></script>
    <script type="text/javascript" language="javascript" src="../jscript/jquery-ui.js"></script>
    <script type="text/javascript" language="javascript" src="../jscript/mainscript.js"></script>
    <script type="text/javascript" language="javascript" src="../jscript/jquery.form.js"></script>
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
           $.ajax({
                url: "Certificate_oid.php?oid=" + aData[4].substring(0,8) ,
                type: 'POST',
                success: function(result) {
                  jqTds[0].innerHTML = aData[0];
                  jqTds[1].innerHTML = '<input class="form-control" type="text" value="'+aData[1]+'">';
                  jqTds[2].innerHTML = aData[2];
                  jqTds[3].innerHTML = aData[3];
                  jqTds[4].innerHTML = result;
                  jqTds[5].innerHTML =  '<button type="button" class="btn btn-success" id="edit">Edit</button> '+
                                        '<button type="button" class="btn btn-warning" id="edit">Cancel</button>';
              }});
        }

        function saveRow ( oTable, nRow )
        {
          var aData = oTable.fnGetData(nRow);
          var jqInputs = $('input', nRow);
          var newOid = document.getElementById('editOid').value;
          if (jqInputs[0].value != "") {
            $.ajax({
                url: "Certificate_edit.php?microchipid=" + aData[0] +"&pname=" +  jqInputs[0].value +"&oid="+  newOid,
                type: 'POST',
                success: function(result) {
                oTable.fnUpdate( aData[0], nRow, 0, false );
                oTable.fnUpdate( jqInputs[0].value, nRow, 1, false );
                oTable.fnUpdate( aData[2], nRow, 2, false );
                oTable.fnUpdate( aData[3], nRow, 3, false );
                oTable.fnUpdate( newOid+"<br>"+result, nRow, 4, false );
                oTable.fnUpdate(  '<button type="button" class="btn btn-info" id="edit">Edit</button> '+
                                  ' <button type="button" class="btn btn-danger" id="delete">Delete</button>', nRow, 5, false );
              }});
          // oTable.fnDraw();
          return true;
        }else{
          alert("pet's name can't empty");
          return false;
        };
          //oTable.fnPageChange( 0 );
             
        }

        $(document).ready(function() {
        	 var oTable = $('#example').dataTable({
           		 "bJQueryUI": true,
           		 "sPaginationType": "full_numbers",
               "bAutoWidth": false,
           		"aoColumnDefs": [  { 'bSortable': false, 'aTargets': [ 5 ] } ]
        	});

           var nEditing = null;
  
          $('#add').click( function (e) {
            e.preventDefault();
            var microchipid = document.getElementById('microchipid').value;
            if (microchipid.length == 10 || microchipid.length == 15) {
              var aiNew = oTable.fnAddData( [ microchipid, 
                                              '', 
                                              '', 
                                              '',
                                              '',   
                                              '<button type="button" class="btn btn-info" id="edit">Edit</button> '+
                                              ' <button type="button" class="btn btn-danger" id="delete">Delete</button>'  
                                              ] );
              
              $.ajax({
                url: "Certificate_add.php?microchipid=" + microchipid ,
                type: 'POST',
                success: function(result) {
                  // alert(result);
              }});
              document.getElementById('microchipid').value = '';
              var nRow = oTable.fnGetNodes( aiNew[0] );
              restoreRow( oTable, nEditing );
              nEditing = null;
            }
            else{
              alert(" microchip ID is incorrect ! ");
            };
          } );

          $('#example button#delete').live('click', function (e) {
            e.preventDefault();
            
            var nRow = $(this).parents('tr')[0];
            var aData = oTable.fnGetData(nRow);
            if(confirm('Delete ' + aData[0] + '  ?' )==true)
            {
                oTable.fnDeleteRow( nRow );

                $.ajax({
                    url: "Certificate_delete.php?microchipid=" + aData[0] ,
                    type: 'POST',
                    success: function(result) {
                  }});
          }
          } );

          $('#example button#edit').live('click', function (e) {
            e.preventDefault();
            
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

        
    </script>
  </head>
  
  <body>
    <!-- <div style="position:absolute;z-index:2;top:150px;left:50%;" id="editform">
      <div style="position:relative; left:-35%; background-color:#b0c4de;width:600px;height:600px;">
        <form class="form-horizontal" role="form" style="position:relative;top:30px;">
          <div class="form-group">
            <label for="PetName" class="col-sm-2 control-label" style="position:relative;width:150px;">Pet's Name</label>
            <input type="text" class="form-control" id="editPetName" style="position:relative;left:50px; width:300px;">
          </div>
          <div class="form-group">
            <label for="Specie" class="col-sm-2 control-label" style="position:relative;width:150px;">Specie</label>
            <input type="text" class="form-control" id="editSpecie" style="position:relative;left:50px; width:300px;">
          </div>
          <div class="form-group">
            <label for="Breed" class="col-sm-2 control-label" style="position:relative;width:150px;">Breed</label>
            <input type="text" class="form-control" id="editBreed" style="position:relative;left:50px; width:300px;">
          </div>
        </form>
      </div>
    </div> -->
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
            <li class="active"><a href="#"><i class="fa fa-dashboard"></i> Certificate Management</a></li>
            <li><a href="Product.php"><i class="fa fa-bar-chart-o"></i> Product Management</a></li>
            <li><a href="Order.php"><i class="fa fa-table"></i> Order Management</a></li>
            <li><a href="User.php"><i class="fa fa-edit"></i> User Management</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" ><i class="fa fa-user"></i> Log Out <b class="caret"></b></a>
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
            <h1>Certificate Management</h1>
            <ol class="breadcrumb">
              <li class="active"></i>Microchip list</a></li>
            </ol>
          </div>
        </div><!-- /.row -->
         <div class="row" style="position:relative;z-index:1;">
          <div class="col-lg-12">
         <!--   <h2>Flot Charts</h2> -->
            <div class="panel panel-primary" style="border-right-style:hidden;border-left-style:hidden;border-bottom-style:hidden;">
              <div class="panel-body" border="0">
                <div class="flot-chart">
                   <div >  
    <table cellpadding="0" cellspacing="0" border="0" class="display" id="example" >
      <thead>
          <tr>
            <td class="center" ><b>Microchip ID</b></td>
            <td class="center" style="width:200px;"><b>Pet's name</b></td>
            <td class="center" style="width:200px;"><b>Specie</b></td>
            <td class="center" style="width:200px;"><b>Breed</b></td>
            <td class="center" style="width:200px;"><b>Owner</b></td>
            <td class="center" style="width:200px;"><b>Action</b></td>
          </tr>
        </thead>
        <tbody>
        	<?php 
              $sql = "SELECT `microchip`, `petname`, `specie`, `breed` , `oid`FROM `certificate`";
              $result = mysql_query($sql) or die("SQL Error 1: " . mysql_error());
               while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
              $sql = "SELECT `ofirstname` FROM `owner` WHERE `oid` = '{$row['oid']}'";
              $result2 = mysql_query($sql) or die("SQL Error 1: " . mysql_error());
              list($oName) = mysql_fetch_row($result2);
        	?>
        	<tr>
            <td style="width:160px;"><?php echo $row['microchip']; ?></td>
            <td > <?php echo $row['petname']; ?> </td>
            <td style="width:250px;"><?php echo $row['specie']; ?></td>
            <td style="width:250px;"><?php echo $row['breed']; ?></td>
            <td style="width:250px;"><?php echo $row['oid']."<br>".$oName; ?></td>
            <td style="width:200px;">
                <button type="submit" class="btn btn-info" id="edit">Edit</button>
	        	    <button type="submit" class="btn btn-danger" id="delete">Delete</button>
    		    </td>
          </tr>
          	<?php
          	}
       		?>
        </tbody>
    </table>    
    <div style="position:relative; top:20px;z-index:1;">
    	<form class="form-inline" role="form">
	    	<input type="text" class="form-control" placeholder="Microchip ID" style="width:300px;" id="microchipid">
	    	<button type="button" class="btn btn-primary" style="position:relative left:50px;" id="add" >Add</button>
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

